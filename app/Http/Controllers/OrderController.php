<?php

namespace App\Http\Controllers;

use App\Models\Order;
use App\Models\User;
use Illuminate\Http\Request;

class OrderController extends Controller
{
    public function handleRedirect() {
        return redirect('/pickupschedule/1');
    }
    /**
     * Display a listing of the resource.
     */
    public function index(User $user)
    {
        // Select all users with the role of user and admin
        $users = User::where('role','user')->orWhere('role','admin')->get();
        // Select all orders with the users (joined) and is_urgent = 0 and the date is more than current Date and the user_id = $user->id
        $orders = Order::with('user')->where('is_urgent',0)->where('order_date','>=',date('Y-m-d'))->where('user_id',$user->id)->get();

        // Return the view with the orders
        return view('dashboard.pickupschedule', compact('orders','users','user'));
    }

    public function urgentpickup()
    {
        // Sellect all users and orders with the users (joined) and is_urgent = 1
        $users = User::all();
        $orders = Order::with('user')->where('is_urgent',1)->get();
        return view('dashboard.urgentpickup',compact('orders','users'));
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
    public function show(Order $order)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Order $order)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Order $order)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Order $order)
    {
        //
    }
    public function pickupstatus(Request $request)
    {
        // The number of users with the role of user
        $user = User::where('role','user')->count();
        // The number of users with the role of driver
        $driver = User::where('role','driver')->count();

        // The total number of orders
        $totalOrders = Order::count();

        // The number of orders with is_urgent = 1
        $urgentOrders = Order::where('is_urgent',1)->count();

        // The number of orders where is_urgent = 0
        $normalOrders = Order::where('is_urgent',0)->count();

        if (request('search')) {
            $searchTerm = request('search');
            $ordersData = Order::with('user')
            ->whereHas('user', function ($query) use ($searchTerm) {
                $query->where('name', 'like', '%' . $searchTerm . '%');
            })
            ->orderBy('order_date', 'asc')
            ->get();
        } else {
            // All orders but sorted from the closest order_date
            $ordersData = Order::orderBy('order_date', 'asc')->get();
        }
        
        if (request('urgent')) {
            $ordersData = Order::Where('is_urgent',1)->orderBy('order_date','asc')->get();
        }

        return view('dashboard.pickupstatus',compact('user','driver','totalOrders','urgentOrders','normalOrders','ordersData'));
    }
}
