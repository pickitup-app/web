<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\OrderController;
use App\Http\Controllers\TrackController;
use App\Http\Controllers\TrashController;
use App\Http\Controllers\InvoiceController;
use App\Http\Controllers\BagController;

// Group Middleware
Route::middleware(['admin'])->group(function () {
    Route::get('/',[UserController::class,'home']);
    Route::get('/pickupstatus', [OrderController::class,'pickupstatus']);
    Route::get('/adduser',[UserController::class,'adduser']);
    Route::get('/edituser/{user}',[UserController::class,'edituser']);
    Route::put('/edituser/put',[UserController::class,'updateuser']);
    Route::get('/userdata',[UserController::class,'userdata']);
    Route::get('/see-points/{user}',[UserController::class,'seepoints']);
    Route::get('/delete/{user}',[UserController::class,'deleteuser']);


    Route::get('/adddriver',[UserController::class,'adddriver']);
    Route::get('/editdriver',[UserController::class,'editdriver']);
    Route::get('/driverdata',[UserController::class,'driverdata']);

    Route::get('/assigndriver/{order}',[UserController::class,'assigndriver']);
    Route::get('/assigndriver/{order}/search',[UserController::class,'searchdriver']);
    Route::post('/assigndriver/action/{order}',[UserController::class,'assigndriveraction']);

    Route::get('/pickupschedule/{user}', [OrderController::class,'index']);
    Route::get('/pickupschedule/', [OrderController::class,'handleRedirect']);


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

    Route::get('/trashinfo', [TrashController::class,'index']);

    Route::get('/urgentpickup',[OrderController::class,'urgentpickup']);
});

Route::get('/login',[UserController::class,'loginpage'])->name('login');
Route::post('/login/post',[UserController::class,'loginaction']);