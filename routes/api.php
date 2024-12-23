<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

// 

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');



Route::post('/login/token',[MobileController::class,'login']);
Route::post('/register',[MobileController::class,'register']);
