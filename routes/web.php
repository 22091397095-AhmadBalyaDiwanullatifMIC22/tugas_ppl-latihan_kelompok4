<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\RegisterController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;
use GuzzleHttp\Middleware;
use Illuminate\Auth\Middleware\RedirectIfAuthenticated;
use Illuminate\Auth\Middleware\Authenticate;

Route::get('/home', function () {
    return view('home', [
        "title" => "Laravel 11 | Home"
    ]);
});

Route::get('/login', [LoginController::class, 'index'])->name('login')->middleware('guest');
Route::post('/login', [LoginController::class, 'authenticate']); //nama bebas bagian autenticate
Route::post('/logout', [LoginController::class, 'logout']); //nama bebas bagian autenticate

Route::get('/register', [RegisterController::class, 'index'])->name('register')->middleware('guest');
Route::post('/register', [RegisterController::class, 'store']);

Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard')->middleware('auth');

// Route buat user
Route::get('/user', [AdminController::class,'index'])->name('user')->middleware('auth');
Route::get('/user/create', [AdminController::class, 'create'])->middleware('auth');
Route::post('/user/create', [AdminController::class, 'store'])->middleware('auth');
Route::get('/user/{id}/edit', [AdminController::class, 'edit'])->middleware('auth');
Route::put('/user/{id}/edit', [AdminController::class, 'update'])->middleware('auth');
Route::get('/user/{id}/delete', [AdminController::class, 'destroy'])->middleware('auth');
