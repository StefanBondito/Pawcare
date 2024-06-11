<?php

use App\Http\Controllers\AccountController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\UserController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

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

