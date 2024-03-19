<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\AddressController;
use App\Http\Controllers\Auth\RegisterController;
use App\Http\Controllers\Auth\LoginController;

// Rute untuk registrasi dan login
Route::get('/register', [RegisterController::class, 'showRegistrationForm'])->name('register');
Route::post('/register', [RegisterController::class, 'register']);

Route::get('/login', [LoginController::class, 'showLoginForm'])->name('login');
Route::post('/login', [LoginController::class, 'login']);
Route::post('logout', [LoginController::class, 'logout'])->name('logout');

// Rute untuk User
Route::middleware('auth')->group(function () {
    Route::post('/update-user', [UserController::class, 'update']);
    Route::get('/get-user', [UserController::class, 'getUser']);
    Route::post('/logout', [UserController::class, 'logout']);
});

// Rute untuk Contact
Route::middleware('auth')->group(function () {
    Route::post('/create-contact', [ContactController::class, 'create']);
    Route::post('/update-contact', [ContactController::class, 'update']);
    Route::get('/get-contact/{id}', [ContactController::class, 'get']);
    Route::get('/search-contact', [ContactController::class, 'search']);
    Route::post('/remove-contact', [ContactController::class, 'remove']);
});

// Rute untuk Address
Route::middleware('auth')->group(function () {
    Route::post('/create-address', [AddressController::class, 'create']);
    Route::post('/update-address', [AddressController::class, 'update']);
    Route::get('/get-address/{id}', [AddressController::class, 'get']);
    Route::get('/list-address', [AddressController::class, 'list']);
    Route::post('/remove-address', [AddressController::class, 'remove']);
});

// Route untuk halaman landing
Route::get('/', function () {
    return view('landing');
})->name('landing');
