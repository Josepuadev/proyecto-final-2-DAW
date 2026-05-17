<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Ejercicio;
use App\Models\Musculo;

class CalisteniaSeeder extends Seeder
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
        // FLEXIONES
        // =========================
            $flexionesInclinadas = Ejercicio::create([
                'nombre'            => 'Flexiones Inclinadas',
                'descripcion'       => 'Manos en banco medio',
                'tipo_id'           => 2,
                'medida_id'         => 1,
                'orbes_calistenia'  => 25,
                'orbes_fuerza'      => 10,
                'orbes_resistencia' => 0,
            ]);
            $flexionesInclinadas->musculos()->attach([
                $pecho->id,
                $triceps->id,
                $deltoidesAnterior->id
            ]);

            $flexionesConRodillas = Ejercicio::create([
                'nombre'            => 'Flexiones con Rodillas',
                'descripcion'       => 'Flexión apoyando rodillas',
                'tipo_id'           => 2,
                'medida_id'         => 1,
                'orbes_calistenia'  => 45,
                'orbes_fuerza'      => 15,
                'orbes_resistencia' => 0,
            ]);
            $flexionesConRodillas->musculos()->attach([
                $pecho->id,
                $triceps->id,
                $deltoidesAnterior->id
            ]);

            $flexiones = Ejercicio::create([
                'nombre'            => 'Flexiones',
                'descripcion'       => 'Flexión estándar en suelo',
                'tipo_id'           => 2,
                'medida_id'         => 1,
                'orbes_calistenia'  => 50,
                'orbes_fuerza'      => 20,
                'orbes_resistencia' => 0,
            ]);
            $flexiones->musculos()->attach([
                $pecho->id,
                $triceps->id,
                $deltoidesAnterior->id
            ]);

            $flexionesEspartanas = Ejercicio::create([
                'nombre'            => 'Flexiones Espartanas',
                'descripcion'       => 'Flexiones cambiando las palmas',
                'tipo_id'           => 2,
                'medida_id'         => 1,
                'orbes_calistenia'  => 85,
                'orbes_fuerza'      => 40,
                'orbes_resistencia' => 0,
            ]);
            $flexionesEspartanas->musculos()->attach([
                $pecho->id,
                $triceps->id,
                $deltoidesAnterior->id,
                $brazos->id
            ]);

            $flexionesDiamante = Ejercicio::create([
                'nombre'            => 'Flexiones Diamante',
                'descripcion'       => 'Flexiones con énfasis en tríceps',
                'tipo_id'           => 2,
                'medida_id'         => 1,
                'orbes_calistenia'  => 90,
                'orbes_fuerza'      => 40,
                'orbes_resistencia' => 0,
            ]);
            $flexionesDiamante->musculos()->attach([
                $pecho->id,
                $triceps->id,
                $deltoidesAnterior->id
            ]);

            $flexionesArcher = Ejercicio::create([
                'nombre'            => 'Flexiones Archer',
                'descripcion'       => 'Trabajo unilateral asistido',
                'tipo_id'           => 2,
                'medida_id'         => 1,
                'orbes_calistenia'  => 90,
                'orbes_fuerza'      => 55,
                'orbes_resistencia' => 0,
            ]);
            $flexionesArcher->musculos()->attach([
                $pecho->id,
                $triceps->id,
                $deltoidesAnterior->id
            ]);

            $flexionesExplosivas = Ejercicio::create([
                'nombre'            => 'Flexiones Explosivas',
                'descripcion'       => 'Empuje con despegue de manos',
                'tipo_id'           => 2,
                'medida_id'         => 1,
                'orbes_calistenia'  => 88,
                'orbes_fuerza'      => 60,
                'orbes_resistencia' => 0,
            ]);
            $flexionesExplosivas->musculos()->attach([
                $pecho->id,
                $triceps->id,
                $deltoidesAnterior->id
            ]);

            $pseudoPlanchePushUp = Ejercicio::create([
                'nombre'            => 'Pseudo Planche Push Up',
                'descripcion'       => 'Flexión inclinada tipo planche',
                'tipo_id'           => 2,
                'medida_id'         => 1,
                'orbes_calistenia'  => 100,
                'orbes_fuerza'      => 70,
                'orbes_resistencia' => 0,
            ]);
            $pseudoPlanchePushUp->musculos()->attach([
                $pecho->id,
                $triceps->id,
                $deltoidesAnterior->id
            ]);

            $fullPlanche = Ejercicio::create([
                'nombre'            => 'Full Planche',
                'descripcion'       => 'straddle planche completo.',
                'tipo_id'           => 2,
                'medida_id'         => 2,
                'orbes_calistenia'  => 100,
                'orbes_fuerza'      => 70,
                'orbes_resistencia' => 0,
            ]);
            $fullPlanche->musculos()->attach([
                $pecho->id,
                $triceps->id,
                $deltoidesAnterior->id,
                $abdomen->id
            ]);

        // =========================
        // FLEXIONES HOMBRO
        // =========================
            $pikePushUpEstandar = Ejercicio::create([
                'nombre'            => 'Pike Push Up Estándar',
                'descripcion'       => 'Flexión en V completa',
                'tipo_id'           => 2,
                'medida_id'         => 1,
                'orbes_calistenia'  => 45,
                'orbes_fuerza'      => 18,
                'orbes_resistencia' => 0,
            ]);
            $pikePushUpEstandar->musculos()->attach([
                $deltoidesAnterior->id,
                $triceps->id
            ]);

            $wallWalk = Ejercicio::create([
                'nombre'            => 'Wall Walk',
                'descripcion'       => 'Camina con los pies por la pared mientras acercas las manos para llegar a posición vertical.',
                'tipo_id'           => 2,
                'medida_id'         => 1,
                'orbes_calistenia'  => 74,
                'orbes_fuerza'      => 42,
                'orbes_resistencia' => 0,
            ]);
            $wallWalk->musculos()->attach([
                $deltoidesAnterior->id,
                $triceps->id,
                $abdomen->id,
                $espaldaAlta->id
            ]);

            $handstandHoldEnPared = Ejercicio::create([
                'nombre'            => 'Handstand Hold en Pared',
                'descripcion'       => 'Mantén una vertical apoyado en la pared desarrollando equilibrio y estabilidad corporal.',
                'tipo_id'           => 2,
                'medida_id'         => 2,
                'orbes_calistenia'  => 85,
                'orbes_fuerza'      => 55,
                'orbes_resistencia' => 0,
            ]);
            $handstandHoldEnPared->musculos()->attach([
                $deltoidesAnterior->id,
                $triceps->id,
                $trapecios->id,
                $abdomen->id
            ]);

            $wallHandstandPushUpCompleto = Ejercicio::create([
                'nombre'            => 'Wall Handstand Push Up Completo',
                'descripcion'       => 'Flexión vertical completa',
                'tipo_id'           => 2,
                'medida_id'         => 1,
                'orbes_calistenia'  => 95,
                'orbes_fuerza'      => 65,
                'orbes_resistencia' => 0,
            ]);
            $wallHandstandPushUpCompleto->musculos()->attach([
                $deltoidesAnterior->id,
                $triceps->id,
                $trapecios->id
            ]);

            $handstandPushUpFreestanding = Ejercicio::create([
                'nombre'            => 'Handstand Push Up Freestanding',
                'descripcion'       => 'Flexión vertical libre sin apoyo en pared, requiriendo máxima fuerza y equilibrio.',
                'tipo_id'           => 2,
                'medida_id'         => 1,
                'orbes_calistenia'  => 100,
                'orbes_fuerza'      => 85,
                'orbes_resistencia' => 0,
            ]);
            $handstandPushUpFreestanding->musculos()->attach([
                $deltoidesAnterior->id,
                $triceps->id,
                $trapecios->id,
                $abdomen->id
            ]);
        // =========================
        // FONDOS
        // =========================
            $fondosEnBanco = Ejercicio::create([
                'nombre'            => 'Fondos en Banco',
                'descripcion'       => 'Versión estándar en banco',
                'tipo_id'           => 2,
                'medida_id'         => 1,
                'orbes_calistenia'  => 35,
                'orbes_fuerza'      => 45,
                'orbes_resistencia' => 0,
            ]);
            $fondosEnBanco->musculos()->attach([
                $triceps->id,
                $deltoidesAnterior->id
            ]);

            $fondosEnParalelas = Ejercicio::create([
                'nombre'            => 'Fondos en Paralelas',
                'descripcion'       => 'Dips estándar',
                'tipo_id'           => 2,
                'medida_id'         => 1,
                'orbes_calistenia'  => 95,
                'orbes_fuerza'      => 60,
                'orbes_resistencia' => 0,
            ]);
            $fondosEnParalelas->musculos()->attach([
                $triceps->id,
                $pecho->id,
                $deltoidesAnterior->id
            ]);

            $fondosEnBarraRecta = Ejercicio::create([
                'nombre'            => 'Fondos en Barra Recta',
                'descripcion'       => 'Dips en barra horizontal',
                'tipo_id'           => 2,
                'medida_id'         => 1,
                'orbes_calistenia'  => 110,
                'orbes_fuerza'      => 72,
                'orbes_resistencia' => 0,
            ]);
            $fondosEnBarraRecta->musculos()->attach([
                $triceps->id,
                $pecho->id,
                $deltoidesAnterior->id,
                $abdomen->id
            ]);

            $fondosEnAnillas = Ejercicio::create([
                'nombre'            => 'Fondos en Anillas',
                'descripcion'       => 'Inestabilidad total',
                'tipo_id'           => 2,
                'medida_id'         => 1,
                'orbes_calistenia'  => 115,
                'orbes_fuerza'      => 78,
                'orbes_resistencia' => 0,
            ]);
            $fondosEnAnillas->musculos()->attach([
                $triceps->id,
                $pecho->id,
                $deltoidesAnterior->id,
                $abdomen->id,
                $trapecios->id
            ]);

        // =========================
        // FONDOS TRUCOS
        // =========================
            $handstandHoldEnParalelas = Ejercicio::create([
                'nombre'            => 'Handstand Hold en Paralelas',
                'descripcion'       => 'Equilibrio en parada de manos sobre paralelas',
                'tipo_id'           => 2,
                'medida_id'         => 2,
                'orbes_calistenia'  => 145,
                'orbes_fuerza'      => 90,
                'orbes_resistencia' => 0,
            ]);
            $handstandHoldEnParalelas->musculos()->attach([
                $triceps->id,
                $deltoidesAnterior->id,
                $trapecios->id,
                $abdomen->id
            ]);

            $handstandToDipTransition = Ejercicio::create([
                'nombre'            => 'Handstand to Dip Transition',
                'descripcion'       => 'Bajada controlada desde vertical a fondo',
                'tipo_id'           => 2,
                'medida_id'         => 1,
                'orbes_calistenia'  => 165,
                'orbes_fuerza'      => 110,
                'orbes_resistencia' => 0,
            ]);
            $handstandToDipTransition->musculos()->attach([
                $triceps->id,
                $deltoidesAnterior->id,
                $pecho->id,
                $abdomen->id
            ]);

            $pressToHandstandNegativo = Ejercicio::create([
                'nombre'            => 'Press to Handstand en Paralelas (Negativo)',
                'descripcion'       => 'Descenso desde vertical a apoyo',
                'tipo_id'           => 2,
                'medida_id'         => 1,
                'orbes_calistenia'  => 170,
                'orbes_fuerza'      => 115,
                'orbes_resistencia' => 0,
            ]);
            $pressToHandstandNegativo->musculos()->attach([
                $triceps->id,
                $deltoidesAnterior->id,
                $abdomen->id,
                $espaldaAlta->id
            ]);

            $lSitToHandstandTransicion = Ejercicio::create([
                'nombre'            => 'L-Sit to Handstand Transición',
                'descripcion'       => 'Paso de L-sit a vertical',
                'tipo_id'           => 2,
                'medida_id'         => 1,
                'orbes_calistenia'  => 175,
                'orbes_fuerza'      => 118,
                'orbes_resistencia' => 0,
            ]);
            $lSitToHandstandTransicion->musculos()->attach([
                $triceps->id,
                $deltoidesAnterior->id,
                $abdomen->id
            ]);

            $straddlePlancheEnParalelas = Ejercicio::create([
                'nombre'            => 'Straddle Planche en Paralelas',
                'descripcion'       => 'Planche con piernas abiertas',
                'tipo_id'           => 2,
                'medida_id'         => 2,
                'orbes_calistenia'  => 205,
                'orbes_fuerza'      => 145,
                'orbes_resistencia' => 0,
            ]);
            $straddlePlancheEnParalelas->musculos()->attach([
                $pecho->id,
                $deltoidesAnterior->id,
                $triceps->id,
                $abdomen->id,
                $espaldaAlta->id
            ]);

            $fullPlancheEnParalelas = Ejercicio::create([
                'nombre'            => 'Full Planche en Paralelas',
                'descripcion'       => 'Planche completa en paralelas',
                'tipo_id'           => 2,
                'medida_id'         => 2,
                'orbes_calistenia'  => 220,
                'orbes_fuerza'      => 160,
                'orbes_resistencia' => 0,
            ]);
            $fullPlancheEnParalelas->musculos()->attach([
                $pecho->id,
                $deltoidesAnterior->id,
                $triceps->id,
                $abdomen->id,
                $trapecios->id
            ]);

        // =========================
        // DOMINADAS
        // =========================
            $deadHangConBarra = Ejercicio::create([
                'nombre'            => 'Dead Hang con barra',
                'descripcion'       => 'Cuelga usando una barra para aumentar el agarre',
                'tipo_id'           => 2,
                'medida_id'         => 2,
                'orbes_fuerza'      => 45,
                'orbes_calistenia'  => 30,
                'orbes_resistencia' => 0,
            ]);
            $deadHangConBarra->musculos()->attach([
                $brazos->id,
            ]);

            $dominadasEscapulares = Ejercicio::create([
                'nombre'            => 'Dominadas Escapulares',
                'descripcion'       => 'Bajada controlada desde arriba',
                'tipo_id'           => 2,
                'medida_id'         => 1,
                'orbes_calistenia'  => 60,
                'orbes_fuerza'      => 30,
                'orbes_resistencia' => 0,
            ]);
            $dominadasEscapulares->musculos()->attach([
                $dorsales->id,
                $espaldaAlta->id,
                $trapecios->id
            ]);

            $dominadasNegativas = Ejercicio::create([
                'nombre'            => 'Dominadas Negativas',
                'descripcion'       => 'Bajada controlada desde arriba',
                'tipo_id'           => 2,
                'medida_id'         => 1,
                'orbes_calistenia'  => 60,
                'orbes_fuerza'      => 30,
                'orbes_resistencia' => 0,
            ]);
            $dominadasNegativas->musculos()->attach([
                $dorsales->id,
                $biceps->id,
                $brazos->id
            ]);

            $dominadasPronas = Ejercicio::create([
                'nombre'            => 'Dominadas Pronas (Pull Up)',
                'descripcion'       => 'Dominada estándar agarre prono',
                'tipo_id'           => 2,
                'medida_id'         => 1,
                'orbes_calistenia'  => 85,
                'orbes_fuerza'      => 45,
                'orbes_resistencia' => 0,
            ]);
            $dominadasPronas->musculos()->attach([
                $dorsales->id,
                $biceps->id,
                $brazos->id,
                $espaldaAlta->id,
            ]);

            $dominadasSupinas = Ejercicio::create([
                'nombre'            => 'Dominadas Supinas (Chin Up)',
                'descripcion'       => 'Dominada con énfasis en bíceps',
                'tipo_id'           => 2,
                'medida_id'         => 1,
                'orbes_calistenia'  => 90,
                'orbes_fuerza'      => 50,
                'orbes_resistencia' => 0,
            ]);
            $dominadasSupinas->musculos()->attach([
                $dorsales->id,
                $biceps->id,
                $brazos->id
            ]);

            $dominadasNeutras = Ejercicio::create([
                'nombre'            => 'Dominadas Neutras',
                'descripcion'       => 'Agarre neutro paralelo',
                'tipo_id'           => 2,
                'medida_id'         => 1,
                'orbes_calistenia'  => 88,
                'orbes_fuerza'      => 48,
                'orbes_resistencia' => 0,
            ]);
            $dominadasNeutras->musculos()->attach([
                $dorsales->id,
                $biceps->id,
                $brazos->id,
                $espaldaAlta->id
            ]);

            $dominadasExplosivas = Ejercicio::create([
                'nombre'            => 'Dominadas Explosivas',
                'descripcion'       => 'Subida con máxima potencia',
                'tipo_id'           => 2,
                'medida_id'         => 1,
                'orbes_calistenia'  => 110,
                'orbes_fuerza'      => 70,
                'orbes_resistencia' => 0,
            ]);
            $dominadasExplosivas->musculos()->attach([
                $dorsales->id,
                $biceps->id,
                $brazos->id,
                $espaldaAlta->id
            ]);

            $dominadasTypewriter = Ejercicio::create([
                'nombre'            => 'Dominadas tipo Typewriter',
                'descripcion'       => 'Desplazamiento lateral en barra',
                'tipo_id'           => 2,
                'medida_id'         => 1,
                'orbes_calistenia'  => 135,
                'orbes_fuerza'      => 90,
                'orbes_resistencia' => 0,
            ]);
            $dominadasTypewriter->musculos()->attach([
                $dorsales->id,
                $biceps->id,
                $brazos->id,
                $espaldaAlta->id
            ]);

            $archerPullUp = Ejercicio::create([
                'nombre'            => 'Archer Pull Up Completo',
                'descripcion'       => 'Dominada unilateral real',
                'tipo_id'           => 2,
                'medida_id'         => 1,
                'orbes_calistenia'  => 155,
                'orbes_fuerza'      => 105,
                'orbes_resistencia' => 0,
            ]);
            $archerPullUp->musculos()->attach([
                $dorsales->id,
                $biceps->id,
                $brazos->id,
                $espaldaAlta->id
            ]);

            $dominadasLSit = Ejercicio::create([
                'nombre'            => 'Dominadas en L-Sit',
                'descripcion'       => 'Tirón con core en L-sit',
                'tipo_id'           => 2,
                'medida_id'         => 1,
                'orbes_calistenia'  => 150,
                'orbes_fuerza'      => 100,
                'orbes_resistencia' => 0,
            ]);
            $dominadasLSit->musculos()->attach([
                $dorsales->id,
                $biceps->id,
                $brazos->id,
                $abdomen->id
            ]);

            $muscleUpEstrict = Ejercicio::create([
                'nombre'            => 'Muscle Up Estricto',
                'descripcion'       => 'Transición completa de tirón a empuje',
                'tipo_id'           => 2,
                'medida_id'         => 1,
                'orbes_calistenia'  => 200,
                'orbes_fuerza'      => 140,
                'orbes_resistencia' => 0,
            ]);
            $muscleUpEstrict->musculos()->attach([
                $dorsales->id,
                $biceps->id,
                $brazos->id,
                $pecho->id,
                $triceps->id,
                $deltoidesAnterior->id
            ]);

        // =========================
        // REMOS EN BARRA
        // =========================
            $remoAustralianoParalelasAltas = Ejercicio::create([
                'nombre'            => 'Remo Australiano en Paralelas Altas',
                'descripcion'       => 'Remo básico en paralelas elevadas',
                'tipo_id'           => 2,
                'medida_id'         => 1,
                'orbes_calistenia'  => 40,
                'orbes_fuerza'      => 18,
                'orbes_resistencia' => 0,
            ]);
            $remoAustralianoParalelasAltas->musculos()->attach([
                $dorsales->id,
                $biceps->id,
                $brazos->id,
                $espaldaAlta->id
            ]);

            $remoBarraNeutra = Ejercicio::create([
                'nombre'            => 'Remo con barra neutra',
                'descripcion'       => 'Piernas apoyadas en otra barra y remas neutro',
                'tipo_id'           => 2,
                'medida_id'         => 1,
                'orbes_calistenia'  => 90,
                'orbes_fuerza'      => 55,
                'orbes_resistencia' => 0,
            ]);
            $remoBarraNeutra->musculos()->attach([
                $dorsales->id,
                $biceps->id,
                $brazos->id,
                $espaldaAlta->id
            ]);

            $remoElevacionPiernas = Ejercicio::create([
                'nombre'            => 'Remo con Elevación de Piernas',
                'descripcion'       => 'Piernas elevadas para más carga',
                'tipo_id'           => 2,
                'medida_id'         => 1,
                'orbes_calistenia'  => 95,
                'orbes_fuerza'      => 55,
                'orbes_resistencia' => 0,
            ]);
            $remoElevacionPiernas->musculos()->attach([
                $dorsales->id,
                $biceps->id,
                $brazos->id,
                $espaldaAlta->id
            ]);

            $remoAnillasBasico = Ejercicio::create([
                'nombre'            => 'Remo en Anillas Básico',
                'descripcion'       => 'Inestabilidad ligera en anillas',
                'tipo_id'           => 2,
                'medida_id'         => 1,
                'orbes_calistenia'  => 130,
                'orbes_fuerza'      => 90,
                'orbes_resistencia' => 0,
            ]);
            $remoAnillasBasico->musculos()->attach([
                $dorsales->id,
                $biceps->id,
                $brazos->id,
                $espaldaAlta->id
            ]);

            $remoFrontLeverTuck = Ejercicio::create([
                'nombre'            => 'Remo tipo Front Lever Tuck',
                'descripcion'       => 'Remo en posición tuck front lever',
                'tipo_id'           => 2,
                'medida_id'         => 1,
                'orbes_calistenia'  => 170,
                'orbes_fuerza'      => 130,
                'orbes_resistencia' => 0,
            ]);
            $remoFrontLeverTuck->musculos()->attach([
                $dorsales->id,
                $biceps->id,
                $brazos->id,
                $espaldaAlta->id,
                $abdomen->id
            ]);

            $frontLever = Ejercicio::create([
                'nombre'            => 'Front Lever',
                'descripcion'       => 'Mayor extensión de palanca',
                'tipo_id'           => 2,
                'medida_id'         => 2,
                'orbes_calistenia'  => 175,
                'orbes_fuerza'      => 135,
                'orbes_resistencia' => 0,
            ]);
            $frontLever->musculos()->attach([
                $dorsales->id,
                $brazos->id,
                $abdomen->id,
                $espaldaAlta->id
            ]);

            $remoFrontLeverStraddle = Ejercicio::create([
                'nombre'            => 'Remo Front Lever Straddle',
                'descripcion'       => 'Tirón en front lever abierto',
                'tipo_id'           => 2,
                'medida_id'         => 1,
                'orbes_calistenia'  => 200,
                'orbes_fuerza'      => 150,
                'orbes_resistencia' => 0,
            ]);
            $remoFrontLeverStraddle->musculos()->attach([
                $dorsales->id,
                $brazos->id,
                $abdomen->id,
                $espaldaAlta->id
            ]);

            $remoFrontLeverCompleto = Ejercicio::create([
                'nombre'            => 'Remo Front Lever Completo',
                'descripcion'       => 'Remo en front lever full',
                'tipo_id'           => 2,
                'medida_id'         => 1,
                'orbes_calistenia'  => 220,
                'orbes_fuerza'      => 160,
                'orbes_resistencia' => 0,
            ]);
            $remoFrontLeverCompleto->musculos()->attach([
                $dorsales->id,
                $brazos->id,
                $abdomen->id,
                $espaldaAlta->id
            ]);

        // =========================
        // PIERNAS EN CALISTENIA
        // =========================
            $pistolAsistida = Ejercicio::create([
                'nombre'            => 'Sentadilla Pistol Asistida',
                'descripcion'       => 'Pistol con apoyo',
                'tipo_id'           => 2,
                'medida_id'         => 1,
                'orbes_calistenia'  => 58,
                'orbes_fuerza'      => 70,
                'orbes_resistencia' => 0,
            ]);
            $pistolAsistida->musculos()->attach([
                $quadriceps->id,
                $gluteos->id,
                $isquiotibiales->id,
                $gemelos->id,
                $adductores->id,
                $abductores->id,
            ]);

            $pistolSquat = Ejercicio::create([
                'nombre'            => 'Pistol Squat',
                'descripcion'       => 'Sentadilla a una pierna',
                'tipo_id'           => 2,
                'medida_id'         => 1,
                'orbes_calistenia'  => 65,
                'orbes_fuerza'      => 85,
                'orbes_resistencia' => 0,
            ]);
            $pistolSquat->musculos()->attach([
                $quadriceps->id,
                $gluteos->id,
                $isquiotibiales->id,
                $gemelos->id,
                $adductores->id,
                $abductores->id,
            ]);

            $skaterSquat = Ejercicio::create([
                'nombre'            => 'Skater Squat',
                'descripcion'       => 'Unilateral sin apoyo trasero',
                'tipo_id'           => 2,
                'medida_id'         => 1,
                'orbes_calistenia'  => 73,
                'orbes_fuerza'      => 100,
                'orbes_resistencia' => 0,
            ]);
            $skaterSquat->musculos()->attach([
                $quadriceps->id,
                $gluteos->id,
                $isquiotibiales->id,
                $gemelos->id,
                $adductores->id,
                $abductores->id,
            ]);

            $shrimpSquat = Ejercicio::create([
                'nombre'            => 'Shrimp Squat',
                'descripcion'       => 'Flexión profunda unilateral',
                'tipo_id'           => 2,
                'medida_id'         => 1,
                'orbes_calistenia'  => 75,
                'orbes_fuerza'      => 105,
                'orbes_resistencia' => 0,
            ]);
            $shrimpSquat->musculos()->attach([
                $quadriceps->id,
                $gluteos->id,
                $isquiotibiales->id,
                $gemelos->id,
                $adductores->id,
                $abductores->id,
            ]);

            $sissySquat = Ejercicio::create([
                'nombre'            => 'Sissy Squat',
                'descripcion'       => 'Cuádriceps extremo',
                'tipo_id'           => 2,
                'medida_id'         => 1,
                'orbes_calistenia'  => 90,
                'orbes_fuerza'      => 130,
                'orbes_resistencia' => 0,
            ]);
            $sissySquat->musculos()->attach([
                $quadriceps->id,
                $gemelos->id,
                $gluteos->id,
            ]);

        // =========================
        // CORE
        // =========================
            $crunchSuelo = Ejercicio::create([
                'nombre'            => 'Crunch en Suelo',
                'descripcion'       => 'Flexión básica de abdomen',
                'tipo_id'           => 2,
                'medida_id'         => 1,
                'orbes_calistenia'  => 45,
                'orbes_fuerza'      => 20,
                'orbes_resistencia' => 0,
            ]);
            $crunchSuelo->musculos()->attach([
                $abdomen->id,
            ]);

            $elevacionesRodillasSuelo = Ejercicio::create([
                'nombre'            => 'Elevaciones de Rodillas en Suelo',
                'descripcion'       => 'Rodillas al pecho controlado',
                'tipo_id'           => 2,
                'medida_id'         => 1,
                'orbes_calistenia'  => 55,
                'orbes_fuerza'      => 25,
                'orbes_resistencia' => 0,
            ]);
            $elevacionesRodillasSuelo->musculos()->attach([
                $abdomen->id,
            ]);

            $deadBug = Ejercicio::create([
                'nombre'            => 'Dead Bug',
                'descripcion'       => 'Control anti-extensión básico',
                'tipo_id'           => 2,
                'medida_id'         => 2,
                'orbes_calistenia'  => 60,
                'orbes_fuerza'      => 28,
                'orbes_resistencia' => 0,
            ]);
            $deadBug->musculos()->attach([
                $abdomen->id,
            ]);

            $planchaFrontal = Ejercicio::create([
                'nombre'            => 'Plancha Frontal',
                'descripcion'       => 'Isométrico básico de core',
                'tipo_id'           => 2,
                'medida_id'         => 2,
                'orbes_calistenia'  => 70,
                'orbes_fuerza'      => 30,
                'orbes_resistencia' => 0,
            ]);
            $planchaFrontal->musculos()->attach([
                $abdomen->id,
                $deltoidesAnterior->id,
            ]);

            $elevacionesPiernasSuelo = Ejercicio::create([
                'nombre'            => 'Elevaciones de Piernas en Suelo',
                'descripcion'       => 'Piernas rectas al aire',
                'tipo_id'           => 2,
                'medida_id'         => 1,
                'orbes_calistenia'  => 85,
                'orbes_fuerza'      => 45,
                'orbes_resistencia' => 0,
            ]);
            $elevacionesPiernasSuelo->musculos()->attach([
                $abdomen->id,
            ]);

            $hollowBody = Ejercicio::create([
                'nombre'            => 'Hollow Body Hold',
                'descripcion'       => 'Posición de hollow controlado',
                'tipo_id'           => 2,
                'medida_id'         => 2,
                'orbes_calistenia'  => 95,
                'orbes_fuerza'      => 50,
                'orbes_resistencia' => 0,
            ]);
            $hollowBody->musculos()->attach([
                $abdomen->id,
            ]);

            $rodillasPechoColgado = Ejercicio::create([
                'nombre'            => 'Rodillas al Pecho Colgado',
                'descripcion'       => 'Versión básica en barra',
                'tipo_id'           => 2,
                'medida_id'         => 1,
                'orbes_calistenia'  => 105,
                'orbes_fuerza'      => 60,
                'orbes_resistencia' => 0,
            ]);
            $rodillasPechoColgado->musculos()->attach([
                $abdomen->id,
                $brazos->id,
                $dorsales->id,
            ]);

            $lSitBarra = Ejercicio::create([
                'nombre'            => 'L-Sit en Barra',
                'descripcion'       => 'Isométrico de piernas extendidas',
                'tipo_id'           => 2,
                'medida_id'         => 1,
                'orbes_calistenia'  => 140,
                'orbes_fuerza'      => 80,
                'orbes_resistencia' => 0,
            ]);
            $lSitBarra->musculos()->attach([
                $abdomen->id,
                $brazos->id,
            ]);

            $lSitParalelas = Ejercicio::create([
                'nombre'            => 'L-Sit en Paralelas',
                'descripcion'       => 'Mayor dificultad por altura',
                'tipo_id'           => 2,
                'medida_id'         => 1,
                'orbes_calistenia'  => 150,
                'orbes_fuerza'      => 90,
                'orbes_resistencia' => 0,
            ]);
            $lSitParalelas->musculos()->attach([
                $abdomen->id,
                $brazos->id,
            ]);

            $dragonFlagNegativa = Ejercicio::create([
                'nombre'            => 'Dragon Flag Negativa',
                'descripcion'       => 'Descenso controlado tipo Bruce Lee',
                'tipo_id'           => 2,
                'medida_id'         => 1,
                'orbes_calistenia'  => 160,
                'orbes_fuerza'      => 100,
                'orbes_resistencia' => 0,
            ]);
            $dragonFlagNegativa->musculos()->attach([
                $abdomen->id,
            ]);

            $dragonFlagCompleta = Ejercicio::create([
                'nombre'            => 'Dragon Flag Completa',
                'descripcion'       => 'Isométrico completo de core extremo',
                'tipo_id'           => 2,
                'medida_id'         => 1,
                'orbes_calistenia'  => 170,
                'orbes_fuerza'      => 110,
                'orbes_resistencia' => 0,
            ]);
            $dragonFlagCompleta->musculos()->attach([
                $abdomen->id,
            ]);

            $humanFlag = Ejercicio::create([
                'nombre'            => 'Human Flag Hold',
                'descripcion'       => 'Isométrico lateral extremo',
                'tipo_id'           => 2,
                'medida_id'         => 2,
                'orbes_calistenia'  => 235,
                'orbes_fuerza'      => 170,
                'orbes_resistencia' => 0,
            ]);
            $humanFlag->musculos()->attach([
                $abdomen->id,
                $brazos->id,
                $espaldaAlta->id,
            ]);

    }
}
