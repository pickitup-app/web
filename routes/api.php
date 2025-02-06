<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MobileController;

Route::get('/user',[MobileController::class,'getUser']);
Route::post('/login',[MobileController::class,'login']);
Route::post('/submit-membership',[MobileController::class,'submitmembership']);

Route::post('/register',[MobileController::class,'register']);
