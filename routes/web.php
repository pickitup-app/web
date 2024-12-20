<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('dashboard.home');
});

Route::get('/login', function () {
    return view('loginpage');
});
Route::get('/dashboard', function () {
    return view('layouts.index');
});

Route::get('/pickupstatus', function () {
    return view('dashboard.pickupstatus');
});

Route::get('/adduser', function () {
    return view('dashboard.adduser');
});

Route::get('/adddriver', function () {
    return view('dashboard.adddriver');
});

Route::get('/edituser', function () {
    return view('dashboard.edituser');
});

Route::get('/editdriver', function () {
    return view('dashboard.editdriver');
});

Route::get('/adddop', function () {
    return view('dashboard.adddop');
});

Route::get('/editdop', function () {
    return view('dashboard.editdop');
});

Route::get('/updatetrash', function () {
    return view('dashboard.updatetrash');
});

Route::get('/userdata', function () {
    return view('dashboard.userdata');
});

Route::get('/driverdata', function () {
    return view('dashboard.driverdata');
});

Route::get('/seepoints', function () {
    return view('dashboard.user-seepoints');
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

Route::get('/assigndriver', function () {
    return view('dashboard.assigndriver');
});