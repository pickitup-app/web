<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\ValidationException;

class MobileController extends Controller
{
        public function login(Request $request) {
        $request->validate([
            'email' => 'required|email',
            'password' => 'required',
            'device_name' => 'required',
        ]);
     
        $user = User::where('email', $request->email)->first();
     
        if (! $user || ! Hash::check($request->password, $user->password)) {
            throw ValidationException::withMessages([
                'email' => ['The provided credentials are incorrect.'],
            ]);
        }
     
        return $user->createToken($request->device_name)->plainTextToken;
    }

    public function register(Request $request) {
        $user = new User;
        $data = $request->validate([
                'email' => 'required|email',
                'name' => 'required',
                'phone_number' => 'required|0-9|min:11',
                'password' => 'required',
                'device_name' => 'required'
        ]);
    }
    
}
