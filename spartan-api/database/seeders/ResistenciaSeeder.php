<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Ejercicio;
use App\Models\Musculo;

class ResistenciaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {

        // =========================
        // MUSCULOS
        // =========================

            $pecho = Musculo::where('nombre', 'pecho')->first();
            $triceps = Musculo::where('nombre', 'triceps')->first();
            $deltoidesAnterior = Musculo::where('nombre', 'deltoides-anterior')->first();

            $deltoidesMedial = Musculo::where('nombre', 'deltoides-medial')->first();

            $brazos = Musculo::where('nombre', 'brazos')->first();
            $biceps = Musculo::where('nombre', 'biceps')->first();
            $dorsales = Musculo::where('nombre', 'dorsales')->first();
            $espaldaAlta = Musculo::where('nombre', 'espalda-alta')->first();
            $deltoidesPosterior = Musculo::where('nombre', 'deltoides-posterior')->first();
            $trapecios = Musculo::where('nombre', 'trapecios')->first();

            $abdomen = Musculo::where('nombre', 'abdomen')->first();

            $quadriceps = Musculo::where('nombre', 'quadriceps')->first();
            $adductores = Musculo::where('nombre', 'adductores')->first();
            $isquiotibiales = Musculo::where('nombre', 'isquiotibiales')->first();
            $abductores = Musculo::where('nombre', 'abductores')->first();
            $gluteos = Musculo::where('nombre', 'gluteos')->first();
            $gemelos = Musculo::where('nombre', 'gemelos')->first();

        // =========================
        // CARDIO
        // =========================
            $caminar = Ejercicio::create([
                'nombre'            => 'Caminar',
                'descripcion'       => 'Caminar de forma continua.',
                'tipo_id'           => 3,
                'medida_id'         => 3,
                'orbes_fuerza'      => 0,
                'orbes_calistenia'  => 0,
                'orbes_resistencia' => 20,
            ]);
            $caminar->musculos()->attach([
                $quadriceps->id,
                $gluteos->id,
                $gemelos->id,
            ]);

            $correr = Ejercicio::create([
                'nombre'            => 'Correr',
                'descripcion'       => 'Carrera continua a ritmo constante.',
                'tipo_id'           => 3,
                'medida_id'         => 3,
                'orbes_fuerza'      => 0,
                'orbes_calistenia'  => 0,
                'orbes_resistencia' => 50,
            ]);
            $correr->musculos()->attach([
                $quadriceps->id,
                $gluteos->id,
                $isquiotibiales->id,
                $gemelos->id,
            ]);

            $saltarCuerda = Ejercicio::create([
                'nombre'            => 'Saltar cuerda',
                'descripcion'       => 'Saltos continuos con cuerda.',
                'tipo_id'           => 3,
                'medida_id'         => 2,
                'orbes_fuerza'      => 0,
                'orbes_calistenia'  => 0,
                'orbes_resistencia' => 65,
            ]);
            $saltarCuerda->musculos()->attach([
                $gemelos->id,
                $quadriceps->id,
                $deltoidesAnterior->id,
            ]);

            $burpees = Ejercicio::create([
                'nombre'            => 'Burpees',
                'descripcion'       => 'Ejercicio cardiovascular de cuerpo completo.',
                'tipo_id'           => 3,
                'medida_id'         => 2,
                'orbes_fuerza'      => 20,
                'orbes_calistenia'  => 20,
                'orbes_resistencia' => 80,
            ]);
            $burpees->musculos()->attach([
                $pecho->id,
                $triceps->id,
                $quadriceps->id,
                $gluteos->id,
                $abdomen->id,
            ]);

            $sprint = Ejercicio::create([
                'nombre'            => 'Sprint',
                'descripcion'       => 'Carrera explosiva de alta intensidad.',
                'tipo_id'           => 3,
                'medida_id'         => 3,
                'orbes_fuerza'      => 0,
                'orbes_calistenia'  => 0,
                'orbes_resistencia' => 110,
            ]);
            $sprint->musculos()->attach([
                $quadriceps->id,
                $gluteos->id,
                $isquiotibiales->id,
                $gemelos->id,
            ]);

            $mountainClimbers = Ejercicio::create([
                'nombre'            => 'Mountain climbers',
                'descripcion'       => 'Ejercicio dinámico cardiovascular.',
                'tipo_id'           => 3,
                'medida_id'         => 2,
                'orbes_fuerza'      => 0,
                'orbes_calistenia'  => 20,
                'orbes_resistencia' => 70,
            ]);
            $mountainClimbers->musculos()->attach([
                $abdomen->id,
                $deltoidesAnterior->id,
            ]);

            $jumpingJacks = Ejercicio::create([
                'nombre'            => 'Jumping jacks',
                'descripcion'       => 'Saltos continuos de cuerpo completo.',
                'tipo_id'           => 3,
                'medida_id'         => 2,
                'orbes_fuerza'      => 0,
                'orbes_calistenia'  => 0,
                'orbes_resistencia' => 85,
            ]);
            $jumpingJacks->musculos()->attach([
                $quadriceps->id,
                $gemelos->id,
            ]);

            $bicicleta = Ejercicio::create([
                'nombre'            => 'Bicicleta',
                'descripcion'       => 'Trayecto continuo en bicicleta.',
                'tipo_id'           => 3,
                'medida_id'         => 3,
                'orbes_fuerza'      => 0,
                'orbes_calistenia'  => 0,
                'orbes_resistencia' => 50,
            ]);
            $bicicleta->musculos()->attach([
                $quadriceps->id,
                $gluteos->id,
                $gemelos->id,
            ]);

