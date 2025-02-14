<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MobileController;

Route::get('/profile',[MobileController::class,'getUser'])->middleware('auth:sanctum');
Route::post('/login',[MobileController::class,'login']);
Route::post('/submit-membership',[MobileController::class,'submitmembership']);
Route::get('/is-subscribed',[MobileController::class,'isSubscribed'])->middleware('auth:sanctum');
Route::get('/get-user-orders',[MobileController::class,'getUserOrders'])->middleware('auth:sanctum');
Route::post('/register',[MobileController::class,'register']);
Route::post('/update-profile',[MobileController::class,'updateProfile'])->middleware('auth:sanctum');

Route::post('/get-tracks',[MobileController::class,'getTracks'])->middleware('auth:sanctum');
