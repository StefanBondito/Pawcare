<?php

use App\Http\Controllers\AccountController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\PetController;
use App\Http\Controllers\ItemController;
use App\Http\Controllers\UserController;


// Auth
Auth::routes();

Route::get('/', function () {
    return view('home');
});

Route::get('/home', function () {
    return view('home');
});


Route::get('/home_user', [AccountController::class, 'index'])->middleware('auth');

Route::get('dashboard', function(){
    return view('dashboard');
});

// Route::get('/login', function(){ return view('login'); });
Route::get('/login',[LoginController::class, 'index'])->name('login');
Route::post('/login',[LoginController::class, 'authenticate']);

Route::get('/signup',[RegisterController::class, 'index'])->name('signup');
Route::post('/signup',[RegisterController::class, 'store']);

Route::controller(PetController::class)->prefix('pets')->name('pets.')->group(function () {
    Route::delete('{pet}/delete', 'delete')->name('delete');
});
Route::resource('pets', PetController::class)->middleware('auth');
Route::post('/store', [PetController::class, 'store'])->middleware('auth')->name('pets.store');

Route::controller(ItemController::class)->prefix('items')->name('items.')->group(function () {
    Route::delete('{item}/delete', 'delete')->name('delete');
});
Route::resource('items', ItemController::class);

// Route::middleware('auth')->group(function () {
//     Route::post('{pet}/store', [PetController::class, 'store'])->name('pets.store');
// });
