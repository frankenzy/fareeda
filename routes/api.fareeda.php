<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\CategorieController;
use App\Http\Controllers\CustomerController;
use App\Http\Controllers\MenuController;
use App\Http\Controllers\RestaurantController;
use Illuminate\Support\Facades\Route;


Route::prefix('fareeda')->group(function(){
    Route::apiResource('restaurants', RestaurantController::class);
    Route::apiResource('menus', MenuController::class);
    Route::apiResource('categories', CategorieController::class);
    Route::apiResource('customers', CustomerController::class);
    Route::apiResource('auth', AuthController::class);
});

