<?php

namespace App\Http\Controllers;

use App\Models\Ejercicio;
use Illuminate\Http\Request;

class EjercicioController extends Controller
{
    public function getEjercicios() {
        $ejercicios = Ejercicio::with('musculos')->get();

        return $ejercicios;
    }
}
