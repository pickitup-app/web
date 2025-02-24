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

    public function completeOrder(Order $order)
    {
        // Update the order status to completed
        $order->status = 'completed';
        $order->save();
        
        $trash = new Trash;
        $trash->order_id = $order->id;
        $trash->save();

        // Return with proper format json
        return response()->json([
            'message' => 'Order completed'
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
