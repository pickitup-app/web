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

    public function adduserpost(Request $request)
    {
        // Validate the request: required, phone_number must be numeric and 11-13 digit
        $request->validate([
            'name' => 'required',
            'email' => 'required|email',
            'phone_number' => 'required|numeric|digits_between:11,13|unique:users',
            'street_name' => 'required',
            'rt' => 'required',
            'rw' => 'required',
        ]);

        $user = new User;
        $user->name = request('name');
        $user->email = request('email');
        $user->phone_number = request('phone_number');
        $user->street_name = request('street_name');
        $user->rt = request('rt');
        $user->rw = request('rw');
        $user->role = 'user';
        $user->password = bcrypt('password');
        $user->save();
        return redirect('/userdata');
    }

    public function edituser(User $user)
    {
        return view('dashboard.edituser',compact('user'));
    }

    public function updateuser(Request $request)
    {
        // Validate request: all required, number must be numeric and length between 11-13 digits
        $request->validate([
            'name' => 'required',
            'email' => 'required|email',
            'phone_number' => 'required|numeric|digits_between:11,13',
            'street_name' => 'required',
            'rt' => 'required',
            'rw' => 'required',
        ]);

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

    public function userdata(Request $request)
    {
        // if request exist then search for the user based on the name
        if ($request->search) {
            $users = User::where('role','user')->where('name','like','%'.$request->search.'%')->get();
            return view('dashboard.userdata', compact('users'));
        } else {
            $users = User::where('role','user')->get();
            return view('dashboard.userdata', compact('users'));
        }
    }

    public function seepoints(User $user)
    {
        // Join user with orders and get the trash based on order id
        $trashes = $user->orders()->join('trashes','orders.id','=','trashes.order_id')->get();
        return view('dashboard.user-seepoints',compact('user','trashes'));
    }

    // Driver

    public function adddriver()
    {

        return view('dashboard.adddriver');
    }

    public function adddriverpost(Request $request) {
        // Insert driver to users
        $user = new User;
        $user->name = request('name');
        $user->email = request('email');
        $user->phone_number = request('phone_number');
        $user->role = 'driver';
        $user->password = bcrypt('password');
        $user->rt=request('rt');
        $user->rw=request('rw');
        $user->street_name=request('street_name');
        $user->save();
        return redirect('/driverdata');
    }

    public function editdriver(User $user)
    {
        return view('dashboard.editdriver',compact('user'));
    }

    public function deletedriver(User $user)
    {
        $user->delete();
        return redirect('/driverdata');
    }

    public function driverdata()
    {
        $drivers = User::where('role','driver')->get();
        return view('dashboard.driverdata', compact('drivers'));
    }

    public function searchdriverdata(Request $request)
    {
        $drivers = User::where('role','driver')->where('name','like','%'.$request->search.'%')->get();
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
            return redirect('/login')->with('error','Email or Password is incorrect');
        }
        
    }
    public function logout() {
        Auth::logout();
        return redirect('/login');
    }
}
