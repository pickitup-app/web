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
        // Select all users
        $users = User::all();
        // Select all orders with the users (joined)
        $orders = Order::where('user_id', $user->id)->get();

        // Return the view with the orders
        return view('dashboard.pickupschedule', compact('orders','users','user'));
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
}
