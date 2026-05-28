<?php

namespace App\Http\Controllers;

use App\Models\Ejercicio;
use Illuminate\Http\Request;
use App\Models\Rutina;


class RutinaController extends Controller
{
    public function getRutinasUsuario() {
        $rutinas = Rutina::with('ejercicios')
                            ->where('usuario_id', auth()->id())->get();

        return $rutinas;
    }

    public function getRutina($id) {
        $rutina = Rutina::with('ejercicios')->find($id);
        return response()->json($rutina);
      }

    public function getRutinasEspartanas() {
        $rutinas = Rutina::with('ejercicios')
                            ->where('usuario_id', 1)->get();

        return $rutinas;
    }

    public function crearRutina(Request $request) {

        if ($request->isMethod('POST')) {

            $request->validate([
                'nombre'            => 'required|string|max:255',
                'descripcion'        => 'string',
                'icono'             => 'string|max:50',
            ]);

            $rutina = Rutina::create([
                'usuario_id'    => auth()->id(), // Usamos token autentacion
                'nombre'        => $request->nombre,
                'descripcion'   => $request->descripcion,
                'icono'         => 'dumbbell',
            ]);

            return response()->json([
                'rutina' => $rutina,
            ], 201);
        }
    }

    public function borrarRutina(Rutina $rutina) {

    if($rutina->usuario_id !== auth()->id()) {
        return response()->json(['message' => 'No autorizado'], 403);
    }

    if ($rutina->usuario_id === 1) {
        return response()->json(['message' => 'No se pueden borrar rutinas espartanas'], 403);
    }

    $rutina->delete();

    return response()->json(['message' => 'rutina eliminada'], 200);

    }

    public function añadirEjercicio(Request $request, $idRutina) {
        
        $request->validate([
            'ejercicio_id'           => 'required|exists:ejercicios,id',
            'series'                 => 'nullable|integer',
            'repeticiones_objetivo'  => 'nullable|integer',
            'segundos_objetivo'      => 'nullable|integer',
            'metros_objetivo'        => 'nullable|integer',
            'peso_objetivo'          => 'nullable|numeric',
            'orden'                  => 'nullable|integer',
        ]);

        $rutina = Rutina::find($idRutina);

        if ($rutina->usuario_id !== auth()->id()) {
            return response()->json(['message' => 'NO AUTORIZADO JOPUTA'], 403);
        }

        $rutina->ejercicios()->attach($request->ejercicio_id, [
            'series'                => $request->series,
            'repeticiones_objetivo' => $request->repeticiones_objetivo,
            'segundos_objetivo'     => $request->segundos_objetivo,
            'metros_objetivo'       => $request->metros_objetivo,
            'peso_objetivo'         => $request->peso_objetivo,
            'orden'                 => $request->orden ?? 1,
        ]);

        return response()->json(['message' => 'Ejercicio añadido'], 201);
    }

    public function quitarEjercicio($idRutina, $idEjercicio) {
        
        $rutina = Rutina::find($idRutina);

        // Seguridad — solo el dueño puede quitar ejercicios
        if ($rutina->usuario_id !== auth()->id()) {
            return response()->json(['message' => 'No autorizado'], 403);
        }

        $ejercicioQuitar = Ejercicio::find($idEjercicio);
        $rutina->ejercicios()->detach($ejercicioQuitar->id);

        // Reordena los ejercicios restantes
        $ejercicios = $rutina->ejercicios()->orderBy('rutina_ejercicios.orden')->get();

        foreach ($ejercicios as $index => $ejercicio) {
            $rutina->ejercicios()->updateExistingPivot($ejercicio->id, [
                'orden' => $index + 1
            ]);
        }

        return response()->json(['message' => 'Ejercicio eliminado'], 200);
    }
}
