<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Order;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\ValidationException;

class MobileController extends Controller
{
    public function login(Request $request)
    {
        $request->validate([
            'email' => 'required|email',
            'password' => 'required',
            'device_name' => 'required',
        ]);
     
        $user = User::where('email', $request->email)->first();
     
        if (! $user || !Hash::check($request->password, $user->password)) {
            throw ValidationException::withMessages([
                'email' => ['The provided credentials are incorrect.'],
            ]);
        }

        // Buat token menggunakan Sanctum
        $token = $user->createToken($request->device_name)->plainTextToken;

        return response()->json([
            'success' => true,
            'message' => 'Login successful.',
            'data' => [
                'token' => $token,
                'user' => [
                    'id' => $user->id,
                    'name' => $user->name,
                    'email' => $user->email,
                    'phone_number' => $user->phone_number,
                    'is_subscribed' => $user->is_subscribed,
                    'subscribed_until' => $user->subscribed_until,
                ],
            ],
        ],200);
    }

    public function register(Request $request)
    {
        $request->validate([
            'email' => 'required|email|unique:users',
            'name' => 'required|string|max:255',
            'phone_number' => 'required|string',
            'password' => 'required|string|min:6',
            'device_name' => 'required', // Pastikan device_name ada
        ]);

        // Buat pengguna baru
        $user = User::create([
            'email' => $request->email,
            'name' => $request->name,
            'phone_number' => $request->phone_number,
            'password' => Hash::make($request->password),
            'is_subscribed' => false,
            'subscribed_until' => null,
        ]);

        // Buat token menggunakan Sanctum
        $token = $user->createToken($request->device_name)->plainTextToken;

        return response()->json([
            'success' => true,
            'message' => 'Registration successful.',
            'data' => [
                'token' => $token,
                'user' => [
                    'id' => $user->id,
                    'name' => $user->name,
                    'email' => $user->email,
                    'phone_number' => $user->phone_number,
                    'is_subscribed' => $user->is_subscribed,
                    'subscribed_until' => $user->subscribed_until,
                ],
            ],
        ],200);
    }

    public function isUserSubscribed(Request $request)
    {
        return response()->json([
            'is_subscribed' => $request->user()->is_subscribed,
            'subscribed_until' => $request->user()->subscribed_until,
        ]);
    }

    public function submitmembership(Request $request)
    {
        // Validate the request data.
        $validatedData = $request->validate([
            'street_address' => 'required|string',
            'rt'             => 'required|string',
            'rw'             => 'required|string',
            'postal_code'    => 'required|string',
        ]);

        // Try to get authenticated user via Sanctum.
        $user = $request->user();

        // If user is not authenticated, try to find the user by user_id from the request.
        if (!$user) {
            if ($request->has('user_id')) {
                $user = User::find($request->user_id);
                if (!$user) {
                    return response()->json([
                        'success' => false,
                        'message' => 'User not found using provided user_id.'
                    ], 401);
                }
            } else {
                return response()->json([
                    'success' => false,
                    'message' => 'User not authenticated.'
                ], 401);
            }
        }

        // Change ValidatedData index to street_name instead of street_address.
        $validatedData['street_name'] = $validatedData['street_address'];
        unset($validatedData['street_address']);
        
        // Combine membership data with subscription status fields.
        $updateData = array_merge($validatedData, [
            'is_subscribed'    => true,
            'subscribed_until' => now()->addMonth(),
        ]);

        // Update the user record in a single call.
        $user->update($updateData);

        return response()->json([
            'success' => true,
            'message' => 'Membership data submitted.',
            'data'    => $updateData,
        ]);
    }

    public function getUser(Request $request)
    {
        return $request->user();
    }

    public function subscribeUser(Request $request)
    {
        $request->user()->update([
            'is_subscribed' => true,
            'subscribed_until' => now()->addMonth(),
        ]);

        return response()->json([
            'success' => true,
            'message' => 'Subscription successful.',
        ]);
    }

    public function order(Request $request)
    {
        $request->validate([
            'category' => 'required|string',
            'driver_id' => 'required|exists:users,id',
        ]);

        $order = Order::create([
            'user_id' => $request->user()->id,
            'category' => $request->category,
            'driver_id' => $request->driver_id,
            'status' => 'pending',
        ]);

        // Proses order
        return response()->json([
            'success' => true,
            'message' => 'Order successful.',
        ]);
    }

    public function logout(Request $request)
    {
        $request->user()->currentAccessToken()->delete();

        return response()->json([
            'success' => true,
            'message' => 'Logout successful.',
        ]);
    }
}
