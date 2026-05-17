<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Ejercicio;
use App\Models\Musculo;

class EjercicioSeeder extends Seeder
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
        // PECHO
        // =========================

        
            $pressBancaPlano = Ejercicio::create([
                'nombre'            => 'Press Banca Plano',
                'descripcion'       => 'Empuja una barra en banco plano',
                'tipo_id'           => 1,
                'medida_id'         => 1,
                'orbes_fuerza'      => 100,
                'orbes_calistenia'  => 10,
                'orbes_resistencia' => 0,
            ]);
            $pressBancaPlano->musculos()->attach([$pecho->id, $triceps->id, $deltoidesAnterior->id]);

            $pressBancaInclinado = Ejercicio::create([
                'nombre'            => 'Press Banca Inclinado',
                'descripcion'       => 'Empuja una barra en banco inclinado',
                'tipo_id'           => 1,
                'medida_id'         => 1,
                'orbes_fuerza'      => 115,
                'orbes_calistenia'  => 10,
                'orbes_resistencia' => 0,
            ]);
            $pressBancaInclinado->musculos()->attach([$pecho->id, $triceps->id, $deltoidesAnterior->id]);

            $pressMancuernasPlano = Ejercicio::create([
                'nombre'            => 'Press Mancuernas Plano',
                'descripcion'       => 'Empuja mancuernas en banco plano',
                'tipo_id'           => 1,
                'medida_id'         => 1,
                'orbes_fuerza'      => 110,
                'orbes_calistenia'  => 12,
                'orbes_resistencia' => 0,
            ]);
            $pressMancuernasPlano->musculos()->attach([$pecho->id, $triceps->id, $deltoidesAnterior->id]);

            $pressMancuernasInclinado = Ejercicio::create([
                'nombre'            => 'Press Mancuernas Inclinado',
                'descripcion'       => 'Empuja mancuernas en banco inclinado',
                'tipo_id'           => 1,
                'medida_id'         => 1,
                'orbes_fuerza'      => 120,
                'orbes_calistenia'  => 12,
                'orbes_resistencia' => 0,
            ]);
            $pressMancuernasInclinado->musculos()->attach([$pecho->id, $triceps->id, $deltoidesAnterior->id]);

            $aperturasConMancuernas = Ejercicio::create([
                'nombre'            => 'Aperturas con Mancuernas',
                'descripcion'       => 'Realiza aperturas controladas en banco plano',
                'tipo_id'           => 1,
                'medida_id'         => 1,
                'orbes_fuerza'      => 65,
                'orbes_calistenia'  => 0,
                'orbes_resistencia' => 0,
            ]);
            $aperturasConMancuernas->musculos()->attach([$pecho->id, $deltoidesAnterior->id]);

            $cruceDePoleas = Ejercicio::create([
                'nombre'            => 'Cruce de Poleas',
                'descripcion'       => 'Junta ambas poleas frente al pecho',
                'tipo_id'           => 1,
                'medida_id'         => 1,
                'orbes_fuerza'      => 65,
                'orbes_calistenia'  => 0,
                'orbes_resistencia' => 0,
            ]);
            $cruceDePoleas->musculos()->attach([$pecho->id, $deltoidesAnterior->id]);

            $fondosLastrados = Ejercicio::create([
                'nombre'            => 'Fondos Lastrados',
                'descripcion'       => 'Realiza fondos con peso adicional',
                'tipo_id'           => 1,
                'medida_id'         => 1,
                'orbes_fuerza'      => 110,
                'orbes_calistenia'  => 20,
                'orbes_resistencia' => 0,
            ]);
            $fondosLastrados->musculos()->attach([$pecho->id, $triceps->id, $deltoidesAnterior->id]);

        // =========================
        // TRICEPS
        // =========================

            $pressFrancesConBarra = Ejercicio::create([
                'nombre'            => 'Press Francés con Barra',
                'descripcion'       => 'Extiende los brazos con barra sobre la cabeza',
                'tipo_id'           => 1,
                'medida_id'         => 1,
                'orbes_fuerza'      => 110,
                'orbes_calistenia'  => 5,
                'orbes_resistencia' => 0,
            ]);
            $pressFrancesConBarra->musculos()->attach([$triceps->id]);

            $extensionUnilateralEnPolea = Ejercicio::create([
                'nombre'            => 'Extensión Unilateral en Polea',
                'descripcion'       => 'Extiende un brazo usando polea',
                'tipo_id'           => 1,
                'medida_id'         => 1,
                'orbes_fuerza'      => 88,
                'orbes_calistenia'  => 0,
                'orbes_resistencia' => 0,
            ]);
            $extensionUnilateralEnPolea->musculos()->attach([$triceps->id]);

            $extensionPorEncimaDeLaCabeza = Ejercicio::create([
                'nombre'            => 'Extensión por Encima de la Cabeza',
                'descripcion'       => 'Extiende brazos desde detrás de la cabeza',
                'tipo_id'           => 1,
                'medida_id'         => 1,
                'orbes_fuerza'      => 95,
                'orbes_calistenia'  => 0,
                'orbes_resistencia' => 0,
            ]);
            $extensionPorEncimaDeLaCabeza->musculos()->attach([$triceps->id]);

            $extensionDeTricepsEnPolea = Ejercicio::create([
                'nombre'            => 'Extensión de Tríceps en Polea',
                'descripcion'       => 'Extiende la cuerda hacia abajo separando las manos',
                'tipo_id'           => 1,
                'medida_id'         => 1,
                'orbes_fuerza'      => 92,
                'orbes_calistenia'  => 0,
                'orbes_resistencia' => 0,
            ]);
            $extensionDeTricepsEnPolea->musculos()->attach([$triceps->id]);
        // =========================
        // HOMBRO
        // =========================

            $pressMilitarConBarra = Ejercicio::create([
                'nombre'            => 'Press Militar con Barra',
                'descripcion'       => 'Empuja una barra por encima de la cabeza',
                'tipo_id'           => 1,
                'medida_id'         => 1,
                'orbes_fuerza'      => 100,
                'orbes_calistenia'  => 15,
                'orbes_resistencia' => 0,
            ]);
            $pressMilitarConBarra->musculos()->attach([
                $deltoidesAnterior->id,
                $deltoidesMedial->id,
                $triceps->id
            ]);

            $pressMilitarConMancuernas = Ejercicio::create([
                'nombre'            => 'Press Militar con Mancuernas',
                'descripcion'       => 'Empuja mancuernas sobre la cabeza',
                'tipo_id'           => 1,
                'medida_id'         => 1,
                'orbes_fuerza'      => 110,
                'orbes_calistenia'  => 15,
                'orbes_resistencia' => 0,
            ]);
            $pressMilitarConMancuernas->musculos()->attach([
                $deltoidesAnterior->id,
                $deltoidesMedial->id,
                $triceps->id
            ]);

            $elevacionesLaterales = Ejercicio::create([
                'nombre'            => 'Elevaciones Laterales',
                'descripcion'       => 'Eleva mancuernas hacia los lados',
                'tipo_id'           => 1,
                'medida_id'         => 1,
                'orbes_fuerza'      => 50,
                'orbes_calistenia'  => 0,
                'orbes_resistencia' => 0,
            ]);
            $elevacionesLaterales->musculos()->attach([
                $deltoidesMedial->id
            ]);

            $elevacionesLateralesEnPolea = Ejercicio::create([
                'nombre'            => 'Elevaciones Laterales en Polea',
                'descripcion'       => 'Eleva el brazo lateralmente usando polea',
                'tipo_id'           => 1,
                'medida_id'         => 1,
                'orbes_fuerza'      => 55,
                'orbes_calistenia'  => 0,
                'orbes_resistencia' => 0,
            ]);
            $elevacionesLateralesEnPolea->musculos()->attach([
                $deltoidesMedial->id
            ]);

            $elevacionesFrontales = Ejercicio::create([
                'nombre'            => 'Elevaciones Frontales',
                'descripcion'       => 'Eleva mancuernas al frente del cuerpo',
                'tipo_id'           => 1,
                'medida_id'         => 1,
                'orbes_fuerza'      => 45,
                'orbes_calistenia'  => 0,
                'orbes_resistencia' => 0,
            ]);
            $elevacionesFrontales->musculos()->attach([
                $deltoidesAnterior->id
            ]);

            $pressViking = Ejercicio::create([
                'nombre'            => 'Press Viking',
                'descripcion'       => 'Empuja palancas verticales sobre la cabeza',
                'tipo_id'           => 1,
                'medida_id'         => 1,
                'orbes_fuerza'      => 120,
                'orbes_calistenia'  => 10,
                'orbes_resistencia' => 0,
            ]);
            $pressViking->musculos()->attach([
                $deltoidesAnterior->id,
                $deltoidesMedial->id,
                $triceps->id
            ]);

            $pressConKettlebell = Ejercicio::create([
                'nombre'            => 'Press con Kettlebell',
                'descripcion'       => 'Empuja kettlebells sobre la cabeza',
                'tipo_id'           => 1,
                'medida_id'         => 1,
                'orbes_fuerza'      => 115,
                'orbes_calistenia'  => 15,
                'orbes_resistencia' => 0,
            ]);
            $pressConKettlebell->musculos()->attach([
                $deltoidesAnterior->id,
                $deltoidesMedial->id,
                $triceps->id
            ]);

        // =========================
        // ANTEBRAZO
        // =========================
            $curlDeMunecaConBarra = Ejercicio::create([
                'nombre'            => 'Curl de Muñeca con Barra',
                'descripcion'       => 'Flexiona las muñecas sosteniendo una barra',
                'tipo_id'           => 1,
                'medida_id'         => 1,
                'orbes_fuerza'      => 60,
                'orbes_calistenia'  => 0,
                'orbes_resistencia' => 0,
            ]);
            $curlDeMunecaConBarra->musculos()->attach([$brazos->id]);

            $curlInversoDeMuneca = Ejercicio::create([
                'nombre'            => 'Curl Inverso de Muñeca',
                'descripcion'       => 'Extiende las muñecas con barra en pronación',
                'tipo_id'           => 1,
                'medida_id'         => 1,
                'orbes_fuerza'      => 50,
                'orbes_calistenia'  => 0,
                'orbes_resistencia' => 0,
            ]);
            $curlInversoDeMuneca->musculos()->attach([$brazos->id]);

            $curlPronoConPolea = Ejercicio::create([
                'nombre'            => 'Curl prono con Polea',
                'descripcion'       => 'Curl con la muñeca pronada usando polea',
                'tipo_id'           => 1,
                'medida_id'         => 1,
                'orbes_fuerza'      => 65,
                'orbes_calistenia'  => 0,
                'orbes_resistencia' => 0,
            ]);
            $curlPronoConPolea->musculos()->attach([$brazos->id]);

            $pinchGripConDiscos = Ejercicio::create([
                'nombre'            => 'Pinch Grip con Discos',
                'descripcion'       => 'Sostén discos usando solo los dedos',
                'tipo_id'           => 1,
                'medida_id'         => 1,
                'orbes_fuerza'      => 50,
                'orbes_calistenia'  => 0,
                'orbes_resistencia' => 0,
            ]);
            $pinchGripConDiscos->musculos()->attach([$brazos->id]);

            $handGrip = Ejercicio::create([
                'nombre'            => 'Hand Grip',
                'descripcion'       => 'Grip para ejercitar los dedos',
                'tipo_id'           => 1,
                'medida_id'         => 1,
                'orbes_fuerza'      => 55,
                'orbes_calistenia'  => 0,
                'orbes_resistencia' => 0,
            ]);
            $handGrip->musculos()->attach([$brazos->id]);

            $farmerWalkPesado = Ejercicio::create([
                'nombre'            => 'Farmer Walk Pesado',
                'descripcion'       => 'Camina cargando mucho peso en ambas manos',
                'tipo_id'           => 1,
                'medida_id'         => 1,
                'orbes_fuerza'      => 65,
                'orbes_calistenia'  => 10,
                'orbes_resistencia' => 0,
            ]);
            $farmerWalkPesado->musculos()->attach([
                $brazos->id,
                $trapecios->id
            ]);

        // =========================
        // BICEPS
        // =========================
            $curlConBarra = Ejercicio::create([
                'nombre'            => 'Curl con Barra',
                'descripcion'       => 'Flexiona los brazos usando barra recta',
                'tipo_id'           => 1,
                'medida_id'         => 1,
                'orbes_fuerza'      => 60,
                'orbes_calistenia'  => 5,
                'orbes_resistencia' => 0,
            ]);
            $curlConBarra->musculos()->attach([
                $biceps->id,
                $brazos->id
            ]);

            $curlMancuernas = Ejercicio::create([
                'nombre'            => 'Curl Mancuernas',
                'descripcion'       => 'Flexiona brazos con agarre neutro',
                'tipo_id'           => 1,
                'medida_id'         => 1,
                'orbes_fuerza'      => 60,
                'orbes_calistenia'  => 5,
                'orbes_resistencia' => 0,
            ]);
            $curlMancuernas->musculos()->attach([
                $biceps->id,
                $brazos->id
            ]);

            $curlMartillo = Ejercicio::create([
                'nombre'            => 'Curl Martillo',
                'descripcion'       => 'Flexiona brazos con agarre neutro',
                'tipo_id'           => 1,
                'medida_id'         => 1,
                'orbes_fuerza'      => 50,
                'orbes_calistenia'  => 5,
                'orbes_resistencia' => 0,
            ]);
            $curlMartillo->musculos()->attach([
                $biceps->id,
                $brazos->id
            ]);

            $curlConcentrado = Ejercicio::create([
                'nombre'            => 'Curl Concentrado',
                'descripcion'       => 'Flexiona el brazo apoyando el codo en la pierna',
                'tipo_id'           => 1,
                'medida_id'         => 1,
                'orbes_fuerza'      => 55,
                'orbes_calistenia'  => 0,
                'orbes_resistencia' => 0,
            ]);
            $curlConcentrado->musculos()->attach([
                $biceps->id
            ]);

            $curlPredicador = Ejercicio::create([
                'nombre'            => 'Curl Predicador',
                'descripcion'       => 'Flexiona brazos usando banco Scott',
                'tipo_id'           => 1,
                'medida_id'         => 1,
                'orbes_fuerza'      => 60,
                'orbes_calistenia'  => 0,
                'orbes_resistencia' => 0,
            ]);
            $curlPredicador->musculos()->attach([
                $biceps->id
            ]);

            $curlInclinadoConMancuernas = Ejercicio::create([
                'nombre'            => 'Curl Inclinado con Mancuernas',
                'descripcion'       => 'Flexiona brazos sentado en banco inclinado',
                'tipo_id'           => 1,
                'medida_id'         => 1,
                'orbes_fuerza'      => 60,
                'orbes_calistenia'  => 0,
                'orbes_resistencia' => 0,
            ]);
            $curlInclinadoConMancuernas->musculos()->attach([
                $biceps->id
            ]);

            $dominadasSupinasLastradas = Ejercicio::create([
                'nombre'            => 'Dominadas Supinas Lastradas',
                'descripcion'       => 'Realiza dominadas supinas con peso adicional',
                'tipo_id'           => 1,
                'medida_id'         => 1,
                'orbes_fuerza'      => 145,
                'orbes_calistenia'  => 40,
                'orbes_resistencia' => 0,
            ]);
            $dominadasSupinasLastradas->musculos()->attach([
                $biceps->id,
                $dorsales->id,
                $brazos->id
            ]);

            $curlBayesian = Ejercicio::create([
                'nombre'            => 'Curl Bayesian',
                'descripcion'       => 'Flexiona brazos desde polea detrás del cuerpo',
                'tipo_id'           => 1,
                'medida_id'         => 1,
                'orbes_fuerza'      => 112,
                'orbes_calistenia'  => 0,
                'orbes_resistencia' => 0,
            ]);
            $curlBayesian->musculos()->attach([
                $biceps->id
            ]); 

        // =========================
        // DORSALES
        // =========================
            $jalonAlPecho = Ejercicio::create([
                'nombre'            => 'Jalón al Pecho',
                'descripcion'       => 'Tira la barra de polea hacia el pecho',
                'tipo_id'           => 1,
                'medida_id'         => 1,
                'orbes_fuerza'      => 120,
                'orbes_calistenia'  => 0,
                'orbes_resistencia' => 0,
            ]);
            $jalonAlPecho->musculos()->attach([
                $dorsales->id,
                $biceps->id,
                $brazos->id
            ]);

            $remoConBarra = Ejercicio::create([
                'nombre'            => 'Remo con Barra',
                'descripcion'       => 'Remo inclinado con barra al abdomen',
                'tipo_id'           => 1,
                'medida_id'         => 1,
                'orbes_fuerza'      => 130,
                'orbes_calistenia'  => 0,
                'orbes_resistencia' => 0,
            ]);
            $remoConBarra->musculos()->attach([
                $dorsales->id,
                $espaldaAlta->id,
                $biceps->id,
                $deltoidesPosterior->id
            ]);

            $remoConMancuerna = Ejercicio::create([
                'nombre'            => 'Remo con Mancuerna',
                'descripcion'       => 'Remo unilateral con mancuerna',
                'tipo_id'           => 1,
                'medida_id'         => 1,
                'orbes_fuerza'      => 125,
                'orbes_calistenia'  => 0,
                'orbes_resistencia' => 0,
            ]);
            $remoConMancuerna->musculos()->attach([
                $dorsales->id,
                $espaldaAlta->id,
                $biceps->id,
                $deltoidesPosterior->id
            ]);

            $remoEnMaquinaGuiada = Ejercicio::create([
                'nombre'            => 'Remo en Máquina Guiada',
                'descripcion'       => 'Remo en máquina con recorrido fijo',
                'tipo_id'           => 1,
                'medida_id'         => 1,
                'orbes_fuerza'      => 118,
                'orbes_calistenia'  => 0,
                'orbes_resistencia' => 0,
            ]);
            $remoEnMaquinaGuiada->musculos()->attach([
                $dorsales->id,
                $espaldaAlta->id,
                $biceps->id
            ]);

            $remoTBar = Ejercicio::create([
                'nombre'            => 'Remo T-Bar',
                'descripcion'       => 'Remo con barra en T cargada',
                'tipo_id'           => 1,
                'medida_id'         => 1,
                'orbes_fuerza'      => 135,
                'orbes_calistenia'  => 0,
                'orbes_resistencia' => 0,
            ]);
            $remoTBar->musculos()->attach([
                $dorsales->id,
                $espaldaAlta->id,
                $biceps->id,
                $trapecios->id
            ]);

            $pulloverEnPoleaDePie = Ejercicio::create([
                'nombre'            => 'Pullover en Polea de Pie',
                'descripcion'       => 'Pullover de pie en polea alta',
                'tipo_id'           => 1,
                'medida_id'         => 1,
                'orbes_fuerza'      => 110,
                'orbes_calistenia'  => 0,
                'orbes_resistencia' => 0,
            ]);
            $pulloverEnPoleaDePie->musculos()->attach([
                $dorsales->id
            ]);

        // =========================
        // ESPALDA ALTA
        // =========================
            $encogimientosConBarra = Ejercicio::create([
                'nombre'            => 'Encogimientos con Barra',
                'descripcion'       => 'Eleva los hombros sosteniendo una barra',
                'tipo_id'           => 1,
                'medida_id'         => 1,
                'orbes_fuerza'      => 120,
                'orbes_calistenia'  => 0,
                'orbes_resistencia' => 0,
            ]);
            $encogimientosConBarra->musculos()->attach([
                $trapecios->id,
                $espaldaAlta->id
            ]);

            $encogimientosConMancuernas = Ejercicio::create([
                'nombre'            => 'Encogimientos con Mancuernas',
                'descripcion'       => 'Eleva los hombros con mancuernas a los lados',
                'tipo_id'           => 1,
                'medida_id'         => 1,
                'orbes_fuerza'      => 118,
                'orbes_calistenia'  => 0,
                'orbes_resistencia' => 0,
            ]);
            $encogimientosConMancuernas->musculos()->attach([
                $trapecios->id,
                $espaldaAlta->id
            ]);

            $facePullEnPolea = Ejercicio::create([
                'nombre'            => 'Face Pull en Polea',
                'descripcion'       => 'Tira la cuerda hacia la cara con polea alta',
                'tipo_id'           => 1,
                'medida_id'         => 1,
                'orbes_fuerza'      => 115,
                'orbes_calistenia'  => 0,
                'orbes_resistencia' => 0,
            ]);
            $facePullEnPolea->musculos()->attach([
                $espaldaAlta->id,
                $deltoidesPosterior->id,
                $trapecios->id
            ]);

            $pecDeckInvertido = Ejercicio::create([
                'nombre'            => 'Pec Deck Invertido',
                'descripcion'       => 'Aperturas inversas en máquina contractor',
                'tipo_id'           => 1,
                'medida_id'         => 1,
                'orbes_fuerza'      => 110,
                'orbes_calistenia'  => 0,
                'orbes_resistencia' => 0,
            ]);
            $pecDeckInvertido->musculos()->attach([
                $deltoidesPosterior->id,
                $espaldaAlta->id
            ]);

            $pajarosConMancuernas = Ejercicio::create([
                'nombre'            => 'Pájaros con Mancuernas',
                'descripcion'       => 'Elevaciones posteriores inclinadas',
                'tipo_id'           => 1,
                'medida_id'         => 1,
                'orbes_fuerza'      => 108,
                'orbes_calistenia'  => 0,
                'orbes_resistencia' => 0,
            ]);
            $pajarosConMancuernas->musculos()->attach([
                $deltoidesPosterior->id,
                $espaldaAlta->id
            ]);

            $remoAltoConBarra = Ejercicio::create([
                'nombre'            => 'Remo Alto con Barra',
                'descripcion'       => 'Remo guiado hacia pecho alto',
                'tipo_id'           => 1,
                'medida_id'         => 1,
                'orbes_fuerza'      => 125,
                'orbes_calistenia'  => 0,
                'orbes_resistencia' => 0,
            ]);
            $remoAltoConBarra->musculos()->attach([
                $espaldaAlta->id,
                $trapecios->id,
                $deltoidesPosterior->id
            ]);

            $uprightRowConBarra = Ejercicio::create([
                'nombre'            => 'Upright Row con Barra',
                'descripcion'       => 'Eleva la barra hacia el mentón',
                'tipo_id'           => 1,
                'medida_id'         => 1,
                'orbes_fuerza'      => 125,
                'orbes_calistenia'  => 0,
                'orbes_resistencia' => 0,
            ]);
            $uprightRowConBarra->musculos()->attach([
                $trapecios->id,
                $deltoidesMedial->id,
                $espaldaAlta->id
            ]);

        // =========================
        // ABDOMINALES
        // =========================
            $crunchEnPoleaAlta = Ejercicio::create([
                'nombre'            => 'Crunch en Polea Alta',
                'descripcion'       => 'Flexión abdominal con cuerda en polea alta',
                'tipo_id'           => 1,
                'medida_id'         => 1,
                'orbes_fuerza'      => 60,
                'orbes_calistenia'  => 15,
                'orbes_resistencia' => 0,
            ]);
            $crunchEnPoleaAlta->musculos()->attach([
                $abdomen->id
            ]);

            $crunchEnMaquina = Ejercicio::create([
                'nombre'            => 'Crunch en Máquina',
                'descripcion'       => 'Flexión abdominal guiada en máquina',
                'tipo_id'           => 1,
                'medida_id'         => 1,
                'orbes_fuerza'      => 62,
                'orbes_calistenia'  => 12,
                'orbes_resistencia' => 0,
            ]);
            $crunchEnMaquina->musculos()->attach([
                $abdomen->id
            ]);

            $woodchopperEnPolea = Ejercicio::create([
                'nombre'            => 'Woodchopper en Polea',
                'descripcion'       => 'Rotación diagonal de arriba hacia abajo',
                'tipo_id'           => 1,
                'medida_id'         => 1,
                'orbes_fuerza'      => 58,
                'orbes_calistenia'  => 18,
                'orbes_resistencia' => 0,
            ]);
            $woodchopperEnPolea->musculos()->attach([
                $abdomen->id
            ]);

            $crunchInversoEnMaquina = Ejercicio::create([
                'nombre'            => 'Crunch Inverso en Máquina',
                'descripcion'       => 'Elevación de pelvis en máquina abdominal',
                'tipo_id'           => 1,
                'medida_id'         => 1,
                'orbes_fuerza'      => 62,
                'orbes_calistenia'  => 22,
                'orbes_resistencia' => 0,
            ]);
            $crunchInversoEnMaquina->musculos()->attach([
                $abdomen->id
            ]);

            $crunchEnPoleaConGiro = Ejercicio::create([
                'nombre'            => 'Crunch en Polea con Giro',
                'descripcion'       => 'Crunch con rotación final del torso',
                'tipo_id'           => 1,
                'medida_id'         => 1,
                'orbes_fuerza'      => 60,
                'orbes_calistenia'  => 18,
                'orbes_resistencia' => 0,
            ]);
            $crunchEnPoleaConGiro->musculos()->attach([
                $abdomen->id
            ]);

        // =========================
        // QUADRICEPS
        // =========================
            $sentadillaConBarra = Ejercicio::create([
                'nombre'            => 'Sentadilla con Barra',
                'descripcion'       => 'Sentadilla libre con barra en espalda',
                'tipo_id'           => 1,
                'medida_id'         => 1,
                'orbes_fuerza'      => 160,
                'orbes_calistenia'  => 0,
                'orbes_resistencia' => 0,
            ]);
            $sentadillaConBarra->musculos()->attach([
                $quadriceps->id,
                $gluteos->id,
                $isquiotibiales->id,
            ]);

            $hackSquatMachine = Ejercicio::create([
                'nombre'            => 'Hack Squat Machine',
                'descripcion'       => 'Sentadilla en máquina hack',
                'tipo_id'           => 1,
                'medida_id'         => 1,
                'orbes_fuerza'      => 158,
                'orbes_calistenia'  => 0,
                'orbes_resistencia' => 0,
            ]);
            $hackSquatMachine->musculos()->attach([
                $quadriceps->id,
                $gluteos->id
            ]);

            $sentadillaPendulum = Ejercicio::create([
                'nombre'            => 'Sentadilla Pendulum',
                'descripcion'       => 'Sentadilla en máquina pendulum',
                'tipo_id'           => 1,
                'medida_id'         => 1,
                'orbes_fuerza'      => 163,
                'orbes_calistenia'  => 0,
                'orbes_resistencia' => 0,
            ]);
            $sentadillaPendulum->musculos()->attach([
                $quadriceps->id,
                $gluteos->id
            ]);

            $prensaPiernas45 = Ejercicio::create([
                'nombre'            => 'Prensa de Piernas 45°',
                'descripcion'       => 'Empuje en prensa inclinada',
                'tipo_id'           => 1,
                'medida_id'         => 1,
                'orbes_fuerza'      => 155,
                'orbes_calistenia'  => 0,
                'orbes_resistencia' => 0,
            ]);
            $prensaPiernas45->musculos()->attach([
                $quadriceps->id,
                $gluteos->id,
                $isquiotibiales->id
            ]);

            $prensaHorizontal = Ejercicio::create([
                'nombre'            => 'Prensa Horizontal',
                'descripcion'       => 'Empuje en prensa horizontal',
                'tipo_id'           => 1,
                'medida_id'         => 1,
                'orbes_fuerza'      => 152,
                'orbes_calistenia'  => 0,
                'orbes_resistencia' => 0,
            ]);
            $prensaHorizontal->musculos()->attach([
                $quadriceps->id,
                $gluteos->id
            ]);

            $prensaVertical = Ejercicio::create([
                'nombre'            => 'Prensa Vertical',
                'descripcion'       => 'Empuje vertical en máquina de piernas',
                'tipo_id'           => 1,
                'medida_id'         => 1,
                'orbes_fuerza'      => 156,
                'orbes_calistenia'  => 0,
                'orbes_resistencia' => 0,
            ]);
            $prensaVertical->musculos()->attach([
                $quadriceps->id,
                $gluteos->id
            ]);

            $extensionPiernasSentado = Ejercicio::create([
                'nombre'            => 'Extensión de Piernas en Máquina Sentado',
                'descripcion'       => 'Extensión estándar sentado',
                'tipo_id'           => 1,
                'medida_id'         => 1,
                'orbes_fuerza'      => 140,
                'orbes_calistenia'  => 0,
                'orbes_resistencia' => 0,
            ]);
            $extensionPiernasSentado->musculos()->attach([
                $quadriceps->id
            ]);

            $extensionPiernasInclinada = Ejercicio::create([
                'nombre'            => 'Extensión de Piernas en Máquina Inclinada',
                'descripcion'       => 'Extensión en máquina inclinada',
                'tipo_id'           => 1,
                'medida_id'         => 1,
                'orbes_fuerza'      => 141,
                'orbes_calistenia'  => 0,
                'orbes_resistencia' => 0,
            ]);
            $extensionPiernasInclinada->musculos()->attach([
                $quadriceps->id
            ]);

            $splitSquatSmith = Ejercicio::create([
                'nombre'            => 'Split Squat en Smith Machine',
                'descripcion'       => 'Zancada fija en máquina Smith',
                'tipo_id'           => 1,
                'medida_id'         => 1,
                'orbes_fuerza'      => 145,
                'orbes_calistenia'  => 0,
                'orbes_resistencia' => 0,
            ]);
            $splitSquatSmith->musculos()->attach([
                $quadriceps->id,
                $gluteos->id,
                $isquiotibiales->id
            ]);

            $splitSquatMancuernas = Ejercicio::create([
                'nombre'            => 'Split Squat con Mancuernas',
                'descripcion'       => 'Zancada con mancuernas',
                'tipo_id'           => 1,
                'medida_id'         => 1,
                'orbes_fuerza'      => 142,
                'orbes_calistenia'  => 0,
                'orbes_resistencia' => 0,
            ]);
            $splitSquatMancuernas->musculos()->attach([
                $quadriceps->id,
                $gluteos->id,
                $isquiotibiales->id
            ]);

            $bulgarianSplitSquatMancuernas = Ejercicio::create([
                'nombre'            => 'Bulgarian Split Squat con Mancuernas',
                'descripcion'       => 'Zancada búlgara con mancuernas',
                'tipo_id'           => 1,
                'medida_id'         => 1,
                'orbes_fuerza'      => 144,
                'orbes_calistenia'  => 0,
                'orbes_resistencia' => 0,
            ]);
            $bulgarianSplitSquatMancuernas->musculos()->attach([
                $quadriceps->id,
                $gluteos->id,
                $isquiotibiales->id
            ]);

            $bulgarianSplitSquatBarra = Ejercicio::create([
                'nombre'            => 'Bulgarian Split Squat con Barra',
                'descripcion'       => 'Zancada búlgara con barra',
                'tipo_id'           => 1,
                'medida_id'         => 1,
                'orbes_fuerza'      => 144,
                'orbes_calistenia'  => 0,
                'orbes_resistencia' => 0,
            ]);
            $bulgarianSplitSquatBarra->musculos()->attach([
                $quadriceps->id,
                $gluteos->id,
                $isquiotibiales->id
            ]);

        // =========================
        // ISQUIOTIBIALES
        // =========================
            $pesoMuertoConvencional = Ejercicio::create([
                'nombre'            => 'Peso Muerto Convencional',
                'descripcion'       => 'Peso muerto con barra desde el suelo',
                'tipo_id'           => 1,
                'medida_id'         => 1,
                'orbes_fuerza'      => 165,
                'orbes_calistenia'  => 0,
                'orbes_resistencia' => 0,
            ]);
            $pesoMuertoConvencional->musculos()->attach([
                $isquiotibiales->id,
                $gluteos->id,
                $espaldaAlta->id
            ]);

            $pesoMuertoRumanoBarra = Ejercicio::create([
                'nombre'            => 'Peso Muerto Rumano con Barra',
                'descripcion'       => 'Bisagra de cadera con barra y piernas semirrígidas',
                'tipo_id'           => 1,
                'medida_id'         => 1,
                'orbes_fuerza'      => 162,
                'orbes_calistenia'  => 0,
                'orbes_resistencia' => 0,
            ]);
            $pesoMuertoRumanoBarra->musculos()->attach([
                $isquiotibiales->id,
                $gluteos->id,
                $espaldaAlta->id
            ]);

            $pesoMuertoRumanoMancuernas = Ejercicio::create([
                'nombre'            => 'Peso Muerto Rumano con Mancuernas',
                'descripcion'       => 'Bisagra de cadera con mancuernas',
                'tipo_id'           => 1,
                'medida_id'         => 1,
                'orbes_fuerza'      => 160,
                'orbes_calistenia'  => 0,
                'orbes_resistencia' => 0,
            ]);
            $pesoMuertoRumanoMancuernas->musculos()->attach([
                $isquiotibiales->id,
                $gluteos->id,
                $espaldaAlta->id
            ]);

            $pesoMuertoSumo = Ejercicio::create([
                'nombre'            => 'Peso Muerto Sumo',
                'descripcion'       => 'Peso muerto con stance ancho',
                'tipo_id'           => 1,
                'medida_id'         => 1,
                'orbes_fuerza'      => 163,
                'orbes_calistenia'  => 0,
                'orbes_resistencia' => 0,
            ]);
            $pesoMuertoSumo->musculos()->attach([
                $isquiotibiales->id,
                $gluteos->id,
                $adductores->id
            ]);

            $buenosDiasConBarra = Ejercicio::create([
                'nombre'            => 'Buenos Días con Barra',
                'descripcion'       => 'Bisagra de cadera con barra en espalda',
                'tipo_id'           => 1,
                'medida_id'         => 1,
                'orbes_fuerza'      => 158,
                'orbes_calistenia'  => 0,
                'orbes_resistencia' => 0,
            ]);
            $buenosDiasConBarra->musculos()->attach([
                $isquiotibiales->id,
                $gluteos->id,
                $espaldaAlta->id
            ]);

            $curlFemoralSentado = Ejercicio::create([
                'nombre'            => 'Curl Femoral Sentado',
                'descripcion'       => 'Curl en máquina sentado',
                'tipo_id'           => 1,
                'medida_id'         => 1,
                'orbes_fuerza'      => 145,
                'orbes_calistenia'  => 0,
                'orbes_resistencia' => 0,
            ]);
            $curlFemoralSentado->musculos()->attach([
                $isquiotibiales->id
            ]);

            $curlFemoralTumbado = Ejercicio::create([
                'nombre'            => 'Curl Femoral Tumbado',
                'descripcion'       => 'Curl en máquina acostado',
                'tipo_id'           => 1,
                'medida_id'         => 1,
                'orbes_fuerza'      => 147,
                'orbes_calistenia'  => 0,
                'orbes_resistencia' => 0,
            ]);
            $curlFemoralTumbado->musculos()->attach([
                $isquiotibiales->id
            ]);

            $pullThroughEnPolea = Ejercicio::create([
                'nombre'            => 'Pull Through en Polea',
                'descripcion'       => 'Extensión de cadera con cable',
                'tipo_id'           => 1,
                'medida_id'         => 1,
                'orbes_fuerza'      => 150,
                'orbes_calistenia'  => 0,
                'orbes_resistencia' => 0,
            ]);
            $pullThroughEnPolea->musculos()->attach([
                $isquiotibiales->id,
                $gluteos->id
            ]);

            $reverseHyperextension = Ejercicio::create([
                'nombre'            => 'Reverse Hyperextension',
                'descripcion'       => 'Extensión de cadera en máquina reverse hyper',
                'tipo_id'           => 1,
                'medida_id'         => 1,
                'orbes_fuerza'      => 155,
                'orbes_calistenia'  => 0,
                'orbes_resistencia' => 0,
            ]);
            $reverseHyperextension->musculos()->attach([
                $isquiotibiales->id,
                $gluteos->id,
                $espaldaAlta->id
            ]);

        // =========================
        // ADDCUTORES / ABDUCTORES
        // =========================

            $abduccionCaderaMaquinaSentado = Ejercicio::create([
                'nombre'            => 'Abducción de Cadera en Máquina Sentado',
                'descripcion'       => 'Apertura de piernas en máquina de abductores',
                'tipo_id'           => 1,
                'medida_id'         => 1,
                'orbes_fuerza'      => 130,
                'orbes_calistenia'  => 0,
                'orbes_resistencia' => 0,
            ]);
            $abduccionCaderaMaquinaSentado->musculos()->attach([
                $abductores->id,
                $gluteos->id
            ]);

            $abduccionCaderaPoleaBaja = Ejercicio::create([
                'nombre'            => 'Abducción de Cadera en Polea Baja',
                'descripcion'       => 'Apertura lateral con cable',
                'tipo_id'           => 1,
                'medida_id'         => 1,
                'orbes_fuerza'      => 125,
                'orbes_calistenia'  => 0,
                'orbes_resistencia' => 0,
            ]);
            $abduccionCaderaPoleaBaja->musculos()->attach([
                $abductores->id,
                $gluteos->id
            ]);

            $aduccionCaderaMaquinaSentado = Ejercicio::create([
                'nombre'            => 'Aducción de Cadera en Máquina Sentado',
                'descripcion'       => 'Cierre de piernas en máquina de aductores',
                'tipo_id'           => 1,
                'medida_id'         => 1,
                'orbes_fuerza'      => 132,
                'orbes_calistenia'  => 0,
                'orbes_resistencia' => 0,
            ]);
            $aduccionCaderaMaquinaSentado->musculos()->attach([
                $adductores->id
            ]);

            $aduccionCaderaPoleaBaja = Ejercicio::create([
                'nombre'            => 'Aducción de Cadera en Polea Baja',
                'descripcion'       => 'Aducción con cable a una pierna',
                'tipo_id'           => 1,
                'medida_id'         => 1,
                'orbes_fuerza'      => 125,
                'orbes_calistenia'  => 0,
                'orbes_resistencia' => 0,
            ]);
            $aduccionCaderaPoleaBaja->musculos()->attach([
                $adductores->id
            ]);

        // =========================
        // GLUTEOS
        // =========================
            $hipThrustConBarra = Ejercicio::create([
                'nombre'            => 'Hip Thrust con Barra',
                'descripcion'       => 'Empuje de cadera con barra en banco',
                'tipo_id'           => 1,
                'medida_id'         => 1,
                'orbes_fuerza'      => 170,
                'orbes_calistenia'  => 0,
                'orbes_resistencia' => 0,
            ]);
            $hipThrustConBarra->musculos()->attach([
                $gluteos->id,
                $isquiotibiales->id,
            ]);

            $hipThrustEnMaquina = Ejercicio::create([
                'nombre'            => 'Hip Thrust en Máquina',
                'descripcion'       => 'Empuje de cadera en máquina guiada',
                'tipo_id'           => 1,
                'medida_id'         => 1,
                'orbes_fuerza'      => 172,
                'orbes_calistenia'  => 0,
                'orbes_resistencia' => 0,
            ]);
            $hipThrustEnMaquina->musculos()->attach([
                $gluteos->id,
                $isquiotibiales->id
            ]);

            $patadaDeGluteoEnMaquina = Ejercicio::create([
                'nombre'            => 'Patada de Glúteo en Máquina',
                'descripcion'       => 'Extensión posterior guiada',
                'tipo_id'           => 1,
                'medida_id'         => 1,
                'orbes_fuerza'      => 150,
                'orbes_calistenia'  => 0,
                'orbes_resistencia' => 0,
            ]);
            $patadaDeGluteoEnMaquina->musculos()->attach([
                $gluteos->id
            ]);

            $patadaDeGluteoEnPoleaBaja = Ejercicio::create([
                'nombre'            => 'Patada de Glúteo en Polea Baja',
                'descripcion'       => 'Kickback con cable',
                'tipo_id'           => 1,
                'medida_id'         => 1,
                'orbes_fuerza'      => 145,
                'orbes_calistenia'  => 0,
                'orbes_resistencia' => 0,
            ]);
            $patadaDeGluteoEnPoleaBaja->musculos()->attach([
                $gluteos->id
            ]);

        // =========================
        // GEMELOS
        // =========================
            $elevacionGemelosEnMaquinaDePie = Ejercicio::create([
                'nombre'            => 'Elevación de Gemelos en Máquina de Pie',
                'descripcion'       => 'Elevación bilateral en máquina guiada',
                'tipo_id'           => 1,
                'medida_id'         => 1,
                'orbes_fuerza'      => 135,
                'orbes_calistenia'  => 0,
                'orbes_resistencia' => 0,
            ]);
            $elevacionGemelosEnMaquinaDePie->musculos()->attach([
                $gemelos->id
            ]);

            $elevacionGemelosEnPrensa = Ejercicio::create([
                'nombre'            => 'Elevación de Gemelos en Prensa',
                'descripcion'       => 'Gemelos en máquina de prensa',
                'tipo_id'           => 1,
                'medida_id'         => 1,
                'orbes_fuerza'      => 145,
                'orbes_calistenia'  => 0,
                'orbes_resistencia' => 0,
            ]);
            $elevacionGemelosEnPrensa->musculos()->attach([
                $gemelos->id
            ]);

            $elevacionGemelosSentadoEnMaquina = Ejercicio::create([
                'nombre'            => 'Elevación de Gemelos Sentado en Máquina',
                'descripcion'       => 'Gemelos sentado guiado',
                'tipo_id'           => 1,
                'medida_id'         => 1,
                'orbes_fuerza'      => 132,
                'orbes_calistenia'  => 0,
                'orbes_resistencia' => 0,
            ]);
            $elevacionGemelosSentadoEnMaquina->musculos()->attach([
                $gemelos->id
            ]);

    }
}
