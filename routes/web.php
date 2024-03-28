<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\AddressController;
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

// Route buat User
Route::get('/user', [AdminController::class,'index'])->name('user')->middleware('auth');
Route::get('/user/create', [AdminController::class, 'create'])->middleware('auth');
Route::post('/user/create', [AdminController::class, 'store'])->middleware('auth');
Route::get('/user/{id}/edit', [AdminController::class, 'edit'])->middleware('auth');
Route::put('/user/{id}/edit', [AdminController::class, 'update'])->middleware('auth');
Route::get('/user/{id}/delete', [AdminController::class, 'destroy'])->middleware('auth');

// Route buat Contact
Route::get('/contact', [ContactController::class, 'index'])->name('contact')->middleware('auth');
Route::get('/contact/create', [ContactController::class, 'create'])->middleware('auth');
Route::post('/contact/create', [ContactController::class, 'store'])->middleware('auth');
Route::get('/contact/{id}/edit', [ContactController::class, 'edit'])->middleware('auth');
Route::put('/contact/{id}/edit', [ContactController::class, 'update'])->middleware('auth');
Route::get('/contact/{id}/delete', [ContactController::class, 'destroy'])->middleware('auth');

// Route buat Address
Route::get('/address', [AddressController::class, 'index'])->name('address')->middleware('auth');
Route::get('/address/create', [AddressController::class, 'create'])->middleware('auth');
Route::post('/address/create', [AddressController::class, 'store'])->middleware('auth');
Route::get('/address/{id}/edit', [AddressController::class, 'edit'])->middleware('auth');
Route::put('/address/{id}/edit', [AddressController::class, 'update'])->middleware('auth');
Route::get('/address/{id}/delete', [AddressController::class, 'destroy'])->middleware('auth');
