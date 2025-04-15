<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\Auth\AuthController;

// for testing post purpose
use App\Http\Controllers\PostController;
Route::get('/post/{id}', [PostController::class, 'show']);
// end of test post

Route::get('/welcome', function () {
    return view('welcome');
});

Route::view('/register', 'auth.register')->name('show.register');
Route::view('/login', 'auth.login')->name('show.login');
Route::post('/register', [AuthController::class, 'register'])->name('register');
Route::post('/login', [AuthController::class, 'login'])->name('login');
Route::post('/logout', [AuthController::class, 'logout'])->name('logout');

Route::get('/home', [HomeController::class, 'showHomePage']);

Route::get('/', [PostController::class, 'index'])->name('home');


// for testing purpose
Route::get('/test/{id}', [PostController::class, 'test']);