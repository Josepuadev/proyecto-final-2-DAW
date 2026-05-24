<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Rutina;


class RutinaController extends Controller
{
    public function getRutinasUsuario() {
        $rutinas = Rutina::with('ejercicios')
                            ->where('usuario_id', auth()->id())->get();

        return $rutinas;
    }

    public function getRutinasEspartanas() {
        $rutinas = Rutina::with('ejercicios')
                            ->where('usuario_id', 1)->get();

        return $rutinas;
    }
}
