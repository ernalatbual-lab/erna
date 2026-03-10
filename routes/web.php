<?php
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CaesarController;


Route::get('/', [CaesarController::class, 'index']);
Route::post('/process', [CaesarController::class, 'process']);