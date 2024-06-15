<?php

use App\Http\Controllers\AuthController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PetController;
use App\Http\Controllers\ItemController;
use App\Http\Controllers\UserController;


// Auth
Auth::routes();

Route::get('/', [AuthController::class, 'homeGet']);
Route::get('/home', [AuthController::class, 'homeGet']);
Route::get('/home_user', [AuthController::class, 'homeGet'])->middleware('auth')->name('home');

Route::get('dashboard', function(){
    return view('dashboard');
});

// Route::get('/login', function(){ return view('login'); });

Route::middleware('auth.redirect')->group(function () {
    Route::get('/login',[AuthController::class, 'loginGet'])->name('login');
    Route::post('/login',[AuthController::class, 'loginPost']);
    Route::get('/signup',[AuthController::class, 'signUpGet'])->name('signup');
    Route::post('/signup',[AuthController::class, 'registerPost']);
});

Route::controller(PetController::class)->prefix('pets')->name('pets.')->group(function () {
    Route::delete('{pet}/delete', 'delete')->name('delete');
    Route::post('store', 'store')->name('store');
});

Route::middleware('auth')->group(function () {
    Route::resource('/pets', PetController::class);
    Route::get('/pets', [PetController::Class, 'index']);
    Route::post('/store', [PetController::class, 'store'])->name('pets.store');
});



Route::middleware('auth')->group(function () {
    Route::get('/logout', [AuthController::class, 'logoutPost'])->middleware('auth')->name('logout');
});


Route::controller(ItemController::class)->prefix('items')->name('items.')->group(function () {
    Route::delete('{item}/delete', 'delete')->name('delete');
    Route::post('store', 'store')->name('store');

});
Route::resource('items', ItemController::class);

