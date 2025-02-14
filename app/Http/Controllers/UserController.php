<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Order;
use App\Models\Track;

use Illuminate\Support\Facades\Auth;


class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function home()
    {
        // Count the number of User with the role of user
        $users = User::where('role','user')->count();
        // Count the number of User with the role of driver
        $drivers = User::where('role','driver')->count();
        // Count the number of Orders with the status of completed
        $orders = Order::where('status','completed')->count();
        return view('dashboard.home',compact('users','drivers','orders'));
    }

    public function adduser()
    {
        return view('dashboard.adduser');
    }

    public function edituser()
    {
        return view('dashboard.edituser');
    }

    public function userdata()
    {
        return view('dashboard.userdata');
    }

    public function seepoints()
    {
        return view('dashboard.user-seepoints');
    }

    // Driver

    public function adddriver()
    {
        return view('dashboard.adddriver');
    }

    public function editdriver()
    {
        return view('dashboard.editdriver');
    }

    public function driverdata()
    {
        return view('dashboard.driverdata');
    }

    public function assigndriver(Order $order)
    {
        $user = $order->user;
        $drivers = User::where('role','driver')->get();
        return view('dashboard.assigndriver', compact('order','user','drivers'));
    }

    public function searchdriver(Request $request, Order $order)
    {
        $user = $order->user;
        $drivers = User::where('role','driver')->where('name','like','%'.$request->search.'%')->get();
        return view('dashboard.assigndriver', compact('order','user','drivers'));
    }

    public function assigndriveraction (Order $order, Request $request)
    {
        $order->driver_id = request('driver_id');
        $order->save();

        $track = new Track;
        $track->order_id = $order->id;

        $driver = User::find($order->driver_id);
        $track->status = 'Driver assigned, and is on the way. Drivers name: '.$driver->name;
        $track->save();
        return redirect('/pickupschedule/'.$order->user->id);
    }
    // Login

    public function loginpage()
    {
        return view('dashboard.loginpage');
    }

    public function login(Request $request)
    {
        $request->validate([
            'email' => 'required|email',
            'password' => 'required'
        ]);

        if(Auth::attempt(['email'=>$request->email,'password'=>$request->password])) {
                // if login success
        } else {
            //login failed
        }
        
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
