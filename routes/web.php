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