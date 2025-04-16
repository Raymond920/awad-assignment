<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Auth\AuthController;
use App\Http\Controllers\PostController;

Route::view('/', 'home')->name('home');


Route::view('/register', 'auth.register')->name('show.register');
Route::view('/login', 'auth.login')->name('show.login');
Route::post('/register', [AuthController::class, 'register'])->name('register');
Route::post('/login', [AuthController::class, 'login'])->name('login');
Route::post('/logout', [AuthController::class, 'logout'])->name('logout');

Route::prefix('posts')->group(function () {
    Route::get('/', [PostController::class, 'index'])->name('posts.index');
    Route::post('/', [PostController::class, 'store'])->middleware('auth')->name('posts.store');
    Route::get('/{id}', [PostController::class, 'show'])->name('posts.show');
});


Route::middleware(['auth', 'can:is-admin'])->prefix('admin')->group(function () {
    Route::view('dashboard', 'admin.dashboard')->name('admin.dashboard');
    Route::view('users', 'admin.users.index')->name('admin.users.index');
});
