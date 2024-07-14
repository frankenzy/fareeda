<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\CategorieController;
use App\Http\Controllers\CustomerController;
use App\Http\Controllers\MenuController;
use App\Http\Controllers\PanierController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\RestaurantController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
})->name('welcome');
Route::get('/cgi', function () {
    return view('cgi');
})->name('cgi');

Route::get('/dashboard', function () {
    return view('app.dashboard');
})->name('dashboard');


Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

// Customer
Route::resource('custom', CustomerController::class);

//Menu
Route::resource('menu', MenuController::class);

//Categories
Route::resource('categories',CategorieController::class);

// Restaurants
Route::resource('restaurants', RestaurantController::class);

// Panier
Route::resource('panier', PanierController::class);
// Mneu
Route::resource('menus', MenuController::class);
// Login route
route::get('/login',[AuthController::class,'LoginForm'])->name('login');
route::post('login',[AuthController::class,'LoginResolve'])->name('login-resolve');

route::get('sign-up',[AuthController::class,'SignUpForm'])->name('sign-up');
route::post('sign-up',[AuthController::class,'SignUpResolve'])->name('signup-resolve');


route::get('staff-login/staff',[AuthController::class,'StaffLoginForm'])->name('staff-login');
route::post('staff-login',[AuthController::class,'StaffLoginResolve'])->name('staff-login-resolve');

route::get('/staff-login/customer',[AuthController::class,'CustomerLoginForm'])->name('staff-login.customer');
route::post('customer-login',[AuthController::class,'CustomerLoginResolve'])->name('customer-login-resolve');

route::get('/staff-login/delivery',[AuthController::class,'DeliveryLoginForm'])->name('staff-login.delivery');
route::post('delivery-login',[AuthController::class,'DeliveryLoginResolve'])->name('delivery-login-resolve');


require __DIR__.'/auth.php';
