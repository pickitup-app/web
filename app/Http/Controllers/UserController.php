<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

use Illuminate\Support\Facades\Auth;


class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('dashboard.home');
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

    // Login

    public function loginpage()
    {
        return view('dashboard.login');
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
