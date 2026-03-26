<?php
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CaesarController;


Route::get('/', [CaesarController::class, 'index']);
Route::post('/process', [CaesarController::class, 'process']);


use App\Http\Controllers\AuthController;

Route::get('/', [AuthController::class, 'login']);
Route::post('/login', [AuthController::class, 'prosesLogin']);

Route::get('/dashboard', [AuthController::class, 'dashboard']);
Route::get('/logout', [AuthController::class, 'logout']);