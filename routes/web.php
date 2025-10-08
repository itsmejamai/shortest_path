<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\RouteController;
use App\Http\Controllers\DeliveryController;

Route::get('/', function () {
    return view('welcome');
});

Route::apiResource('users', UserController::class);
Route::apiResource('routes', RouteController::class);
Route::apiResource('deliveries', DeliveryController::class);
