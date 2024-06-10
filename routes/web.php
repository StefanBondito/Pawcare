<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\PetController;

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

Route::get('dashboard', function(){
    return view('dashboard');
});

route::get('about-us', function(){
    return view('about-us');
});

// Route::get('/login', function(){ return view('login'); });
Route::get('/login',[LoginController::class, 'index']);
Route::post('/login',[LoginController::class, 'authenticate']);

Route::get('/signup',[RegisterController::class, 'index']);
Route::post('/signup',[RegisterController::class, 'store']);

Route::controller(PetController::class)->prefix('pets')->name('pets.')->group(function () {
    Route::delete('{pet}/delete', 'delete')->name('delete');
});
Route::resource('pets', PetController::class);
