<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\OrderController;
use App\Http\Controllers\TrackController;
use App\Http\Controllers\TrashController;
use App\Http\Controllers\InvoiceController;
use App\Http\Controllers\BagController;

Route::get('/',[UserController::class,'home']);

Route::get('/login',[UserController::class,'loginpage']);

Route::get('/pickupstatus', function () {
    return view('dashboard.pickupstatus');
});

Route::get('/adduser',[UserController::class,'adduser']);
Route::get('/edituser',[UserController::class,'edituser']);
Route::get('/userdata',[UserController::class,'userdata']);
Route::get('/see-points',[UserController::class,'seepoints']);

Route::get('/adddriver',[UserController::class,'adddriver']);
Route::get('/editdriver',[UserController::class,'editdriver']);
Route::get('/driverdata',[UserController::class,'driverdata']);
Route::get('/assigndriver',[UserController::class,'assigndriver']);

Route::get('/adddop', function () {
    return view('dashboard.adddop');
});

Route::get('/editdop', function () {
    return view('dashboard.editdop');
});

Route::get('/updatetrash', function () {
    return view('dashboard.updatetrash');
});



Route::get('/dropoffpoint', function () {
    return view('dashboard.dropoffpoint');
});

Route::get('/trashinfo', function () {
    return view('dashboard.trashinfo');
});

Route::get('/pickupschedule', function () {
    return view('dashboard.pickupschedule');
});

Route::get('/urgentpickup', function () {
    return view('dashboard.urgentpickup');
});