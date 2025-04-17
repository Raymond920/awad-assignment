<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Auth\AuthController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\CommentController;

// Home routes
Route::view('/', 'home')->name('home');
Route::view('/register', 'auth.register')->name('show.register');
Route::view('/login', 'auth.login')->name('show.login');
Route::post('/register', [AuthController::class, 'register'])->name('register');
Route::post('/login', [AuthController::class, 'login'])->name('login');
Route::post('/logout', [AuthController::class, 'logout'])->name('logout');

// Post routes
Route::prefix('posts')->group(function () {
    Route::get('/', [PostController::class, 'index'])->name('posts.index');
    Route::get('/{id}', [PostController::class, 'show'])->name('posts.show');
});

Route::middleware('auth')->prefix('posts')->group(function () {
    Route::post('/', [PostController::class, 'store'])->name('posts.store');
    Route::put('/{id}', [PostController::class, 'update'])->name('posts.update');
    Route::delete('/{id}', [PostController::class, 'destroy'])->name('posts.destroy');
});

// Comment routes
Route::middleware('auth')->group(function () {
    Route::post('/posts/{post}/comments', [CommentController::class, 'store'])->name('posts.comments.store');
    Route::put('/comments/{comment}', [CommentController::class, 'update'])->name('comments.update');
    Route::delete('/comments/{comment}', [CommentController::class, 'destroy'])->name('comments.destroy');
});

// Admin routes
Route::middleware(['auth', 'can:is-admin'])->prefix('admin')->group(function () {
    Route::view('dashboard', 'admin.dashboard')->name('admin.dashboard');
    Route::view('users', 'admin.users.index')->name('admin.users.index');
});
