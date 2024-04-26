<?php

use App\Http\Controllers\AuthController;
use Illuminate\Support\Facades\Route;
use App\http\Controllers\HomeController;

// *** View Routes ***
Route::get('/', [HomeController::class,'index']);
Route::get('/signup', [HomeController::class,'signup'])->name('signup');

Route::post('/signup', [AuthController::class, 'signup'])->name('save_signup');

// *** User Routes ***
// Route::group(['middleware' => 'auth'], function () {
//     // Route::get('/dashboard', 'DashboardController@index')->name('dashboard');
// });
