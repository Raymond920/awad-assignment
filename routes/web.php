<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;

Route::get('/welcome', function () {
    return view('welcome');
});

Route::get('/signup', function () {
    return view('users.create');
});

Route::get('/login', function () {
    return view('auth.login');
});

Route::get('/home', [HomeController::class, 'showHomePage']);
