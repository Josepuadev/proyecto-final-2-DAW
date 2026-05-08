<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\EjercicioController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');

// Sin middleware ya que no tenemos tokens ni nada aqui porque estamos entrandoa al servidor
Route::post('/login', [AuthController::class, 'login']);
Route::post('/register', [AuthController::class, 'register']);

// Una forma fácil de agrupar todos los middleware en varias rutas
Route::middleware('auth:sanctum')->group(function () {
    Route::get('/ejercicios', [EjercicioController::class, 'getEjercicios']);
    Route::get('/logout', [AuthController::class, 'logout']);
});
