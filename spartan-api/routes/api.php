<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\EjercicioController;
use App\Http\Controllers\RutinaController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SesionController;
use App\Models\Rutina;

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');

// Sin middleware ya que no tenemos tokens ni nada aqui porque estamos entrandoa al servidor
Route::post('/login', [AuthController::class, 'login']);
Route::post('/register', [AuthController::class, 'register']);



// Una forma fácil de agrupar todos los middleware en varias rutas
Route::middleware('auth:sanctum')->group(function () {
    
    Route::post('/logout', [AuthController::class, 'logout']);
    Route::get('/ejercicios', [EjercicioController::class, 'getEjercicios']);

    Route::get('/rutinas', [RutinaController::class, 'getRutinasUsuario']);
    Route::get('/rutinas/{id}', [RutinaController::class, 'getRutina']);
    Route::post('/rutinas', [RutinaController::class, 'crearRutina']);
    Route::post('/rutinas/{idRutina}/ejercicios', [RutinaController::class, 'añadirEjercicio']);
    Route::delete('/rutinas/{idRutina}/ejercicios/{idEjercicio}', [RutinaController::class, 'quitarEjercicio']);
    Route::delete('/rutinas/{rutina}', [RutinaController::class, 'borrarRutina']);

    Route::get('/rutinas-espartanas', [RutinaController::class, 'getRutinasEspartanas']);

    Route::post('/sesiones', [SesionController::class, 'crearSesion']);
    Route::post('/sesiones/{sesion}/guardar', [SesionController::class, 'guardarSesion']);
    Route::get('/sesiones', [SesionController::class, 'getSesiones']);
    Route::get('/sesiones/{sesion}', [SesionController::class, 'getSesion']);


});
