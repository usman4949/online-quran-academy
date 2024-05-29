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
Route::get('/products', [HomeController::class, 'products'])->name('products');
Route::get('/read_quran', [HomeController::class, 'read_quran'])->name('read_quran');
Route::get('/cources', [HomeController::class, 'cources'])->name('cources');
Route::get('/teachers', [HomeController::class, 'teachers'])->name('teachers');
Route::get('/service1', [HomeController::class, 'service1'])->name('service1');
Route::get('/service2', [HomeController::class, 'service2'])->name('service2');
Route::get('/service3', [HomeController::class, 'service3'])->name('service3');
Route::get('/service4', [HomeController::class, 'service4'])->name('service4');
Route::get('/service5', [HomeController::class, 'service5'])->name('service5');
Route::get('/service6', [HomeController::class, 'service6'])->name('service6');

// *** Auth Routes ***
Route::post('/login', [AuthController::class, 'login']);
Route::post('/signup', [AuthController::class, 'signup']);

// *** User Routes ***
Route::group(['middleware' => 'auth'], function () {
    Route::get('/dashboard', [UserController::class, 'dashboard'])->name('dashboard');
    Route::get('/user_profile', [UserController::class, 'user_profile'])->name('user_profile');
    Route::get('/user_registeration', [UserController::class, 'user_registeration'])->name('user_registeration');
    Route::post('/store_registeration', [UserController::class, 'store_registeration'])->name('store_registeration');
    Route::get('registration_detail/{id}', [UserController::class, 'registration_detail'])->name('registration_detail');
    Route::get('course_detail', [UserController::class, 'course_detail'])->name('course_detail');
    Route::get('help', [UserController::class, 'help'])->name('help');
    Route::get('donate', [UserController::class, 'donate'])->name('donate');
    Route::get('assigned_teacher', [UserController::class, 'assigned_teacher'])->name('assigned_teacher');
    Route::post('store_attendance', [UserController::class, 'store_attendance'])->name('store_attendance');
    Route::get('attendance', [UserController::class, 'attendance'])->name('attendance');

    Route::get('/logout', [UserController::class, 'logout'])->name('logout');
});