            $eliptica = Ejercicio::create([
                'nombre'            => 'Eliptica',
                'descripcion'       => 'Ejercicio cardiovascular continuo en elíptica.',
                'tipo_id'           => 3,
                'medida_id'         => 3,
                'orbes_fuerza'      => 0,
                'orbes_calistenia'  => 0,
                'orbes_resistencia' => 45,
            ]);
            $eliptica->musculos()->attach([
                $quadriceps->id,
                $gluteos->id,
                $gemelos->id,
            ]);

            $escaladora = Ejercicio::create([
                'nombre'            => 'Escaladora',
                'descripcion'       => 'Subida continua en máquina de escaleras.',
                'tipo_id'           => 3,
                'medida_id'         => 3,
                'orbes_fuerza'      => 0,
                'orbes_calistenia'  => 0,
                'orbes_resistencia' => 40,
            ]);
            $escaladora->musculos()->attach([
                $quadriceps->id,
                $gluteos->id,
                $gemelos->id,
            ]);

            $battleRopes = Ejercicio::create([
                'nombre'            => 'Battle ropes',
                'descripcion'       => 'Trabajo cardiovascular usando cuerdas.',
                'tipo_id'           => 3,
                'medida_id'         => 2,
                'orbes_fuerza'      => 0,
                'orbes_calistenia'  => 0,
                'orbes_resistencia' => 80,
            ]);
            $battleRopes->musculos()->attach([
                $deltoidesAnterior->id,
                $deltoidesMedial->id,
                $brazos->id,
                $trapecios->id,
                $abdomen->id
            ]);

            $shadowBoxing = Ejercicio::create([
                'nombre'            => 'Shadow boxing',
                'descripcion'       => 'Simulación continua de golpes de boxeo.',
                'tipo_id'           => 3,
                'medida_id'         => 2,
                'orbes_fuerza'      => 0,
                'orbes_calistenia'  => 0,
                'orbes_resistencia' => 100,
            ]);
            $shadowBoxing->musculos()->attach([
                $deltoidesAnterior->id,
                $deltoidesMedial->id,
                $brazos->id,
                $pecho->id,
            ]);

            $skaters = Ejercicio::create([
                'nombre'            => 'Skaters',
                'descripcion'       => 'Saltos laterales continuos.',
                'tipo_id'           => 3,
                'medida_id'         => 2,
                'orbes_fuerza'      => 0,
                'orbes_calistenia'  => 0,
                'orbes_resistencia' => 95,
            ]);
            $skaters->musculos()->attach([
                $quadriceps->id,
                $gluteos->id,
                $gemelos->id,
            ]);

            $highKnees = Ejercicio::create([
                'nombre'            => 'High knees',
                'descripcion'       => 'Elevación rápida de rodillas.',
                'tipo_id'           => 3,
                'medida_id'         => 2,
                'orbes_fuerza'      => 0,
                'orbes_calistenia'  => 0,
                'orbes_resistencia' => 40,
            ]);
            $highKnees->musculos()->attach([
                $quadriceps->id,
                $abdomen->id,
            ]);

            $stepUps = Ejercicio::create([
                'nombre'            => 'Step ups',
                'descripcion'       => 'Subidas continuas a plataforma.',
                'tipo_id'           => 3,
                'medida_id'         => 2,
                'orbes_fuerza'      => 0,
                'orbes_calistenia'  => 0,
                'orbes_resistencia' => 30,
            ]);
            $stepUps->musculos()->attach([
                $quadriceps->id,
                $gluteos->id,
                $gemelos->id,
            ]);

            $bearCrawl = Ejercicio::create([
                'nombre'            => 'Bear crawl',
                'descripcion'       => 'Desplazamiento en cuadrupedia de forma continua.',
                'tipo_id'           => 3,
                'medida_id'         => 2,
                'orbes_fuerza'      => 0,
                'orbes_calistenia'  => 0,
                'orbes_resistencia' => 70,
            ]);
            $bearCrawl->musculos()->attach([
                $abdomen->id,
                $deltoidesAnterior->id,
                $quadriceps->id,
            ]);

            $lunges = Ejercicio::create([
                'nombre'            => 'Lunges',
                'descripcion'       => 'Zancadas continuas alternando piernas.',
                'tipo_id'           => 3,
                'medida_id'         => 2,
                'orbes_fuerza'      => 0,
                'orbes_calistenia'  => 0,
                'orbes_resistencia' => 95,
            ]);
            $lunges->musculos()->attach([
                $quadriceps->id,
                $gluteos->id,
                $isquiotibiales->id,
                $gemelos->id,
            ]);

            $jumpSquats = Ejercicio::create([
                'nombre'            => 'Jump squats',
                'descripcion'       => 'Sentadillas con salto realizadas continuamente.',
                'tipo_id'           => 3,
                'medida_id'         => 2,
                'orbes_fuerza'      => 20,
                'orbes_calistenia'  => 20,
                'orbes_resistencia' => 110,
            ]);
            $jumpSquats->musculos()->attach([
                $quadriceps->id,
                $gluteos->id,
                $gemelos->id,
            ]);

    }
}
