<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Ejercicio;
use App\Models\Rutina;

class RutinasEspartanasSeed extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $pressBancaPlano = Ejercicio::find(1);
        $fondosLastrados = Ejercicio::find(7);
        $pressMilitarConBarra = Ejercicio::find(12);
        $elevacionesLateralesPolea = Ejercicio::find(15);
        $pressFrancesConBarra = Ejercicio::find(8);
        $extensionDeTricepsEnPolea = Ejercicio::find(11);

        $rutinaPecho = Rutina::create([
            'usuario_id' => 1,
            'nombre' => 'Parte pechos de Hoplitas',
            'descripcion' => 'Empuja el poder del mundo con tus brazos y pectorales con esta rutina.',
            'icono' => 'dumbbell',
        ]);

        $rutinaPecho->ejercicios()->attach([
            $pressBancaPlano->id => [
                'series'       =>   4,
                'repeticiones_objetivo' =>   8,
                'peso'         =>   80,
                'orden'        =>   1,
            ],
            $fondosLastrados->id => [
                'series'       =>   3,
                'repeticiones_objetivo' =>   5,
                'peso'         =>   20,
                'orden'        =>   2,
            ],
            $pressMilitarConBarra->id => [
                'series'       =>   4,
                'repeticiones_objetivo' =>   8,
                'peso'         =>   50,
                'orden'        =>   3,
            ],
            $elevacionesLateralesPolea->id => [
                'series'       =>   4,
                'repeticiones_objetivo' =>   15,
                'peso'         =>   5,
                'orden'        =>   4,
            ],
            $pressFrancesConBarra->id => [
                'series'       =>   3,
                'repeticiones_objetivo' =>   8,
                'peso'         =>   20,
                'orden'        =>   5,
            ],
            $extensionDeTricepsEnPolea->id => [
                'series'       =>   3,
                'repeticiones_objetivo' =>   12,
                'peso'         =>   25,
                'orden'        =>   6,
            ]
        ]);


        $dominadasPronas = Ejercicio::find(110);
        $jalonAlPecho = Ejercicio::find(33);
        $remoConBarra = Ejercicio::find(34);
        $facepullPolea = Ejercicio::find(41);
        $encogimientosConMancuernas = Ejercicio::find(40);
        $curlPredicador = Ejercicio::find(29);
        $curlMartillo = Ejercicio::find(27);

        $rutinaEspalda = Rutina::create([
            'usuario_id' => 1,
            'nombre' => 'Demon Spartan Back',
            'descripcion' => 'Desgarra tus dorsales mientras escalas el monte olimpo',
            'icono' => 'dumbbell',
        ]);

        $rutinaEspalda->ejercicios()->attach([
            $dominadasPronas->id => [
                'series' => 4,
                'repeticiones_objetivo' => 5,
                'peso' => 0,
                'orden' => 1,
            ],
            $jalonAlPecho->id => [
                'series' => 2,
                'repeticiones_objetivo' => 12,
                'peso' => 55,
                'orden' => 2,
            ],
            $remoConBarra->id => [
                'series' => 3,
                'repeticiones_objetivo' => 10,
                'peso' => 40,
                'orden' => 3,
            ],
            $facepullPolea->id => [
                'series' => 4,
                'repeticiones_objetivo' => 15,
                'peso' => 15,
                'orden' => 4,
            ],
            $encogimientosConMancuernas->id => [
                'series' => 2,
                'repeticiones_objetivo' => 6,
                'peso' => 30,
                'orden' => 5,
            ],
            $curlPredicador->id => [
                'series' => 4,
                'repeticiones_objetivo' => 8,
                'peso' => 20,
                'orden' => 6,
            ],
            $curlMartillo->id => [
                'series' => 4,
                'repeticiones_objetivo' => 12,
                'peso' => 12,
                'orden' => 7,
            ],
        ]);
    }
}
