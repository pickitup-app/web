<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Order;
use App\Models\Track;
use App\Models\Trash;

class MobileDriverController extends Controller
{
    public function getAssignedOrders(User $driver)
    {
        // Select all orders with the user id of the user
        $orders = Order::with('user')
        ->where('driver_id', $driver->id)
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