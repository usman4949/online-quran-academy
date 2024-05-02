<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\Auth\AuthController;
use App\Http\Controllers\User\UserController;

// *** View Routes ***
Route::get('/', [HomeController::class, 'index']);
Route::get('/login', [HomeController::class, 'login'])->name('login');
Route::get('/signup', [HomeController::class, 'signup'])->name('signup');
Route::get('/contact', [HomeController::class, 'contact'])->name('contact');
Route::get('/read_quran', [HomeController::class, 'read_quran'])->name('read_quran');
Route::get('/cources', [HomeController::class, 'cources'])->name('cources');
Route::get('/teachers', [HomeController::class, 'teachers'])->name('teachers');

// *** Auth Routes ***
Route::post('/login', [AuthController::class, 'login']);
Route::post('/signup', [AuthController::class, 'signup']);

// *** User Routes ***
Route::group(['middleware' => 'auth'], function () {
    Route::get('/dashboard', [UserController::class, 'dashboard'])->name('dashboard');
    Route::get('/user_profile', [UserController::class, 'user_profile'])->name('user_profile');

    Route::get('/logout', [UserController::class, 'logout'])->name('logout');
});
