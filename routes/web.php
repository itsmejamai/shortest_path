<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\RouteController;
use App\Http\Controllers\DeliveryController;

Route::get('/', function () {
    return view('welcome');
});

Route::post('/users', [UserController::class, 'store']);
Route::post('/users/{user}', [UserController::class, 'show']);
Route::post('/routes', [RouteController::class, 'store']);
Route::post('/routes/{route}', [RouteController::class, 'show']);
Route::post('/deliveries', [DeliveryController::class, 'store']);
Route::post('/deliveries/{delivery}', [DeliveryController::class, 'show']);

Route::put('/users/{user}', [UserController::class, 'update']);
Route::put('/routes/{route}', [RouteController::class, 'update']);
Route::put('/deliveries/{delivery}', [DeliveryController::class, 'update']);

Route::delete('/users/{user}', [UserController::class, 'destroy']);
Route::delete('/routes/{route}', [RouteController::class, 'destroy']);
Route::delete('/deliveries/{delivery}', [DeliveryController::class, 'destroy']);

Route::get('/users', [UserController::class, 'index']);
Route::get('/users/{user}', [UserController::class, 'show']);
Route::get('/routes', [RouteController::class, 'index']);
Route::get('/routes/{route}', [RouteController::class, 'show']);
Route::get('/deliveries', [DeliveryController::class, 'index']);
Route::get('/deliveries/{delivery}', [DeliveryController::class, 'show']);