<?php

namespace App\Http\Controllers;

use App\Models\Sesion;
use Illuminate\Http\Request;
use App\Models\SesionEjercicio;

class SesionController extends Controller
{
    public function crearSesion(Request $request) {

        if($request->isMethod('post')) {
            
            $request->validate([
                'titulo' => 'required|string',
                'rutina_id' => 'nullable|exists:rutinas,id',
            ]);

            $sesion = Sesion::create([
                'usuario_id' => auth()->id(), // Usamos token autentacion
                'rutina_id' => $request->rutina_id,
                'titulo' => $request->titulo,
                'descripcion' => $request->descripcion,
                'fecha' => now(),
                'completada' => false,
            ]);

            return response()->json([
                'sesion' => $sesion,
            ], 201);
        }
    }

    public function guardarSesion(Request $request, Sesion $sesion) {

        if ($sesion->usuario_id !== auth()->id()) {
            return response()->json(['Mensaje de error' => 'No tienes acceso'], 403);
        }

        // Validamos los ejercicios que nos mandan con sus datos
        $request->validate([
            'ejercicios' => 'required|array',
            'ejercicios.*.ejercicio_id'  => 'required|exists:ejercicios,id',
            'ejercicios.*.numero_serie'  => 'required|integer',
            'ejercicios.*.repeticiones'  => 'nullable|integer',
            'ejercicios.*.segundos'      => 'nullable|integer',
            'ejercicios.*.metros'        => 'nullable|integer',
            'ejercicios.*.peso'          => 'nullable|numeric',
        ]);

        // Guardamos cada serie unica
        foreach ($request->ejercicios as $ejercicioSerie) {
            SesionEjercicio::create([
                'sesion_id'    => $sesion->id,
                'ejercicio_id' => $ejercicioSerie['ejercicio_id'],
                'numero_serie' => $ejercicioSerie['numero_serie'],
                'repeticiones' => $ejercicioSerie['repeticiones'] ?? null,
                'segundos'     => $ejercicioSerie['segundos'] ?? null,
                'metros'       => $ejercicioSerie['metros'] ?? null,
                'peso'         => $ejercicioSerie['peso'] ?? null,
            ]);
        }

        $sesion->update(['completada' => true]);

        return response()->json([
            'message' => 'Sesión guardada correctamente',
            'sesion'  => $sesion,
        ], 200);
    }

    public function getSesiones() {
        $sesiones = Sesion::where('usuario_id', auth()->id())
                            ->with('sesionEjercicios.ejercicio')
                            ->orderBy('fecha', 'desc')
                            ->get();

        return $sesiones;
    }

    public function getSesion(Sesion $sesion) {
        // Seguridad
        if ($sesion->usuario_id !== auth()->id()) {
            return response()->json(['message' => 'No autorizado'], 403);
        }

        return response()->json(
            $sesion->load('sesionEjercicios.ejercicio')
        );
    }
    }
