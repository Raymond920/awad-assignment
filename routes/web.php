<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Auth\AuthController;

// TODO: remove, for testing post purpose
use App\Http\Controllers\PostController;

Route::get('/post/{id}', [PostController::class, 'show']);
// end of test post

Route::middleware(['auth', 'can:is-admin'])->prefix('admin')->group(function () {
    Route::view('dashboard', 'admin.dashboard')->name('admin.dashboard');
    Route::view('users', 'admin.users.index')->name('admin.users.index');
});

Route::view('/register', 'auth.register')->name('show.register');
Route::view('/login', 'auth.login')->name('show.login');
Route::post('/register', [AuthController::class, 'register'])->name('register');
Route::post('/login', [AuthController::class, 'login'])->name('login');
Route::post('/logout', [AuthController::class, 'logout'])->name('logout');

Route::view('/', 'home')->name('home');
Route::get('/posts', [PostController::class, 'index'])->name('posts.index');
Route::post('/posts', [PostController::class, 'create'])->name('posts.create');
Route::get('/posts/{id}', [PostController::class, 'show'])->name('posts.show');

Route::post('/posts', [PostController::class, 'store'])->middleware('auth')->name('posts.store');
