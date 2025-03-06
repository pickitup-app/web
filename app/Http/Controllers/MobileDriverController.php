<?php

namespace App\Http\Controllers;
use Carbon\Carbon;
use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Order;
use App\Models\Track;
use App\Models\Trash;
use App\Models\Report;

class MobileDriverController extends Controller
{
    public function getScheduledOrders(User $driver)
{
    // Get current date in UTC
    $currentDate = Carbon::now('UTC')->format('Y-m-d');
    
    // Select all scheduled orders with the driver id
    $orders = Order::with('user')
        ->where('driver_id', $driver->id)
        // ->whereDate('order_date', Carbon::today()) // Filter hanya untuk hari ini
        ->orderBy('order_date', 'asc')
        ->get();
    
    // Group orders by date for easier rendering on the client side
    $groupedOrders = [];
    
    foreach ($orders as $order) {
        // Format the date part only (YYYY-MM-DD) from pickup_time
        $pickupDate = Carbon::parse($order->pickup_time)->format('Y-m-d');
        
        // Initialize the array for this date if it doesn't exist
        if (!isset($groupedOrders[$pickupDate])) {
            $groupedOrders[$pickupDate] = [];
        }
        
        // Add the order to the appropriate date group
        $groupedOrders[$pickupDate][] = $order;
    }
    
    // Sort dates from earliest to latest
    ksort($groupedOrders);
    
    // Force $groupedOrders to be an object if empty, so that Dart always receives an object.
    $groupedOrders = count($groupedOrders) ? $groupedOrders : (object)$groupedOrders;
    
    // Return with proper format json
    return response()->json([
        'data' => $groupedOrders,
        'current_date' => $currentDate
    ]);
}

    public function getAssignedOrders(User $driver)
    {
        // Select all orders with the user id of the user
        $orders = Order::with('user')
        ->where('driver_id', $driver->id)
        ->whereDate('order_date',Carbon::now())
        ->get();
        
        // Return with proper format json
        return response()->json([
            'data' => $orders
        ]);
    }
    
    public function updateOrderStatus(Order $order, Request $request)
    {
        $nextStatus = $request->status;
        
        // Validate the status transition
        $validStatuses = ['scheduled', 'confirmed', 'on_the_way', 'completed'];
        if (!in_array($nextStatus, $validStatuses)) {
            return response()->json([
                'message' => 'Invalid status'
            ], 400);
        }
        
        // Update the order status
        $order->status = $nextStatus;
        if ($order->status === 'confirmed') {
            $track = new Track;
            $track->order_id = $order->id;
            $track->status = "Driver confirmed the order.";
            $track->save();
        } else if($order->status === 'on_the_way') {
            $track = new Track;
            $track->order_id = $order->id;
            $track->status = "Driver is on the way to your address.";
            $track->save();
        } else if ($order->status === 'completed') {
            $track = new Track;
            $track->order_id = $order->id;
            $track->status = "Driver completed the order.";
            $track->save();
        }
        $order->save();
        
        // If the status is completed, create trash record
        if ($nextStatus === 'completed') {
            $trash = new Trash;
            $trash->order_id = $order->id;
            $trash->category = "Unlabeled";
            $trash->save();
        }
        
        // Return with proper format json
        return response()->json([
            'message' => 'Order status updated to ' . $nextStatus,
            'data' => $order
        ]);
    }

    // Legacy method - redirects to updateOrderStatus
    public function completeOrder(Order $order)
    {
        $request = new Request();
        $request->merge(['status' => 'completed']);
        return $this->updateOrderStatus($order, $request);
    }

    public function submitReport(Request $request, Order $order) 
    {
        $report = new Report;
        $report->driver_id = $request->driver_id;
        $report->order_id = $request->order_id;
        $report->problem = $request->problem;
        $report->save();

        $order->status = 'reported';
        $order->save();

        return response()->json([
            'message' => 'Report submitted',
            'data' => $report
        ]);
    }

    public function getProfile()
    {
        $driver = auth()->user(); 
        // Return total days of registered
        $registered = Carbon::parse($driver->created_at);

        $driver->total_days = $registered->longRelativeDiffForHumans(2);

        // Return total Orders completed
        $driver->total_orders = Order::where('driver_id', $driver->id)->where('status', 'completed')->count();

        // Return total Orders reported
        $driver->total_reports = Report::where('driver_id', $driver->id)->count();

        return response()->json([
            'data' => $driver
        ]);
    }

    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}