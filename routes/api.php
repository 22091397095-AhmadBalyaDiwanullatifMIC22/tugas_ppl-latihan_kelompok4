<?php
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\AddressController;

Route::post('/register', [UserController::class, 'register']);
Route::post('/login', [UserController::class, 'login']);
Route::put('/users/{id}', [UserController::class, 'update']);
Route::get('/users/{id}', [UserController::class, 'show']);
Route::post('/logout', [UserController::class, 'logout']);

Route::post('/contacts', [ContactController::class, 'create']);
Route::put('/contacts/{id}', [ContactController::class, 'update']);
Route::get('/contacts/{id}', [ContactController::class, 'show']);
Route::post('/contacts/search', [ContactController::class, 'search']);
Route::delete('/contacts/{id}', [ContactController::class, 'destroy']);

Route::post('/addresses', [AddressController::class, 'create']);
Route::put('/addresses/{id}', [AddressController::class, 'update']);
Route::get('/addresses/{id}', [AddressController::class, 'show']);
Route::get('/addresses', [AddressController::class, 'index']);
Route::delete('/addresses/{id}', [AddressController::class, 'destroy']);
