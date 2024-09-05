<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\OrganizationController;

Route::get('/login', [AuthController::class, 'showLoginForm'])->name('login');
Route::post('/login', [AuthController::class, 'login'])->name('login.post');

Route::get('/dashboard', function () {
    return view('dashboard');
})->name('home'); 

Route::get('/organizations', function () {
    return view('auth.organizations');
})->name('organizations');

// Route::get('/organizations', [OrganizationController::class, 'index'])->name('organizations');
// Route::post('/organizations', [OrganizationController::class, 'store'])->name('organizations.store');




