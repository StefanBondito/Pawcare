<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\ShoppingCartController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PetController;
use App\Http\Controllers\ItemController;
use App\Http\Controllers\UserController;


// Auth
Auth::routes();

Route::get('/', [AuthController::class, 'homeGet']);
Route::get('/home', [AuthController::class, 'homeGet']);
Route::get('/home_user', [AuthController::class, 'homeGet'])->middleware('auth')->name('home');


// Apply admin access middleware
Route::middleware(['auth','admin.access'])->group(function () {
    // Add all routes that should be accessible by admin
    Route::get('/dashboard', [AuthController::class, 'homeGet'])->name('dashboard');
    Route::get('/admin/home', [AuthController::class, 'admin_homeGet']);
    Route::get('/admin/home_user', [AuthController::class, 'admin_homeGet'])->name('adminhome');
    // Add more routes here
});

Route::middleware('auth.redirect')->group(function () {
    Route::get('/login',[AuthController::class, 'loginGet'])->name('login');
    Route::post('/login',[AuthController::class, 'loginPost']);
    Route::get('/signup',[AuthController::class, 'signUpGet'])->name('signup');
    Route::post('/signup',[AuthController::class, 'registerPost']);
});

Route::controller(PetController::class)->prefix('pets')->name('pets.')->group(function () {
    Route::delete('{pet}/delete', 'delete')->name('delete');
});

Route::middleware('auth')->group(function () {
    Route::resource('pets', PetController::class);
    Route::get('/pets', [PetController::Class, 'index'])->name('pets.index');
    Route::post('/store', [PetController::Class, 'store'])->name('pets.store');
    Route::post('pets/{pet}/update', [PetController::Class, 'update'])->name('pets.update');
    Route::delete('pets/{pet}/delete', [PetController::Class, 'delete'])->name('pets.delete');
});

Route::middleware('auth')->group(function () {
    Route::resource('cart', ShoppingCartController::class);
    Route::get('/cart', [ShoppingCartController::Class, 'index'])->name('cart.index');
    Route::post('/cart/store', [ShoppingCartController::Class, 'store'])->name('cart.save');
});


Route::middleware('auth')->group(function () {
    Route::get('/logout', [AuthController::Class, 'logoutPost'])->middleware('auth')->name('logout');
});

Route::middleware('auth')->group(function () {
    Route::resource('items', ItemController::class);
    Route::delete('items/{item}/delete', [ItemController::Class, 'delete'])->name('items.delete');
    Route::post('/store', [ItemController::Class, 'store'])->name('items.store');
    Route::get('/items', [ItemController::Class, 'index'])->name('items.index');
    Route::post('items/{item}/update', [ItemController::Class, 'update'])->name('items.update');

});


