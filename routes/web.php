<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;

Route::get('/login', [AuthController::class, 'showLoginForm'])->name('login');
Route::post('/login', [AuthController::class, 'login'])->name('login.post');

Route::get('/dashboard', function () {
    return view('dashboard');
})->name('home'); 

Route::get('/organizations', function () {
    return view('auth.organizations');
})->name('organizations');

