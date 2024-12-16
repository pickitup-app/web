<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('login');
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