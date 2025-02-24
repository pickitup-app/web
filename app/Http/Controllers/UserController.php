<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Order;
use App\Models\Track;

use Illuminate\Support\Facades\Auth;


class UserController extends Controller
{
    public function deleteuser(User $user)
    {
        $user->delete();
        return redirect('/userdata');
    }
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

        // Count the number of User with the role of admin
        $admins = User::where('role','admin')->count();
        return view('dashboard.home',compact('users','drivers','orders','admins'));
    }

    public function adduser()
    {
        return view('dashboard.adduser');
    }

    public function edituser(User $user)
    {
        return view('dashboard.edituser',compact('user'));
    }

    public function updateuser(Request $request)
    {
        $user = User::find($request->id);
        $user->name = request('name');
        $user->email = request('email');
        $user->phone_number = request('phone_number');
        $user->street_name = request('street_name');
        $user->rt = request('rt');
        $user->rw = request('rw');
        $user->save();
        return redirect('/userdata');
    }

    public function userdata()
    {
        $users = User::where('role','user')->get();
        return view('dashboard.userdata', compact('users'));
    }

    public function seepoints(User $user)
    {
        $trashes = $user->trashes;   
        return view('dashboard.user-seepoints',compact('user','trashes'));
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
        $drivers = User::where('role','driver')->get();
        return view('dashboard.driverdata', compact('drivers'));
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
        if ($order->is_urgent != 1) {
            $order->time_slot=null;
        }
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

    public function loginaction(Request $request)
    {
        // $request->validate([
        //     'email' => 'required|email',
        //     'password' => 'required'
        // ]);

        if(Auth::attempt(['email'=>$request->email,'password'=>$request->password])) {
            return redirect('/');
        } else {
            dd($request->all());
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
