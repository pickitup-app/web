<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MobileController;
use App\Http\Controllers\MobileDriverController;
use App\Http\Controllers\ChatController;

Route::get('/profile',[MobileController::class,'getUser'])->middleware('auth:sanctum');
Route::post('/login',[MobileController::class,'login']);
Route::post('/submit-membership',[MobileController::class,'submitmembership']);
Route::get('/is-subscribed',[MobileController::class,'isSubscribed'])->middleware('auth:sanctum');
Route::get('/get-user-orders',[MobileController::class,'getUserOrders'])->middleware('auth:sanctum');
Route::post('/register',[MobileController::class,'register']);
Route::post('/update-profile',[MobileController::class,'updateProfile'])->middleware('auth:sanctum');

Route::post('/get-tracks',[MobileController::class,'getTracks'])->middleware('auth:sanctum');

// Chats System
Route::get('/get-chats',[ChatController::class,'getChats'])->middleware('auth:sanctum');
Route::post('/send-chat',[ChatController::class,'sendChat'])->middleware('auth:sanctum');

// Drivers
Route::get('/get-assigned-orders/{driver}',[MobileDriverController::class,'getAssignedOrders'])->middleware('auth:sanctum');
Route::post('/complete-order/{order}',[MobileDriverController::class,'completeOrder'])->middleware('auth:sanctum');
Route::post('/update-order-status/{order}', [MobileDriverController::class, 'updateOrderStatus']);
Route::get('/get-scheduled-orders/{driver}', [MobileDriverController::class, 'getScheduledOrders']);
Route::post('/submit-report/{order}',[MobileDriverController::class,'submitReport'])->middleware('auth:sanctum');
Route::get('/get-profile',[MobileDriverController::class,'getProfile'])->middleware('auth:sanctum');


// Urgent pickup system
Route::post('/urgent-pickup',[MobileController::class,'submitUrgentPickup'])->middleware('auth:sanctum');

// Articles
Route::get('/get-articles',[MobileController::class,'getArticles']);
Route::get('/get-article/{article:id}',[MobileController::class,'getSpecificArticle']);


// Catalogs
Route::get('/get-catalogs',[MobileController::class,'getAllCatalogs']);
Route::get('/get-catalogs-user',[MobileController::class,'getAllCatalogsUser'])->middleware('auth:sanctum');
Route::get('/get-catalog/{catalog:id}',[MobileController::class,'getSpecificCatalog']);

// Redeem
Route::post('/redeem/{catalog:id}',[MobileController::class,'redeemVoucher'])->middleware('auth:sanctum');
Route::get('/get-user-point',[MobileController::class,'getUserPoint'])->middleware('auth:sanctum');

