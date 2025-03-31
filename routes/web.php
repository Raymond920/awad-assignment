<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\HomeController;

Route::get('/welcome', function () {
    return view('welcome');
});

// load login page
Route::get('/login', [LoginController::class, 'showLoginForm'])->name('login');

// Handle login request
Route::post('/login', [LoginController::class, 'login']);


// Route::get('/', [LoginController::class, 'printUserTable']);

Route::get('/', function () {
    return view('testSticky');
});

Route::get('/test2', function () {
    return view('test2');
});

Route::get('/home', [HomeController::class, 'showHomePage']);
