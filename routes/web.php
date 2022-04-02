<?php

use Illuminate\Support\Facades\Route;

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


/**
 * Login routes
 */
Route::controller(\App\Http\Controllers\LoginController::class)->group(function () {

    Route::get('/login', 'show')->name('login');
    Route::post('/login', 'login')->name('login');

});

/**
 * Register Routes
 */
Route::controller(\App\Http\Controllers\RegisterController::class)->group(function () {

    Route::get('/register', 'show')->name('register.show')->middleware('guest');
    Route::post('/register', 'register')->name('register.perform')->middleware('guest');

});

/**
 * Logout routes
 */
Route::controller(\App\Http\Controllers\LogoutController::class)->group(function () {

    Route::get('/logout', 'perform')->name('logout.perform')->middleware('auth');

});

/**
 * List routes
 */
Route::controller(\App\Http\Controllers\ListController::class)->group(function () {

    Route::get('/', 'index');

});
