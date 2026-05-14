<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Ejercicio;

class EjercicioSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {

        // =========================
        // PECHO
        // =========================
        $pecho = [

            [
                'nombre' => 'Press Banca Plano',
                'descripcion' => 'Empuja una barra en banco plano',
                'tipo' => 'fuerza',
                'orbes_fuerza' => 120,
                'orbes_calistenia' => 10,
                'orbes_resistencia' => 0,
            ],
        
            [
                'nombre' => 'Press Banca Inclinado',
                'descripcion' => 'Empuja una barra en banco inclinado',
                'tipo' => 'fuerza',
                'orbes_fuerza' => 125,
                'orbes_calistenia' => 10,
                'orbes_resistencia' => 0,
            ],
        
            [
                'nombre' => 'Press Banca Declinado',
                'descripcion' => 'Empuja una barra en banco declinado',
                'tipo' => 'fuerza',
                'orbes_fuerza' => 120,
                'orbes_calistenia' => 8,
                'orbes_resistencia' => 0,
            ],
        
            [
                'nombre' => 'Press Mancuernas Plano',
                'descripcion' => 'Empuja mancuernas en banco plano',
                'tipo' => 'fuerza',
                'orbes_fuerza' => 115,
                'orbes_calistenia' => 12,
                'orbes_resistencia' => 0,
            ],
        
            [
                'nombre' => 'Press Mancuernas Inclinado',
                'descripcion' => 'Empuja mancuernas en banco inclinado',
                'tipo' => 'fuerza',
                'orbes_fuerza' => 120,
                'orbes_calistenia' => 12,
                'orbes_resistencia' => 0,
            ],
        
            [
                'nombre' => 'Aperturas con Mancuernas',
                'descripcion' => 'Realiza aperturas controladas en banco plano',
                'tipo' => 'fuerza',
                'orbes_fuerza' => 90,
                'orbes_calistenia' => 0,
                'orbes_resistencia' => 0,
            ],
        
            [
                'nombre' => 'Aperturas Inclinado',
                'descripcion' => 'Realiza aperturas con mancuernas en banco inclinado',
                'tipo' => 'fuerza',
                'orbes_fuerza' => 95,
                'orbes_calistenia' => 0,
                'orbes_resistencia' => 0,
            ],
        
            [
                'nombre' => 'Cruce de Poleas',
                'descripcion' => 'Junta ambas poleas frente al pecho',
                'tipo' => 'fuerza',
                'orbes_fuerza' => 85,
                'orbes_calistenia' => 0,
                'orbes_resistencia' => 0,
            ],
        
            [
                'nombre' => 'Cruce de Poleas Alto',
                'descripcion' => 'Cruza poleas desde posición alta',
                'tipo' => 'fuerza',
                'orbes_fuerza' => 85,
                'orbes_calistenia' => 0,
                'orbes_resistencia' => 0,
            ],
        
            [
                'nombre' => 'Cruce de Poleas Bajo',
                'descripcion' => 'Cruza poleas desde posición baja',
                'tipo' => 'fuerza',
                'orbes_fuerza' => 85,
                'orbes_calistenia' => 0,
                'orbes_resistencia' => 0,
            ],
        
            [
                'nombre' => 'Press en Máquina',
                'descripcion' => 'Empuja en máquina guiada de pecho',
                'tipo' => 'fuerza',
                'orbes_fuerza' => 110,
                'orbes_calistenia' => 5,
                'orbes_resistencia' => 0,
            ],
        
            [
                'nombre' => 'Press Inclinado en Máquina',
                'descripcion' => 'Empuja en máquina inclinada de pecho',
                'tipo' => 'fuerza',
                'orbes_fuerza' => 115,
                'orbes_calistenia' => 5,
                'orbes_resistencia' => 0,
            ],
        
            [
                'nombre' => 'Press Hammer Strength',
                'descripcion' => 'Empuja palancas independientes para pecho',
                'tipo' => 'fuerza',
                'orbes_fuerza' => 120,
                'orbes_calistenia' => 8,
                'orbes_resistencia' => 0,
            ],
        
            [
                'nombre' => 'Fondos Lastrados',
                'descripcion' => 'Realiza fondos con peso adicional',
                'tipo' => 'fuerza',
                'orbes_fuerza' => 130,
                'orbes_calistenia' => 20,
                'orbes_resistencia' => 0,
            ],
        
            [
                'nombre' => 'Fondos en Máquina Asistida',
                'descripcion' => 'Realiza fondos con asistencia mecánica',
                'tipo' => 'fuerza',
                'orbes_fuerza' => 100,
                'orbes_calistenia' => 15,
                'orbes_resistencia' => 0,
            ],
        
            [
                'nombre' => 'Push Up con Disco',
                'descripcion' => 'Flexiones con peso adicional sobre la espalda',
                'tipo' => 'fuerza',
                'orbes_fuerza' => 105,
                'orbes_calistenia' => 25,
                'orbes_resistencia' => 0,
            ],
        
            [
                'nombre' => 'Press Guillotina',
                'descripcion' => 'Press al cuello para enfatizar pecho superior',
                'tipo' => 'fuerza',
                'orbes_fuerza' => 115,
                'orbes_calistenia' => 8,
                'orbes_resistencia' => 0,
            ],
        
            [
                'nombre' => 'Pullover con Mancuerna',
                'descripcion' => 'Extiende una mancuerna detrás de la cabeza',
                'tipo' => 'fuerza',
                'orbes_fuerza' => 90,
                'orbes_calistenia' => 5,
                'orbes_resistencia' => 0,
            ],
        
            [
                'nombre' => 'Pullover en Polea',
                'descripcion' => 'Realiza pullovers usando polea alta',
                'tipo' => 'fuerza',
                'orbes_fuerza' => 85,
                'orbes_calistenia' => 0,
                'orbes_resistencia' => 0,
            ],
        
            [
                'nombre' => 'Pec Deck',
                'descripcion' => 'Junta los brazos en máquina contractor de pecho',
                'tipo' => 'fuerza',
                'orbes_fuerza' => 90,
                'orbes_calistenia' => 0,
                'orbes_resistencia' => 0,
            ],
        
            [
                'nombre' => 'Press con Barra Smith',
                'descripcion' => 'Empuja barra guiada en banco plano',
                'tipo' => 'fuerza',
                'orbes_fuerza' => 115,
                'orbes_calistenia' => 5,
                'orbes_resistencia' => 0,
            ],
        
            [
                'nombre' => 'Press Inclinado Smith',
                'descripcion' => 'Empuja barra guiada en banco inclinado',
                'tipo' => 'fuerza',
                'orbes_fuerza' => 118,
                'orbes_calistenia' => 5,
                'orbes_resistencia' => 0,
            ],
        
            [
                'nombre' => 'Press Declinado Smith',
                'descripcion' => 'Empuja barra guiada en banco declinado',
                'tipo' => 'fuerza',
                'orbes_fuerza' => 115,
                'orbes_calistenia' => 5,
                'orbes_resistencia' => 0,
            ],
        
            [
                'nombre' => 'Svend Press',
                'descripcion' => 'Presiona discos juntos frente al pecho',
                'tipo' => 'fuerza',
                'orbes_fuerza' => 80,
                'orbes_calistenia' => 0,
                'orbes_resistencia' => 0,
            ],
        
            [
                'nombre' => 'Press Unilateral Mancuerna',
                'descripcion' => 'Empuja una mancuerna con un solo brazo',
                'tipo' => 'fuerza',
                'orbes_fuerza' => 105,
                'orbes_calistenia' => 10,
                'orbes_resistencia' => 0,
            ],
        
            [
                'nombre' => 'Press en Máquina Convergente',
                'descripcion' => 'Empuja palancas convergentes para pecho',
                'tipo' => 'fuerza',
                'orbes_fuerza' => 112,
                'orbes_calistenia' => 5,
                'orbes_resistencia' => 0,
            ],
        
            [
                'nombre' => 'Aperturas en Polea',
                'descripcion' => 'Abre y cierra brazos usando poleas',
                'tipo' => 'fuerza',
                'orbes_fuerza' => 88,
                'orbes_calistenia' => 0,
                'orbes_resistencia' => 0,
            ],
        
            [
                'nombre' => 'Press Plate Loaded',
                'descripcion' => 'Empuja máquina cargada con discos',
                'tipo' => 'fuerza',
                'orbes_fuerza' => 120,
                'orbes_calistenia' => 8,
                'orbes_resistencia' => 0,
            ],
        
            [
                'nombre' => 'Flexiones en Anillas',
                'descripcion' => 'Realiza flexiones usando anillas suspendidas',
                'tipo' => 'fuerza',
                'orbes_fuerza' => 100,
                'orbes_calistenia' => 30,
                'orbes_resistencia' => 0,
            ],
        
            [
                'nombre' => 'Press Explosivo con Barra',
                'descripcion' => 'Empuja la barra de forma explosiva',
                'tipo' => 'fuerza',
                'orbes_fuerza' => 125,
                'orbes_calistenia' => 15,
                'orbes_resistencia' => 0,
            ],
        
        ];

        // =========================
        // TRICEPS
        // =========================

        $triceps = [

            [
                'nombre' => 'Press Francés con Barra',
                'descripcion' => 'Extiende los brazos con barra sobre la cabeza',
                'tipo' => 'fuerza',
                'orbes_fuerza' => 110,
                'orbes_calistenia' => 5,
                'orbes_resistencia' => 0,
            ],
        
            [
                'nombre' => 'Press Francés con Mancuernas',
                'descripcion' => 'Extiende mancuernas sobre la cabeza',
                'tipo' => 'fuerza',
                'orbes_fuerza' => 105,
                'orbes_calistenia' => 5,
                'orbes_resistencia' => 0,
            ],
        
            [
                'nombre' => 'Extensión de Tríceps en Polea',
                'descripcion' => 'Empuja la polea hacia abajo con ambas manos',
                'tipo' => 'fuerza',
                'orbes_fuerza' => 90,
                'orbes_calistenia' => 0,
                'orbes_resistencia' => 0,
            ],
        
            [
                'nombre' => 'Extensión de Tríceps con Cuerda',
                'descripcion' => 'Extiende la cuerda hacia abajo separando las manos',
                'tipo' => 'fuerza',
                'orbes_fuerza' => 92,
                'orbes_calistenia' => 0,
                'orbes_resistencia' => 0,
            ],
        
            [
                'nombre' => 'Patada de Tríceps',
                'descripcion' => 'Extiende el brazo hacia atrás con mancuerna',
                'tipo' => 'fuerza',
                'orbes_fuerza' => 80,
                'orbes_calistenia' => 0,
                'orbes_resistencia' => 0,
            ],
        
            [
                'nombre' => 'Fondos en Paralelas',
                'descripcion' => 'Realiza fondos enfocando el trabajo en tríceps',
                'tipo' => 'fuerza',
                'orbes_fuerza' => 125,
                'orbes_calistenia' => 25,
                'orbes_resistencia' => 0,
            ],
        
            [
                'nombre' => 'Fondos Lastrados',
                'descripcion' => 'Realiza fondos con peso adicional',
                'tipo' => 'fuerza',
                'orbes_fuerza' => 135,
                'orbes_calistenia' => 30,
                'orbes_resistencia' => 0,
            ],
        
            [
                'nombre' => 'Fondos en Banco',
                'descripcion' => 'Baja y sube usando un banco como apoyo',
                'tipo' => 'fuerza',
                'orbes_fuerza' => 85,
                'orbes_calistenia' => 15,
                'orbes_resistencia' => 0,
            ],
        
            [
                'nombre' => 'Press Cerrado',
                'descripcion' => 'Empuja barra con agarre cerrado en banco plano',
                'tipo' => 'fuerza',
                'orbes_fuerza' => 125,
                'orbes_calistenia' => 12,
                'orbes_resistencia' => 0,
            ],
        
            [
                'nombre' => 'Press Cerrado Smith',
                'descripcion' => 'Empuja barra guiada con agarre cerrado',
                'tipo' => 'fuerza',
                'orbes_fuerza' => 120,
                'orbes_calistenia' => 8,
                'orbes_resistencia' => 0,
            ],
        
            [
                'nombre' => 'Extensión Unilateral en Polea',
                'descripcion' => 'Extiende un brazo usando polea',
                'tipo' => 'fuerza',
                'orbes_fuerza' => 88,
                'orbes_calistenia' => 0,
                'orbes_resistencia' => 0,
            ],
        
            [
                'nombre' => 'Extensión por Encima de la Cabeza',
                'descripcion' => 'Extiende brazos desde detrás de la cabeza',
                'tipo' => 'fuerza',
                'orbes_fuerza' => 95,
                'orbes_calistenia' => 0,
                'orbes_resistencia' => 0,
            ],
        
            [
                'nombre' => 'Extensión con Mancuerna a Dos Manos',
                'descripcion' => 'Extiende una mancuerna sujetada con ambas manos',
                'tipo' => 'fuerza',
                'orbes_fuerza' => 98,
                'orbes_calistenia' => 0,
                'orbes_resistencia' => 0,
            ],
        
            [
                'nombre' => 'Rompecráneos',
                'descripcion' => 'Baja la barra hacia la frente controladamente',
                'tipo' => 'fuerza',
                'orbes_fuerza' => 115,
                'orbes_calistenia' => 5,
                'orbes_resistencia' => 0,
            ],
        
            [
                'nombre' => 'Rompecráneos EZ',
                'descripcion' => 'Realiza rompecráneos con barra EZ',
                'tipo' => 'fuerza',
                'orbes_fuerza' => 118,
                'orbes_calistenia' => 5,
                'orbes_resistencia' => 0,
            ],
        
            [
                'nombre' => 'Press JM',
                'descripcion' => 'Combina press cerrado y press francés',
                'tipo' => 'fuerza',
                'orbes_fuerza' => 125,
                'orbes_calistenia' => 10,
                'orbes_resistencia' => 0,
            ],
        
            [
                'nombre' => 'Pushdown Invertido',
                'descripcion' => 'Empuja la polea con agarre supino',
                'tipo' => 'fuerza',
                'orbes_fuerza' => 90,
                'orbes_calistenia' => 0,
                'orbes_resistencia' => 0,
            ],
        
            [
                'nombre' => 'Pushdown con Barra Recta',
                'descripcion' => 'Empuja barra recta hacia abajo en polea',
                'tipo' => 'fuerza',
                'orbes_fuerza' => 92,
                'orbes_calistenia' => 0,
                'orbes_resistencia' => 0,
            ],
        
            [
                'nombre' => 'Pushdown con Barra V',
                'descripcion' => 'Empuja barra en V hacia abajo',
                'tipo' => 'fuerza',
                'orbes_fuerza' => 92,
                'orbes_calistenia' => 0,
                'orbes_resistencia' => 0,
            ],
        
            [
                'nombre' => 'Extensión en Máquina',
                'descripcion' => 'Extiende brazos usando máquina guiada',
                'tipo' => 'fuerza',
                'orbes_fuerza' => 95,
                'orbes_calistenia' => 0,
                'orbes_resistencia' => 0,
            ],
        
            [
                'nombre' => 'Press de Tríceps en Máquina',
                'descripcion' => 'Empuja palancas enfocando el tríceps',
                'tipo' => 'fuerza',
                'orbes_fuerza' => 105,
                'orbes_calistenia' => 5,
                'orbes_resistencia' => 0,
            ],
        
            [
                'nombre' => 'Flexiones Diamante',
                'descripcion' => 'Realiza flexiones con manos juntas',
                'tipo' => 'fuerza',
                'orbes_fuerza' => 100,
                'orbes_calistenia' => 30,
                'orbes_resistencia' => 0,
            ],
        
            [
                'nombre' => 'Flexiones Diamante Lastradas',
                'descripcion' => 'Haz flexiones diamante con peso adicional',
                'tipo' => 'fuerza',
                'orbes_fuerza' => 115,
                'orbes_calistenia' => 35,
                'orbes_resistencia' => 0,
            ],
        
            [
                'nombre' => 'Extensión en Polea Alta',
                'descripcion' => 'Extiende brazos desde polea alta',
                'tipo' => 'fuerza',
                'orbes_fuerza' => 90,
                'orbes_calistenia' => 0,
                'orbes_resistencia' => 0,
            ],
        
            [
                'nombre' => 'Extensión Cruzada en Polea',
                'descripcion' => 'Extiende un brazo cruzando el cuerpo',
                'tipo' => 'fuerza',
                'orbes_fuerza' => 85,
                'orbes_calistenia' => 0,
                'orbes_resistencia' => 0,
            ],
        
            [
                'nombre' => 'Press Tate',
                'descripcion' => 'Empuja mancuernas enfocando el tríceps',
                'tipo' => 'fuerza',
                'orbes_fuerza' => 100,
                'orbes_calistenia' => 5,
                'orbes_resistencia' => 0,
            ],
        
            [
                'nombre' => 'Extensión con Banda',
                'descripcion' => 'Extiende brazos usando banda elástica',
                'tipo' => 'fuerza',
                'orbes_fuerza' => 75,
                'orbes_calistenia' => 5,
                'orbes_resistencia' => 0,
            ],
        
            [
                'nombre' => 'Fondos en Máquina Asistida',
                'descripcion' => 'Realiza fondos con asistencia mecánica',
                'tipo' => 'fuerza',
                'orbes_fuerza' => 100,
                'orbes_calistenia' => 20,
                'orbes_resistencia' => 0,
            ],
        
            [
                'nombre' => 'Press de Suelo Cerrado',
                'descripcion' => 'Empuja barra desde el suelo con agarre cerrado',
                'tipo' => 'fuerza',
                'orbes_fuerza' => 120,
                'orbes_calistenia' => 10,
                'orbes_resistencia' => 0,
            ],
        
            [
                'nombre' => 'Extensión de Tríceps con Barra EZ',
                'descripcion' => 'Extiende barra EZ sobre la cabeza',
                'tipo' => 'fuerza',
                'orbes_fuerza' => 110,
                'orbes_calistenia' => 5,
                'orbes_resistencia' => 0,
            ],
        
        ];
        // =========================
        // HOMBRO
        // =========================

        $hombros = [

            [
                'nombre' => 'Press Militar con Barra',
                'descripcion' => 'Empuja una barra por encima de la cabeza',
                'tipo' => 'fuerza',
                'orbes_fuerza' => 130,
                'orbes_calistenia' => 15,
                'orbes_resistencia' => 0,
            ],
        
            [
                'nombre' => 'Press Militar con Mancuernas',
                'descripcion' => 'Empuja mancuernas sobre la cabeza',
                'tipo' => 'fuerza',
                'orbes_fuerza' => 125,
                'orbes_calistenia' => 15,
                'orbes_resistencia' => 0,
            ],
        
            [
                'nombre' => 'Press Arnold',
                'descripcion' => 'Gira las mancuernas durante el press',
                'tipo' => 'fuerza',
                'orbes_fuerza' => 120,
                'orbes_calistenia' => 12,
                'orbes_resistencia' => 0,
            ],
        
            [
                'nombre' => 'Elevaciones Laterales',
                'descripcion' => 'Eleva mancuernas hacia los lados',
                'tipo' => 'fuerza',
                'orbes_fuerza' => 90,
                'orbes_calistenia' => 0,
                'orbes_resistencia' => 0,
            ],
        
            [
                'nombre' => 'Elevaciones Laterales en Polea',
                'descripcion' => 'Eleva el brazo lateralmente usando polea',
                'tipo' => 'fuerza',
                'orbes_fuerza' => 92,
                'orbes_calistenia' => 0,
                'orbes_resistencia' => 0,
            ],
        
            [
                'nombre' => 'Elevaciones Frontales',
                'descripcion' => 'Eleva mancuernas al frente del cuerpo',
                'tipo' => 'fuerza',
                'orbes_fuerza' => 88,
                'orbes_calistenia' => 0,
                'orbes_resistencia' => 0,
            ],
        
            [
                'nombre' => 'Elevaciones Frontales con Disco',
                'descripcion' => 'Levanta un disco frente al cuerpo',
                'tipo' => 'fuerza',
                'orbes_fuerza' => 90,
                'orbes_calistenia' => 0,
                'orbes_resistencia' => 0,
            ],
        
            [
                'nombre' => 'Elevaciones Frontales en Polea',
                'descripcion' => 'Eleva el brazo al frente usando polea',
                'tipo' => 'fuerza',
                'orbes_fuerza' => 90,
                'orbes_calistenia' => 0,
                'orbes_resistencia' => 0,
            ],
        
            [
                'nombre' => 'Press en Máquina de Hombro',
                'descripcion' => 'Empuja palancas guiadas sobre la cabeza',
                'tipo' => 'fuerza',
                'orbes_fuerza' => 120,
                'orbes_calistenia' => 8,
                'orbes_resistencia' => 0,
            ],
        
            [
                'nombre' => 'Press Smith Sentado',
                'descripcion' => 'Empuja barra guiada sentado',
                'tipo' => 'fuerza',
                'orbes_fuerza' => 122,
                'orbes_calistenia' => 8,
                'orbes_resistencia' => 0,
            ],
        
            [
                'nombre' => 'Push Press',
                'descripcion' => 'Impulsa la barra usando piernas y hombros',
                'tipo' => 'fuerza',
                'orbes_fuerza' => 140,
                'orbes_calistenia' => 18,
                'orbes_resistencia' => 0,
            ],
        
            [
                'nombre' => 'Press Z',
                'descripcion' => 'Realiza press sentado en el suelo',
                'tipo' => 'fuerza',
                'orbes_fuerza' => 125,
                'orbes_calistenia' => 20,
                'orbes_resistencia' => 0,
            ],
        
            [
                'nombre' => 'Press Unilateral Mancuerna',
                'descripcion' => 'Empuja una mancuerna sobre la cabeza',
                'tipo' => 'fuerza',
                'orbes_fuerza' => 118,
                'orbes_calistenia' => 12,
                'orbes_resistencia' => 0,
            ],
        
            [
                'nombre' => 'Elevaciones Laterales Sentado',
                'descripcion' => 'Eleva mancuernas lateralmente sentado',
                'tipo' => 'fuerza',
                'orbes_fuerza' => 92,
                'orbes_calistenia' => 0,
                'orbes_resistencia' => 0,
            ],
        
            [
                'nombre' => 'Elevaciones Laterales Inclinado',
                'descripcion' => 'Realiza elevaciones laterales inclinado',
                'tipo' => 'fuerza',
                'orbes_fuerza' => 94,
                'orbes_calistenia' => 0,
                'orbes_resistencia' => 0,
            ],
        
            [
                'nombre' => 'Elevaciones Laterales Unilaterales',
                'descripcion' => 'Trabaja un hombro a la vez lateralmente',
                'tipo' => 'fuerza',
                'orbes_fuerza' => 90,
                'orbes_calistenia' => 0,
                'orbes_resistencia' => 0,
            ],
        
            [
                'nombre' => 'Elevaciones Laterales en Máquina',
                'descripcion' => 'Eleva brazos usando máquina guiada',
                'tipo' => 'fuerza',
                'orbes_fuerza' => 95,
                'orbes_calistenia' => 0,
                'orbes_resistencia' => 0,
            ],
        
            [
                'nombre' => 'Press de Hombro Hammer',
                'descripcion' => 'Empuja palancas independientes sobre la cabeza',
                'tipo' => 'fuerza',
                'orbes_fuerza' => 125,
                'orbes_calistenia' => 10,
                'orbes_resistencia' => 0,
            ],
        
            [
                'nombre' => 'Press Bradford',
                'descripcion' => 'Mueve la barra delante y detrás de la cabeza',
                'tipo' => 'fuerza',
                'orbes_fuerza' => 122,
                'orbes_calistenia' => 10,
                'orbes_resistencia' => 0,
            ],
        
            [
                'nombre' => 'Press Tras Nuca',
                'descripcion' => 'Empuja la barra desde detrás de la cabeza',
                'tipo' => 'fuerza',
                'orbes_fuerza' => 120,
                'orbes_calistenia' => 8,
                'orbes_resistencia' => 0,
            ],
        
            [
                'nombre' => 'Landmine Press',
                'descripcion' => 'Empuja una barra anclada diagonalmente',
                'tipo' => 'fuerza',
                'orbes_fuerza' => 118,
                'orbes_calistenia' => 12,
                'orbes_resistencia' => 0,
            ],
        
            [
                'nombre' => 'Landmine Press Unilateral',
                'descripcion' => 'Empuja una barra anclada con un brazo',
                'tipo' => 'fuerza',
                'orbes_fuerza' => 115,
                'orbes_calistenia' => 12,
                'orbes_resistencia' => 0,
            ],
        
            [
                'nombre' => 'Elevación Frontal con Barra',
                'descripcion' => 'Eleva una barra frente al cuerpo',
                'tipo' => 'fuerza',
                'orbes_fuerza' => 92,
                'orbes_calistenia' => 0,
                'orbes_resistencia' => 0,
            ],
        
            [
                'nombre' => 'Elevación Frontal Alterna',
                'descripcion' => 'Eleva mancuernas alternando brazos',
                'tipo' => 'fuerza',
                'orbes_fuerza' => 88,
                'orbes_calistenia' => 0,
                'orbes_resistencia' => 0,
            ],
        
            [
                'nombre' => 'Elevación Frontal Martillo',
                'descripcion' => 'Eleva mancuernas con agarre neutro',
                'tipo' => 'fuerza',
                'orbes_fuerza' => 90,
                'orbes_calistenia' => 0,
                'orbes_resistencia' => 0,
            ],
        
            [
                'nombre' => 'Press Viking',
                'descripcion' => 'Empuja palancas verticales sobre la cabeza',
                'tipo' => 'fuerza',
                'orbes_fuerza' => 130,
                'orbes_calistenia' => 10,
                'orbes_resistencia' => 0,
            ],
        
            [
                'nombre' => 'Press con Kettlebell',
                'descripcion' => 'Empuja kettlebells sobre la cabeza',
                'tipo' => 'fuerza',
                'orbes_fuerza' => 115,
                'orbes_calistenia' => 15,
                'orbes_resistencia' => 0,
            ],
        
            [
                'nombre' => 'Elevaciones Laterales con Banda',
                'descripcion' => 'Eleva brazos lateralmente usando banda',
                'tipo' => 'fuerza',
                'orbes_fuerza' => 75,
                'orbes_calistenia' => 5,
                'orbes_resistencia' => 0,
            ],
        
            [
                'nombre' => 'Press Militar de Pie',
                'descripcion' => 'Empuja barra de pie sobre la cabeza',
                'tipo' => 'fuerza',
                'orbes_fuerza' => 135,
                'orbes_calistenia' => 18,
                'orbes_resistencia' => 0,
            ],
        
            [
                'nombre' => 'Elevaciones Parciales Laterales',
                'descripcion' => 'Realiza repeticiones cortas laterales',
                'tipo' => 'fuerza',
                'orbes_fuerza' => 85,
                'orbes_calistenia' => 0,
                'orbes_resistencia' => 0,
            ],
        
        ];

        // =========================
        // ANTEBRAZO
        // =========================
        $antebrazo = [

            [
                'nombre' => 'Curl de Muñeca con Barra',
                'descripcion' => 'Flexiona las muñecas sosteniendo una barra',
                'tipo' => 'fuerza',
                'orbes_fuerza' => 110,
                'orbes_calistenia' => 0,
                'orbes_resistencia' => 0,
            ],
        
            [
                'nombre' => 'Curl Inverso de Muñeca',
                'descripcion' => 'Extiende las muñecas con barra en pronación',
                'tipo' => 'fuerza',
                'orbes_fuerza' => 105,
                'orbes_calistenia' => 0,
                'orbes_resistencia' => 0,
            ],
        
            [
                'nombre' => 'Curl Martillo',
                'descripcion' => 'Flexiona brazos con agarre neutro',
                'tipo' => 'fuerza',
                'orbes_fuerza' => 120,
                'orbes_calistenia' => 5,
                'orbes_resistencia' => 0,
            ],
        
            [
                'nombre' => 'Curl Martillo Cruzado',
                'descripcion' => 'Lleva la mancuerna cruzando el cuerpo',
                'tipo' => 'fuerza',
                'orbes_fuerza' => 122,
                'orbes_calistenia' => 5,
                'orbes_resistencia' => 0,
            ],
        
            [
                'nombre' => 'Curl Reverso con Barra',
                'descripcion' => 'Flexiona brazos con agarre prono',
                'tipo' => 'fuerza',
                'orbes_fuerza' => 118,
                'orbes_calistenia' => 5,
                'orbes_resistencia' => 0,
            ],
        
            [
                'nombre' => 'Curl Reverso EZ',
                'descripcion' => 'Flexiona brazos con barra EZ en pronación',
                'tipo' => 'fuerza',
                'orbes_fuerza' => 116,
                'orbes_calistenia' => 5,
                'orbes_resistencia' => 0,
            ],
        
            [
                'nombre' => 'Curl de Antebrazo en Polea',
                'descripcion' => 'Flexiona muñecas usando polea baja',
                'tipo' => 'fuerza',
                'orbes_fuerza' => 108,
                'orbes_calistenia' => 0,
                'orbes_resistencia' => 0,
            ],
        
            [
                'nombre' => 'Pronación con Polea',
                'descripcion' => 'Gira la muñeca hacia adentro usando polea',
                'tipo' => 'fuerza',
                'orbes_fuerza' => 125,
                'orbes_calistenia' => 0,
                'orbes_resistencia' => 0,
            ],
        
            [
                'nombre' => 'Supinación con Polea',
                'descripcion' => 'Gira la muñeca hacia afuera usando polea',
                'tipo' => 'fuerza',
                'orbes_fuerza' => 122,
                'orbes_calistenia' => 0,
                'orbes_resistencia' => 0,
            ],
        
            [
                'nombre' => 'Curl de Dedos con Barra',
                'descripcion' => 'Enrolla la barra usando los dedos',
                'tipo' => 'fuerza',
                'orbes_fuerza' => 118,
                'orbes_calistenia' => 0,
                'orbes_resistencia' => 0,
            ],
        
            [
                'nombre' => 'Wrist Roller',
                'descripcion' => 'Enrolla una cuerda levantando peso con las muñecas',
                'tipo' => 'fuerza',
                'orbes_fuerza' => 125,
                'orbes_calistenia' => 5,
                'orbes_resistencia' => 0,
            ],
        
            [
                'nombre' => 'Pinch Grip con Discos',
                'descripcion' => 'Sostén discos usando solo los dedos',
                'tipo' => 'fuerza',
                'orbes_fuerza' => 130,
                'orbes_calistenia' => 0,
                'orbes_resistencia' => 0,
            ],
        
            [
                'nombre' => 'Dead Hang con Toalla',
                'descripcion' => 'Cuelga usando toallas para aumentar el agarre',
                'tipo' => 'fuerza',
                'orbes_fuerza' => 135,
                'orbes_calistenia' => 30,
                'orbes_resistencia' => 0,
            ],
        
            [
                'nombre' => 'Farmer Walk Pesado',
                'descripcion' => 'Camina cargando mucho peso en ambas manos',
                'tipo' => 'fuerza',
                'orbes_fuerza' => 140,
                'orbes_calistenia' => 10,
                'orbes_resistencia' => 0,
            ],
        
            [
                'nombre' => 'Farmer Walk Unilateral',
                'descripcion' => 'Camina cargando peso en una sola mano',
                'tipo' => 'fuerza',
                'orbes_fuerza' => 138,
                'orbes_calistenia' => 12,
                'orbes_resistencia' => 0,
            ],
        
            [
                'nombre' => 'Curl con Fat Grip',
                'descripcion' => 'Flexiona brazos usando agarre grueso',
                'tipo' => 'fuerza',
                'orbes_fuerza' => 128,
                'orbes_calistenia' => 5,
                'orbes_resistencia' => 0,
            ],
        
            [
                'nombre' => 'Dominadas con Fat Grip',
                'descripcion' => 'Realiza dominadas con agarre grueso',
                'tipo' => 'fuerza',
                'orbes_fuerza' => 145,
                'orbes_calistenia' => 35,
                'orbes_resistencia' => 0,
            ],
        
            [
                'nombre' => 'Curl Isométrico',
                'descripcion' => 'Mantén la contracción del curl sin movimiento',
                'tipo' => 'fuerza',
                'orbes_fuerza' => 120,
                'orbes_calistenia' => 5,
                'orbes_resistencia' => 0,
            ],
        
            [
                'nombre' => 'Hold de Barra Pesada',
                'descripcion' => 'Sostén una barra cargada el mayor tiempo posible',
                'tipo' => 'fuerza',
                'orbes_fuerza' => 145,
                'orbes_calistenia' => 5,
                'orbes_resistencia' => 0,
            ],
        
            [
                'nombre' => 'Curl Concentrado Martillo',
                'descripcion' => 'Flexiona el brazo con agarre neutro concentrado',
                'tipo' => 'fuerza',
                'orbes_fuerza' => 118,
                'orbes_calistenia' => 0,
                'orbes_resistencia' => 0,
            ],
        
            [
                'nombre' => 'Curl Scott Reverso',
                'descripcion' => 'Flexiona brazos en banco Scott con agarre prono',
                'tipo' => 'fuerza',
                'orbes_fuerza' => 120,
                'orbes_calistenia' => 0,
                'orbes_resistencia' => 0,
            ],
        
            [
                'nombre' => 'Pronación con Banda',
                'descripcion' => 'Gira la muñeca hacia adentro usando banda',
                'tipo' => 'fuerza',
                'orbes_fuerza' => 110,
                'orbes_calistenia' => 0,
                'orbes_resistencia' => 0,
            ],
        
            [
                'nombre' => 'Supinación con Banda',
                'descripcion' => 'Gira la muñeca hacia afuera usando banda',
                'tipo' => 'fuerza',
                'orbes_fuerza' => 108,
                'orbes_calistenia' => 0,
                'orbes_resistencia' => 0,
            ],
        
            [
                'nombre' => 'Curl Zottman',
                'descripcion' => 'Combina curl supino y descenso prono',
                'tipo' => 'fuerza',
                'orbes_fuerza' => 125,
                'orbes_calistenia' => 5,
                'orbes_resistencia' => 0,
            ],
        
            [
                'nombre' => 'Extensión de Dedos con Banda',
                'descripcion' => 'Abre los dedos contra resistencia elástica',
                'tipo' => 'fuerza',
                'orbes_fuerza' => 90,
                'orbes_calistenia' => 0,
                'orbes_resistencia' => 0,
            ],
        
            [
                'nombre' => 'Curl de Arrastre',
                'descripcion' => 'Arrastra la barra cerca del torso al flexionar',
                'tipo' => 'fuerza',
                'orbes_fuerza' => 122,
                'orbes_calistenia' => 5,
                'orbes_resistencia' => 0,
            ],
        
            [
                'nombre' => 'Remo con Toalla',
                'descripcion' => 'Realiza remo usando toallas como agarre',
                'tipo' => 'fuerza',
                'orbes_fuerza' => 135,
                'orbes_calistenia' => 20,
                'orbes_resistencia' => 0,
            ],
        
            [
                'nombre' => 'Curl Unilateral en Polea',
                'descripcion' => 'Flexiona un brazo usando polea baja',
                'tipo' => 'fuerza',
                'orbes_fuerza' => 115,
                'orbes_calistenia' => 0,
                'orbes_resistencia' => 0,
            ],
        
            [
                'nombre' => 'Levantamiento de Martillo',
                'descripcion' => 'Levanta un mazo usando fuerza de muñeca',
                'tipo' => 'fuerza',
                'orbes_fuerza' => 130,
                'orbes_calistenia' => 0,
                'orbes_resistencia' => 0,
            ],
        
            [
                'nombre' => 'Hold de Pinza',
                'descripcion' => 'Mantén una pinza de agarre cerrada',
                'tipo' => 'fuerza',
                'orbes_fuerza' => 115,
                'orbes_calistenia' => 0,
                'orbes_resistencia' => 0,
            ],
        
        ];

        // =========================
        // BICEPS
        // =========================
        $biceps = [

            [
                'nombre' => 'Curl con Barra',
                'descripcion' => 'Flexiona los brazos usando barra recta',
                'tipo' => 'fuerza',
                'orbes_fuerza' => 120,
                'orbes_calistenia' => 5,
                'orbes_resistencia' => 0,
            ],
        
            [
                'nombre' => 'Curl con Barra EZ',
                'descripcion' => 'Flexiona brazos usando barra EZ',
                'tipo' => 'fuerza',
                'orbes_fuerza' => 118,
                'orbes_calistenia' => 5,
                'orbes_resistencia' => 0,
            ],
        
            [
                'nombre' => 'Curl Alterno con Mancuernas',
                'descripcion' => 'Flexiona brazos alternando mancuernas',
                'tipo' => 'fuerza',
                'orbes_fuerza' => 115,
                'orbes_calistenia' => 5,
                'orbes_resistencia' => 0,
            ],
        
            [
                'nombre' => 'Curl Martillo',
                'descripcion' => 'Flexiona brazos con agarre neutro',
                'tipo' => 'fuerza',
                'orbes_fuerza' => 120,
                'orbes_calistenia' => 5,
                'orbes_resistencia' => 0,
            ],
        
            [
                'nombre' => 'Curl Concentrado',
                'descripcion' => 'Flexiona el brazo apoyando el codo en la pierna',
                'tipo' => 'fuerza',
                'orbes_fuerza' => 105,
                'orbes_calistenia' => 0,
                'orbes_resistencia' => 0,
            ],
        
            [
                'nombre' => 'Curl Predicador',
                'descripcion' => 'Flexiona brazos usando banco Scott',
                'tipo' => 'fuerza',
                'orbes_fuerza' => 112,
                'orbes_calistenia' => 0,
                'orbes_resistencia' => 0,
            ],
        
            [
                'nombre' => 'Curl Predicador Unilateral',
                'descripcion' => 'Trabaja un brazo a la vez en banco Scott',
                'tipo' => 'fuerza',
                'orbes_fuerza' => 110,
                'orbes_calistenia' => 0,
                'orbes_resistencia' => 0,
            ],
        
            [
                'nombre' => 'Curl en Polea Baja',
                'descripcion' => 'Flexiona brazos usando polea baja',
                'tipo' => 'fuerza',
                'orbes_fuerza' => 108,
                'orbes_calistenia' => 0,
                'orbes_resistencia' => 0,
            ],
        
            [
                'nombre' => 'Curl Unilateral en Polea',
                'descripcion' => 'Flexiona un brazo usando polea',
                'tipo' => 'fuerza',
                'orbes_fuerza' => 106,
                'orbes_calistenia' => 0,
                'orbes_resistencia' => 0,
            ],
        
            [
                'nombre' => 'Curl Spider',
                'descripcion' => 'Flexiona brazos inclinado sobre banco',
                'tipo' => 'fuerza',
                'orbes_fuerza' => 110,
                'orbes_calistenia' => 0,
                'orbes_resistencia' => 0,
            ],
        
            [
                'nombre' => 'Curl Inclinado con Mancuernas',
                'descripcion' => 'Flexiona brazos sentado en banco inclinado',
                'tipo' => 'fuerza',
                'orbes_fuerza' => 112,
                'orbes_calistenia' => 0,
                'orbes_resistencia' => 0,
            ],
        
            [
                'nombre' => 'Curl Zottman',
                'descripcion' => 'Combina curl supino y descenso prono',
                'tipo' => 'fuerza',
                'orbes_fuerza' => 118,
                'orbes_calistenia' => 5,
                'orbes_resistencia' => 0,
            ],
        
            [
                'nombre' => 'Curl Drag',
                'descripcion' => 'Arrastra la barra cerca del torso al subir',
                'tipo' => 'fuerza',
                'orbes_fuerza' => 115,
                'orbes_calistenia' => 5,
                'orbes_resistencia' => 0,
            ],
        
            [
                'nombre' => 'Curl 21s',
                'descripcion' => 'Combina medias y repeticiones completas',
                'tipo' => 'fuerza',
                'orbes_fuerza' => 110,
                'orbes_calistenia' => 0,
                'orbes_resistencia' => 0,
            ],
        
            [
                'nombre' => 'Curl Martillo Cruzado',
                'descripcion' => 'Lleva la mancuerna cruzando el cuerpo',
                'tipo' => 'fuerza',
                'orbes_fuerza' => 120,
                'orbes_calistenia' => 5,
                'orbes_resistencia' => 0,
            ],
        
            [
                'nombre' => 'Curl Reverso',
                'descripcion' => 'Flexiona brazos con agarre prono',
                'tipo' => 'fuerza',
                'orbes_fuerza' => 115,
                'orbes_calistenia' => 5,
                'orbes_resistencia' => 0,
            ],
        
            [
                'nombre' => 'Curl Reverso EZ',
                'descripcion' => 'Flexiona brazos con barra EZ en pronación',
                'tipo' => 'fuerza',
                'orbes_fuerza' => 113,
                'orbes_calistenia' => 5,
                'orbes_resistencia' => 0,
            ],
        
            [
                'nombre' => 'Dominadas Supinas',
                'descripcion' => 'Realiza dominadas con agarre supino',
                'tipo' => 'fuerza',
                'orbes_fuerza' => 135,
                'orbes_calistenia' => 35,
                'orbes_resistencia' => 0,
            ],
        
            [
                'nombre' => 'Dominadas Supinas Lastradas',
                'descripcion' => 'Realiza dominadas supinas con peso adicional',
                'tipo' => 'fuerza',
                'orbes_fuerza' => 145,
                'orbes_calistenia' => 40,
                'orbes_resistencia' => 0,
            ],
        
            [
                'nombre' => 'Curl en Máquina',
                'descripcion' => 'Flexiona brazos usando máquina guiada',
                'tipo' => 'fuerza',
                'orbes_fuerza' => 108,
                'orbes_calistenia' => 0,
                'orbes_resistencia' => 0,
            ],
        
            [
                'nombre' => 'Curl Bayesian',
                'descripcion' => 'Flexiona brazos desde polea detrás del cuerpo',
                'tipo' => 'fuerza',
                'orbes_fuerza' => 112,
                'orbes_calistenia' => 0,
                'orbes_resistencia' => 0,
            ],
        
            [
                'nombre' => 'Curl con Cable Alto',
                'descripcion' => 'Flexiona brazos desde poleas altas',
                'tipo' => 'fuerza',
                'orbes_fuerza' => 105,
                'orbes_calistenia' => 0,
                'orbes_resistencia' => 0,
            ],
        
            [
                'nombre' => 'Curl Isométrico',
                'descripcion' => 'Mantén la contracción sin movimiento',
                'tipo' => 'fuerza',
                'orbes_fuerza' => 115,
                'orbes_calistenia' => 5,
                'orbes_resistencia' => 0,
            ],
        
            [
                'nombre' => 'Curl Unilateral Concentrado',
                'descripcion' => 'Flexiona un brazo de forma aislada',
                'tipo' => 'fuerza',
                'orbes_fuerza' => 104,
                'orbes_calistenia' => 0,
                'orbes_resistencia' => 0,
            ],
        
            [
                'nombre' => 'Curl en Banco Inclinado Alterno',
                'descripcion' => 'Flexiona mancuernas alternando en banco inclinado',
                'tipo' => 'fuerza',
                'orbes_fuerza' => 112,
                'orbes_calistenia' => 0,
                'orbes_resistencia' => 0,
            ],
        
            [
                'nombre' => 'Curl Martillo con Cuerda',
                'descripcion' => 'Flexiona brazos usando cuerda en polea',
                'tipo' => 'fuerza',
                'orbes_fuerza' => 118,
                'orbes_calistenia' => 5,
                'orbes_resistencia' => 0,
            ],
        
            [
                'nombre' => 'Curl con Fat Grip',
                'descripcion' => 'Flexiona brazos usando agarre grueso',
                'tipo' => 'fuerza',
                'orbes_fuerza' => 125,
                'orbes_calistenia' => 5,
                'orbes_resistencia' => 0,
            ],
        
            [
                'nombre' => 'Curl tipo Cheat',
                'descripcion' => 'Usa impulso controlado para mover más peso',
                'tipo' => 'fuerza',
                'orbes_fuerza' => 128,
                'orbes_calistenia' => 5,
                'orbes_resistencia' => 0,
            ],
        
            [
                'nombre' => 'Curl con Banda',
                'descripcion' => 'Flexiona brazos usando banda elástica',
                'tipo' => 'fuerza',
                'orbes_fuerza' => 85,
                'orbes_calistenia' => 5,
                'orbes_resistencia' => 0,
            ],
        
            [
                'nombre' => 'Curl de Arrastre en Polea',
                'descripcion' => 'Flexiona brazos manteniendo el cable cerca del torso',
                'tipo' => 'fuerza',
                'orbes_fuerza' => 110,
                'orbes_calistenia' => 0,
                'orbes_resistencia' => 0,
            ],
        
        ];

        // =========================
        // DORSALES
        // =========================
        $dorsales = [

            [
                'nombre' => 'Jalón al Pecho',
                'descripcion' => 'Tira la barra de polea hacia el pecho',
                'tipo' => 'fuerza',
                'orbes_fuerza' => 120,
                'orbes_calistenia' => 0,
                'orbes_resistencia' => 0,
            ],
        
            [
                'nombre' => 'Jalón al Pecho Agarre Abierto',
                'descripcion' => 'Jalón en polea con agarre ancho',
                'tipo' => 'fuerza',
                'orbes_fuerza' => 122,
                'orbes_calistenia' => 0,
                'orbes_resistencia' => 0,
            ],
        
            [
                'nombre' => 'Jalón al Pecho Agarre Cerrado',
                'descripcion' => 'Jalón en polea con agarre estrecho',
                'tipo' => 'fuerza',
                'orbes_fuerza' => 118,
                'orbes_calistenia' => 0,
                'orbes_resistencia' => 0,
            ],
        
            [
                'nombre' => 'Jalón Unilateral en Polea',
                'descripcion' => 'Jalón de un brazo en polea alta',
                'tipo' => 'fuerza',
                'orbes_fuerza' => 115,
                'orbes_calistenia' => 0,
                'orbes_resistencia' => 0,
            ],
        
            [
                'nombre' => 'Remo con Barra',
                'descripcion' => 'Remo inclinado con barra al abdomen',
                'tipo' => 'fuerza',
                'orbes_fuerza' => 130,
                'orbes_calistenia' => 0,
                'orbes_resistencia' => 0,
            ],
        
            [
                'nombre' => 'Remo Pendlay',
                'descripcion' => 'Remo explosivo desde el suelo',
                'tipo' => 'fuerza',
                'orbes_fuerza' => 140,
                'orbes_calistenia' => 0,
                'orbes_resistencia' => 0,
            ],
        
            [
                'nombre' => 'Remo con Mancuerna',
                'descripcion' => 'Remo unilateral con mancuerna',
                'tipo' => 'fuerza',
                'orbes_fuerza' => 125,
                'orbes_calistenia' => 0,
                'orbes_resistencia' => 0,
            ],
        
            [
                'nombre' => 'Remo en Polea Baja',
                'descripcion' => 'Remo sentado en polea',
                'tipo' => 'fuerza',
                'orbes_fuerza' => 120,
                'orbes_calistenia' => 0,
                'orbes_resistencia' => 0,
            ],
        
            [
                'nombre' => 'Remo en Máquina Guiada',
                'descripcion' => 'Remo en máquina con recorrido fijo',
                'tipo' => 'fuerza',
                'orbes_fuerza' => 118,
                'orbes_calistenia' => 0,
                'orbes_resistencia' => 0,
            ],
        
            [
                'nombre' => 'Remo Hammer Strength',
                'descripcion' => 'Remo en máquina iso-lateral',
                'tipo' => 'fuerza',
                'orbes_fuerza' => 125,
                'orbes_calistenia' => 0,
                'orbes_resistencia' => 0,
            ],
        
            [
                'nombre' => 'Remo T-Bar',
                'descripcion' => 'Remo con barra en T cargada',
                'tipo' => 'fuerza',
                'orbes_fuerza' => 135,
                'orbes_calistenia' => 0,
                'orbes_resistencia' => 0,
            ],
        
            [
                'nombre' => 'Remo T-Bar con Apoyo',
                'descripcion' => 'Remo en T con soporte de pecho',
                'tipo' => 'fuerza',
                'orbes_fuerza' => 132,
                'orbes_calistenia' => 0,
                'orbes_resistencia' => 0,
            ],
        
            [
                'nombre' => 'Pull Over en Polea Alta',
                'descripcion' => 'Extensión de brazos en polea alta',
                'tipo' => 'fuerza',
                'orbes_fuerza' => 108,
                'orbes_calistenia' => 0,
                'orbes_resistencia' => 0,
            ],
        
            [
                'nombre' => 'Pull Over con Mancuerna',
                'descripcion' => 'Extensión con mancuerna sobre banco',
                'tipo' => 'fuerza',
                'orbes_fuerza' => 110,
                'orbes_calistenia' => 0,
                'orbes_resistencia' => 0,
            ],
        
            [
                'nombre' => 'Pull Over en Máquina',
                'descripcion' => 'Pull over guiado en máquina',
                'tipo' => 'fuerza',
                'orbes_fuerza' => 112,
                'orbes_calistenia' => 0,
                'orbes_resistencia' => 0,
            ],
        
            [
                'nombre' => 'Jalón con Barra Recta',
                'descripcion' => 'Jalón en polea con barra recta',
                'tipo' => 'fuerza',
                'orbes_fuerza' => 120,
                'orbes_calistenia' => 0,
                'orbes_resistencia' => 0,
            ],
        
            [
                'nombre' => 'Jalón con Barra V',
                'descripcion' => 'Jalón en polea con agarre en V',
                'tipo' => 'fuerza',
                'orbes_fuerza' => 118,
                'orbes_calistenia' => 0,
                'orbes_resistencia' => 0,
            ],
        
            [
                'nombre' => 'Remo en Polea Alta',
                'descripcion' => 'Remo desde polea alta hacia el torso',
                'tipo' => 'fuerza',
                'orbes_fuerza' => 122,
                'orbes_calistenia' => 0,
                'orbes_resistencia' => 0,
            ],
        
            [
                'nombre' => 'Remo con Cable Unilateral',
                'descripcion' => 'Remo de un brazo en polea baja',
                'tipo' => 'fuerza',
                'orbes_fuerza' => 116,
                'orbes_calistenia' => 0,
                'orbes_resistencia' => 0,
            ],
        
            [
                'nombre' => 'Pullover en Polea de Pie',
                'descripcion' => 'Pullover de pie en polea alta',
                'tipo' => 'fuerza',
                'orbes_fuerza' => 110,
                'orbes_calistenia' => 0,
                'orbes_resistencia' => 0,
            ],
        
            [
                'nombre' => 'Pullover con Barra Recta',
                'descripcion' => 'Pullover con barra en banco',
                'tipo' => 'fuerza',
                'orbes_fuerza' => 112,
                'orbes_calistenia' => 0,
                'orbes_resistencia' => 0,
            ],
        
            [
                'nombre' => 'Remo en Máquina Iso-Lateral',
                'descripcion' => 'Remo independiente en máquina',
                'tipo' => 'fuerza',
                'orbes_fuerza' => 124,
                'orbes_calistenia' => 0,
                'orbes_resistencia' => 0,
            ],
        
            [
                'nombre' => 'Remo Bajo en Máquina',
                'descripcion' => 'Remo sentado en máquina guiada baja',
                'tipo' => 'fuerza',
                'orbes_fuerza' => 119,
                'orbes_calistenia' => 0,
                'orbes_resistencia' => 0,
            ],
        
            [
                'nombre' => 'Jalón en Máquina Convergente',
                'descripcion' => 'Jalón con recorrido convergente',
                'tipo' => 'fuerza',
                'orbes_fuerza' => 121,
                'orbes_calistenia' => 0,
                'orbes_resistencia' => 0,
            ],
        
            [
                'nombre' => 'Remo con Mancuernas Inclinado',
                'descripcion' => 'Remo con pecho apoyado en banco inclinado',
                'tipo' => 'fuerza',
                'orbes_fuerza' => 122,
                'orbes_calistenia' => 0,
                'orbes_resistencia' => 0,
            ],
        
            [
                'nombre' => 'Remo en Smith',
                'descripcion' => 'Remo con barra guiada en máquina Smith',
                'tipo' => 'fuerza',
                'orbes_fuerza' => 128,
                'orbes_calistenia' => 0,
                'orbes_resistencia' => 0,
            ],
        
            [
                'nombre' => 'Jalón Unilateral en Máquina',
                'descripcion' => 'Jalón de un brazo en máquina guiada',
                'tipo' => 'fuerza',
                'orbes_fuerza' => 116,
                'orbes_calistenia' => 0,
                'orbes_resistencia' => 0,
            ],
        
            [
                'nombre' => 'Remo en Cable Alto',
                'descripcion' => 'Remo desde polea alta hacia pecho',
                'tipo' => 'fuerza',
                'orbes_fuerza' => 120,
                'orbes_calistenia' => 0,
                'orbes_resistencia' => 0,
            ],
        
            [
                'nombre' => 'Pullover en Máquina Iso-Lateral',
                'descripcion' => 'Pullover con brazos independientes en máquina',
                'tipo' => 'fuerza',
                'orbes_fuerza' => 114,
                'orbes_calistenia' => 0,
                'orbes_resistencia' => 0,
            ],
        
        ];

        // =========================
        // ESPALDA ALTA
        // =========================
        $espalda_alta = [

            [
                'nombre' => 'Encogimientos con Barra',
                'descripcion' => 'Eleva los hombros sosteniendo una barra',
                'tipo' => 'fuerza',
                'orbes_fuerza' => 120,
                'orbes_calistenia' => 0,
                'orbes_resistencia' => 0,
            ],
        
            [
                'nombre' => 'Encogimientos con Mancuernas',
                'descripcion' => 'Eleva los hombros con mancuernas a los lados',
                'tipo' => 'fuerza',
                'orbes_fuerza' => 118,
                'orbes_calistenia' => 0,
                'orbes_resistencia' => 0,
            ],
        
            [
                'nombre' => 'Encogimientos en Máquina',
                'descripcion' => 'Encogimiento de hombros en máquina guiada',
                'tipo' => 'fuerza',
                'orbes_fuerza' => 122,
                'orbes_calistenia' => 0,
                'orbes_resistencia' => 0,
            ],
        
            [
                'nombre' => 'Encogimientos en Smith',
                'descripcion' => 'Encogimiento de hombros en máquina Smith',
                'tipo' => 'fuerza',
                'orbes_fuerza' => 121,
                'orbes_calistenia' => 0,
                'orbes_resistencia' => 0,
            ],
        
            [
                'nombre' => 'Face Pull en Polea',
                'descripcion' => 'Tira la cuerda hacia la cara con polea alta',
                'tipo' => 'fuerza',
                'orbes_fuerza' => 115,
                'orbes_calistenia' => 0,
                'orbes_resistencia' => 0,
            ],
        
            [
                'nombre' => 'Face Pull con Rotación',
                'descripcion' => 'Face pull añadiendo rotación externa de hombro',
                'tipo' => 'fuerza',
                'orbes_fuerza' => 118,
                'orbes_calistenia' => 0,
                'orbes_resistencia' => 0,
            ],
        
            [
                'nombre' => 'Pec Deck Invertido',
                'descripcion' => 'Aperturas inversas en máquina contractor',
                'tipo' => 'fuerza',
                'orbes_fuerza' => 110,
                'orbes_calistenia' => 0,
                'orbes_resistencia' => 0,
            ],
        
            [
                'nombre' => 'Pájaros con Mancuernas',
                'descripcion' => 'Elevaciones posteriores inclinadas',
                'tipo' => 'fuerza',
                'orbes_fuerza' => 108,
                'orbes_calistenia' => 0,
                'orbes_resistencia' => 0,
            ],
        
            [
                'nombre' => 'Pájaros en Polea',
                'descripcion' => 'Aperturas posteriores con polea',
                'tipo' => 'fuerza',
                'orbes_fuerza' => 112,
                'orbes_calistenia' => 0,
                'orbes_resistencia' => 0,
            ],
        
            [
                'nombre' => 'Remo Alto en Polea',
                'descripcion' => 'Remo dirigido a parte superior de espalda',
                'tipo' => 'fuerza',
                'orbes_fuerza' => 122,
                'orbes_calistenia' => 0,
                'orbes_resistencia' => 0,
            ],
        
            [
                'nombre' => 'Remo Alto en Máquina',
                'descripcion' => 'Remo guiado hacia pecho alto',
                'tipo' => 'fuerza',
                'orbes_fuerza' => 125,
                'orbes_calistenia' => 0,
                'orbes_resistencia' => 0,
            ],
        
            [
                'nombre' => 'Remo Hammer High Row',
                'descripcion' => 'Remo alto en máquina iso-lateral',
                'tipo' => 'fuerza',
                'orbes_fuerza' => 128,
                'orbes_calistenia' => 0,
                'orbes_resistencia' => 0,
            ],
        
            [
                'nombre' => 'Remo con Apoyo en Pecho',
                'descripcion' => 'Remo en banco inclinado apoyado',
                'tipo' => 'fuerza',
                'orbes_fuerza' => 120,
                'orbes_calistenia' => 0,
                'orbes_resistencia' => 0,
            ],
        
            [
                'nombre' => 'Upright Row con Barra',
                'descripcion' => 'Eleva la barra hacia el mentón',
                'tipo' => 'fuerza',
                'orbes_fuerza' => 125,
                'orbes_calistenia' => 0,
                'orbes_resistencia' => 0,
            ],
        
            [
                'nombre' => 'Upright Row con Mancuernas',
                'descripcion' => 'Elevación vertical con mancuernas',
                'tipo' => 'fuerza',
                'orbes_fuerza' => 122,
                'orbes_calistenia' => 0,
                'orbes_resistencia' => 0,
            ],
        
            [
                'nombre' => 'Upright Row en Polea',
                'descripcion' => 'Remo vertical en polea baja',
                'tipo' => 'fuerza',
                'orbes_fuerza' => 120,
                'orbes_calistenia' => 0,
                'orbes_resistencia' => 0,
            ],
        
            [
                'nombre' => 'High Pull con Barra',
                'descripcion' => 'Tirón explosivo hacia el pecho alto',
                'tipo' => 'fuerza',
                'orbes_fuerza' => 135,
                'orbes_calistenia' => 0,
                'orbes_resistencia' => 0,
            ],
        
            [
                'nombre' => 'High Pull en Polea',
                'descripcion' => 'Tirón alto con cable',
                'tipo' => 'fuerza',
                'orbes_fuerza' => 130,
                'orbes_calistenia' => 0,
                'orbes_resistencia' => 0,
            ],
        
            [
                'nombre' => 'Reverse Pec Deck',
                'descripcion' => 'Apertura posterior en máquina',
                'tipo' => 'fuerza',
                'orbes_fuerza' => 110,
                'orbes_calistenia' => 0,
                'orbes_resistencia' => 0,
            ],
        
            [
                'nombre' => 'Remo Invertido en Máquina',
                'descripcion' => 'Remo guiado para espalda alta',
                'tipo' => 'fuerza',
                'orbes_fuerza' => 118,
                'orbes_calistenia' => 0,
                'orbes_resistencia' => 0,
            ],
        
            [
                'nombre' => 'Remo en Polea Alta Abierto',
                'descripcion' => 'Remo alto con agarre amplio',
                'tipo' => 'fuerza',
                'orbes_fuerza' => 122,
                'orbes_calistenia' => 0,
                'orbes_resistencia' => 0,
            ],
        
            [
                'nombre' => 'Remo en Polea Alta Cerrado',
                'descripcion' => 'Remo alto con agarre estrecho',
                'tipo' => 'fuerza',
                'orbes_fuerza' => 120,
                'orbes_calistenia' => 0,
                'orbes_resistencia' => 0,
            ],
        
            [
                'nombre' => 'Elevación Y en Banco Inclinado',
                'descripcion' => 'Eleva brazos en forma de Y con mancuernas',
                'tipo' => 'fuerza',
                'orbes_fuerza' => 108,
                'orbes_calistenia' => 0,
                'orbes_resistencia' => 0,
            ],
        
            [
                'nombre' => 'Elevación T en Banco Inclinado',
                'descripcion' => 'Elevación lateral tipo T para espalda alta',
                'tipo' => 'fuerza',
                'orbes_fuerza' => 108,
                'orbes_calistenia' => 0,
                'orbes_resistencia' => 0,
            ],
        
            [
                'nombre' => 'Elevación W en Banco Inclinado',
                'descripcion' => 'Contracción escapular en forma de W',
                'tipo' => 'fuerza',
                'orbes_fuerza' => 110,
                'orbes_calistenia' => 0,
                'orbes_resistencia' => 0,
            ],
        
            [
                'nombre' => 'Remo al Mentón en Cable',
                'descripcion' => 'Remo vertical controlado en polea',
                'tipo' => 'fuerza',
                'orbes_fuerza' => 118,
                'orbes_calistenia' => 0,
                'orbes_resistencia' => 0,
            ],
        
            [
                'nombre' => 'Face Pull en Polea Alta con Pausa',
                'descripcion' => 'Face pull con pausa isométrica',
                'tipo' => 'fuerza',
                'orbes_fuerza' => 120,
                'orbes_calistenia' => 0,
                'orbes_resistencia' => 0,
            ],
        
            [
                'nombre' => 'Encogimiento Isométrico en Máquina',
                'descripcion' => 'Mantén encogimiento de hombros en máquina',
                'tipo' => 'fuerza',
                'orbes_fuerza' => 125,
                'orbes_calistenia' => 0,
                'orbes_resistencia' => 0,
            ],
        
            [
                'nombre' => 'Remo Alto en Smith',
                'descripcion' => 'Remo guiado hacia parte superior del pecho',
                'tipo' => 'fuerza',
                'orbes_fuerza' => 126,
                'orbes_calistenia' => 0,
                'orbes_resistencia' => 0,
            ],
        
            [
                'nombre' => 'Pull Apart en Polea',
                'descripcion' => 'Apertura de brazos en polea para escápulas',
                'tipo' => 'fuerza',
                'orbes_fuerza' => 105,
                'orbes_calistenia' => 0,
                'orbes_resistencia' => 0,
            ],
        
        ];

        // =========================
        // ABDOMINALES
        // =========================
        $abdominales = [

            [
                'nombre' => 'Crunch en Polea Alta',
                'descripcion' => 'Flexión abdominal con cuerda en polea alta',
                'tipo' => 'fuerza',
                'orbes_fuerza' => 60,
                'orbes_calistenia' => 15,
                'orbes_resistencia' => 0,
            ],
        
            [
                'nombre' => 'Crunch en Máquina',
                'descripcion' => 'Flexión abdominal guiada en máquina',
                'tipo' => 'fuerza',
                'orbes_fuerza' => 62,
                'orbes_calistenia' => 12,
                'orbes_resistencia' => 0,
            ],
        
            [
                'nombre' => 'Crunch en Polea de Rodillas',
                'descripcion' => 'Crunch con cuerda desde posición de rodillas',
                'tipo' => 'fuerza',
                'orbes_fuerza' => 61,
                'orbes_calistenia' => 15,
                'orbes_resistencia' => 0,
            ],
        
            [
                'nombre' => 'Crunch en Banco Declinado con Disco',
                'descripcion' => 'Flexión abdominal con carga en pecho',
                'tipo' => 'fuerza',
                'orbes_fuerza' => 63,
                'orbes_calistenia' => 18,
                'orbes_resistencia' => 0,
            ],
        
            [
                'nombre' => 'Sit-Up en Banco Declinado con Peso',
                'descripcion' => 'Elevación de tronco con disco en pecho',
                'tipo' => 'fuerza',
                'orbes_fuerza' => 64,
                'orbes_calistenia' => 20,
                'orbes_resistencia' => 0,
            ],
        
            [
                'nombre' => 'Crunch en Polea con Barra Recta',
                'descripcion' => 'Crunch abdominal con barra en polea',
                'tipo' => 'fuerza',
                'orbes_fuerza' => 60,
                'orbes_calistenia' => 14,
                'orbes_resistencia' => 0,
            ],
        
            [
                'nombre' => 'Crunch en Máquina Iso-Lateral',
                'descripcion' => 'Trabajo abdominal con brazos independientes',
                'tipo' => 'fuerza',
                'orbes_fuerza' => 62,
                'orbes_calistenia' => 16,
                'orbes_resistencia' => 0,
            ],
        
            [
                'nombre' => 'Crunch en Polea con Pausa',
                'descripcion' => 'Crunch con contracción isométrica',
                'tipo' => 'fuerza',
                'orbes_fuerza' => 61,
                'orbes_calistenia' => 17,
                'orbes_resistencia' => 0,
            ],
        
            [
                'nombre' => 'Woodchopper en Polea Alta',
                'descripcion' => 'Rotación diagonal de arriba hacia abajo',
                'tipo' => 'fuerza',
                'orbes_fuerza' => 58,
                'orbes_calistenia' => 18,
                'orbes_resistencia' => 0,
            ],
        
            [
                'nombre' => 'Woodchopper en Polea Baja',
                'descripcion' => 'Rotación diagonal de abajo hacia arriba',
                'tipo' => 'fuerza',
                'orbes_fuerza' => 58,
                'orbes_calistenia' => 18,
                'orbes_resistencia' => 0,
            ],
        
            [
                'nombre' => 'Rotación de Tronco en Máquina',
                'descripcion' => 'Giro controlado en máquina guiada',
                'tipo' => 'fuerza',
                'orbes_fuerza' => 60,
                'orbes_calistenia' => 20,
                'orbes_resistencia' => 0,
            ],
        
            [
                'nombre' => 'Crunch Inverso en Máquina',
                'descripcion' => 'Elevación de pelvis en máquina abdominal',
                'tipo' => 'fuerza',
                'orbes_fuerza' => 62,
                'orbes_calistenia' => 22,
                'orbes_resistencia' => 0,
            ],
        
            [
                'nombre' => 'Elevación de Rodillas en Máquina',
                'descripcion' => 'Subida de rodillas con resistencia',
                'tipo' => 'fuerza',
                'orbes_fuerza' => 63,
                'orbes_calistenia' => 24,
                'orbes_resistencia' => 0,
            ],
        
            [
                'nombre' => 'Crunch en Polea Unilateral',
                'descripcion' => 'Crunch de un lado en polea',
                'tipo' => 'fuerza',
                'orbes_fuerza' => 59,
                'orbes_calistenia' => 16,
                'orbes_resistencia' => 0,
            ],
        
            [
                'nombre' => 'Crunch en Máquina Pesada',
                'descripcion' => 'Crunch con alta carga en máquina',
                'tipo' => 'fuerza',
                'orbes_fuerza' => 65,
                'orbes_calistenia' => 14,
                'orbes_resistencia' => 0,
            ],
        
            [
                'nombre' => 'Crunch con Mancuerna en Banco',
                'descripcion' => 'Flexión abdominal con mancuerna en pecho',
                'tipo' => 'fuerza',
                'orbes_fuerza' => 61,
                'orbes_calistenia' => 18,
                'orbes_resistencia' => 0,
            ],
        
            [
                'nombre' => 'Crunch en Smith Machine',
                'descripcion' => 'Crunch con barra guiada en Smith',
                'tipo' => 'fuerza',
                'orbes_fuerza' => 63,
                'orbes_calistenia' => 17,
                'orbes_resistencia' => 0,
            ],
        
            [
                'nombre' => 'Pulldown Abdominal en Polea',
                'descripcion' => 'Contracción tipo jalón abdominal',
                'tipo' => 'fuerza',
                'orbes_fuerza' => 60,
                'orbes_calistenia' => 15,
                'orbes_resistencia' => 0,
            ],
        
            [
                'nombre' => 'Crunch en Polea con Cuerda Pesada',
                'descripcion' => 'Crunch con carga alta en cable',
                'tipo' => 'fuerza',
                'orbes_fuerza' => 62,
                'orbes_calistenia' => 16,
                'orbes_resistencia' => 0,
            ],
        
            [
                'nombre' => 'Rotación en Polea con Brazos Extendidos',
                'descripcion' => 'Giro de torso con cable',
                'tipo' => 'fuerza',
                'orbes_fuerza' => 58,
                'orbes_calistenia' => 20,
                'orbes_resistencia' => 0,
            ],
        
            [
                'nombre' => 'Crunch en Máquina Sentado',
                'descripcion' => 'Flexión abdominal sentado en máquina',
                'tipo' => 'fuerza',
                'orbes_fuerza' => 61,
                'orbes_calistenia' => 15,
                'orbes_resistencia' => 0,
            ],
        
            [
                'nombre' => 'Crunch en Polea con Giro',
                'descripcion' => 'Crunch con rotación final del torso',
                'tipo' => 'fuerza',
                'orbes_fuerza' => 60,
                'orbes_calistenia' => 18,
                'orbes_resistencia' => 0,
            ],
        
            [
                'nombre' => 'Crunch en Banco Declinado con Barra',
                'descripcion' => 'Abdominal con carga sostenida',
                'tipo' => 'fuerza',
                'orbes_fuerza' => 64,
                'orbes_calistenia' => 22,
                'orbes_resistencia' => 0,
            ],
        
            [
                'nombre' => 'Crunch en Máquina con Pausa',
                'descripcion' => 'Contracción con pausa isométrica',
                'tipo' => 'fuerza',
                'orbes_fuerza' => 62,
                'orbes_calistenia' => 16,
                'orbes_resistencia' => 0,
            ],
        
            [
                'nombre' => 'Crunch en Polea Baja',
                'descripcion' => 'Trabajo abdominal desde polea inferior',
                'tipo' => 'fuerza',
                'orbes_fuerza' => 59,
                'orbes_calistenia' => 15,
                'orbes_resistencia' => 0,
            ],
        
            [
                'nombre' => 'Crunch en Máquina con Resistencia Alta',
                'descripcion' => 'Abdominal pesado en máquina',
                'tipo' => 'fuerza',
                'orbes_fuerza' => 66,
                'orbes_calistenia' => 14,
                'orbes_resistencia' => 0,
            ],
        
            [
                'nombre' => 'Crunch en Cable con Extensión Total',
                'descripcion' => 'Flexión completa con recorrido largo',
                'tipo' => 'fuerza',
                'orbes_fuerza' => 60,
                'orbes_calistenia' => 17,
                'orbes_resistencia' => 0,
            ],
        
            [
                'nombre' => 'Crunch en Polea con Agarre Neutro',
                'descripcion' => 'Crunch con cuerda y agarre neutro',
                'tipo' => 'fuerza',
                'orbes_fuerza' => 61,
                'orbes_calistenia' => 16,
                'orbes_resistencia' => 0,
            ],
        
            [
                'nombre' => 'Crunch en Máquina con Contracción Lenta',
                'descripcion' => 'Repeticiones lentas controladas en máquina',
                'tipo' => 'fuerza',
                'orbes_fuerza' => 63,
                'orbes_calistenia' => 18,
                'orbes_resistencia' => 0,
            ],
        
        ];

        // =========================
        // OBLICUOS
        // =========================
        $oblicuos = [

            [
                'nombre' => 'Woodchopper en Polea Alta',
                'descripcion' => 'Rotación diagonal de arriba hacia abajo con cable',
                'tipo' => 'fuerza',
                'orbes_fuerza' => 58,
                'orbes_calistenia' => 20,
                'orbes_resistencia' => 0,
            ],
        
            [
                'nombre' => 'Woodchopper en Polea Baja',
                'descripcion' => 'Rotación diagonal de abajo hacia arriba con cable',
                'tipo' => 'fuerza',
                'orbes_fuerza' => 58,
                'orbes_calistenia' => 20,
                'orbes_resistencia' => 0,
            ],
        
            [
                'nombre' => 'Rotación de Tronco en Máquina',
                'descripcion' => 'Giro controlado del torso en máquina guiada',
                'tipo' => 'fuerza',
                'orbes_fuerza' => 60,
                'orbes_calistenia' => 22,
                'orbes_resistencia' => 0,
            ],
        
            [
                'nombre' => 'Rotación en Polea Sentado',
                'descripcion' => 'Giro de torso sentado con cable',
                'tipo' => 'fuerza',
                'orbes_fuerza' => 59,
                'orbes_calistenia' => 20,
                'orbes_resistencia' => 0,
            ],
        
            [
                'nombre' => 'Rotación en Polea de Pie',
                'descripcion' => 'Rotación de tronco de pie con polea',
                'tipo' => 'fuerza',
                'orbes_fuerza' => 60,
                'orbes_calistenia' => 21,
                'orbes_resistencia' => 0,
            ],
        
            [
                'nombre' => 'Crunch Oblicuo en Polea Alta',
                'descripcion' => 'Flexión diagonal del tronco con cable',
                'tipo' => 'fuerza',
                'orbes_fuerza' => 57,
                'orbes_calistenia' => 18,
                'orbes_resistencia' => 0,
            ],
        
            [
                'nombre' => 'Crunch Oblicuo en Máquina',
                'descripcion' => 'Crunch enfocado en oblicuos en máquina guiada',
                'tipo' => 'fuerza',
                'orbes_fuerza' => 60,
                'orbes_calistenia' => 20,
                'orbes_resistencia' => 0,
            ],
        
            [
                'nombre' => 'Crunch Oblicuo en Polea Baja',
                'descripcion' => 'Flexión lateral con cable inferior',
                'tipo' => 'fuerza',
                'orbes_fuerza' => 56,
                'orbes_calistenia' => 18,
                'orbes_resistencia' => 0,
            ],
        
            [
                'nombre' => 'Side Bend con Mancuerna',
                'descripcion' => 'Inclinación lateral con mancuerna',
                'tipo' => 'fuerza',
                'orbes_fuerza' => 62,
                'orbes_calistenia' => 15,
                'orbes_resistencia' => 0,
            ],
        
            [
                'nombre' => 'Side Bend en Polea Baja',
                'descripcion' => 'Flexión lateral con cable bajo',
                'tipo' => 'fuerza',
                'orbes_fuerza' => 60,
                'orbes_calistenia' => 18,
                'orbes_resistencia' => 0,
            ],
        
            [
                'nombre' => 'Side Bend en Máquina',
                'descripcion' => 'Flexión lateral guiada en máquina',
                'tipo' => 'fuerza',
                'orbes_fuerza' => 61,
                'orbes_calistenia' => 19,
                'orbes_resistencia' => 0,
            ],
        
            [
                'nombre' => 'Twist en Polea Alta',
                'descripcion' => 'Giro controlado del torso con cable alto',
                'tipo' => 'fuerza',
                'orbes_fuerza' => 58,
                'orbes_calistenia' => 20,
                'orbes_resistencia' => 0,
            ],
        
            [
                'nombre' => 'Twist en Polea Baja',
                'descripcion' => 'Rotación del tronco desde cable inferior',
                'tipo' => 'fuerza',
                'orbes_fuerza' => 58,
                'orbes_calistenia' => 20,
                'orbes_resistencia' => 0,
            ],
        
            [
                'nombre' => 'Twist con Barra en Polea',
                'descripcion' => 'Rotación del torso con barra recta',
                'tipo' => 'fuerza',
                'orbes_fuerza' => 60,
                'orbes_calistenia' => 21,
                'orbes_resistencia' => 0,
            ],
        
            [
                'nombre' => 'Rotación Isométrica en Polea',
                'descripcion' => 'Mantén tensión rotacional en cable',
                'tipo' => 'fuerza',
                'orbes_fuerza' => 55,
                'orbes_calistenia' => 22,
                'orbes_resistencia' => 0,
            ],
        
            [
                'nombre' => 'Crunch Cruzado en Polea',
                'descripcion' => 'Crunch diagonal hacia rodilla contraria',
                'tipo' => 'fuerza',
                'orbes_fuerza' => 57,
                'orbes_calistenia' => 19,
                'orbes_resistencia' => 0,
            ],
        
            [
                'nombre' => 'Crunch Cruzado en Máquina',
                'descripcion' => 'Crunch oblicuo guiado en máquina',
                'tipo' => 'fuerza',
                'orbes_fuerza' => 60,
                'orbes_calistenia' => 20,
                'orbes_resistencia' => 0,
            ],
        
            [
                'nombre' => 'Side Crunch en Polea',
                'descripcion' => 'Crunch lateral con cable',
                'tipo' => 'fuerza',
                'orbes_fuerza' => 56,
                'orbes_calistenia' => 18,
                'orbes_resistencia' => 0,
            ],
        
            [
                'nombre' => 'Side Crunch en Máquina',
                'descripcion' => 'Crunch lateral en máquina guiada',
                'tipo' => 'fuerza',
                'orbes_fuerza' => 59,
                'orbes_calistenia' => 19,
                'orbes_resistencia' => 0,
            ],
        
            [
                'nombre' => 'Cable Anti-Rotación (Pallof Press)',
                'descripcion' => 'Resiste la rotación del torso con cable',
                'tipo' => 'fuerza',
                'orbes_fuerza' => 55,
                'orbes_calistenia' => 25,
                'orbes_resistencia' => 0,
            ],
        
            [
                'nombre' => 'Pallof Press en Polea Alta',
                'descripcion' => 'Anti-rotación con cable elevado',
                'tipo' => 'fuerza',
                'orbes_fuerza' => 56,
                'orbes_calistenia' => 26,
                'orbes_resistencia' => 0,
            ],
        
            [
                'nombre' => 'Pallof Press en Polea Baja',
                'descripcion' => 'Anti-rotación desde cable inferior',
                'tipo' => 'fuerza',
                'orbes_fuerza' => 56,
                'orbes_calistenia' => 26,
                'orbes_resistencia' => 0,
            ],
        
            [
                'nombre' => 'Crunch Oblicuo con Mancuerna',
                'descripcion' => 'Flexión lateral con carga externa',
                'tipo' => 'fuerza',
                'orbes_fuerza' => 60,
                'orbes_calistenia' => 15,
                'orbes_resistencia' => 0,
            ],
        
            [
                'nombre' => 'Rotación en Máquina Iso-Lateral',
                'descripcion' => 'Rotación independiente en máquina',
                'tipo' => 'fuerza',
                'orbes_fuerza' => 61,
                'orbes_calistenia' => 20,
                'orbes_resistencia' => 0,
            ],
        
            [
                'nombre' => 'Rotación en Cable con Pausa',
                'descripcion' => 'Rotación con contracción isométrica',
                'tipo' => 'fuerza',
                'orbes_fuerza' => 58,
                'orbes_calistenia' => 21,
                'orbes_resistencia' => 0,
            ],
        
            [
                'nombre' => 'Side Twist en Máquina Sentado',
                'descripcion' => 'Giro lateral sentado en máquina',
                'tipo' => 'fuerza',
                'orbes_fuerza' => 60,
                'orbes_calistenia' => 19,
                'orbes_resistencia' => 0,
            ],
        
            [
                'nombre' => 'Crunch Lateral en Polea Alta',
                'descripcion' => 'Flexión diagonal del tronco con cable alto',
                'tipo' => 'fuerza',
                'orbes_fuerza' => 57,
                'orbes_calistenia' => 18,
                'orbes_resistencia' => 0,
            ],
        
            [
                'nombre' => 'Rotación Explosiva en Polea',
                'descripcion' => 'Giro rápido controlado con cable',
                'tipo' => 'fuerza',
                'orbes_fuerza' => 62,
                'orbes_calistenia' => 22,
                'orbes_resistencia' => 0,
            ],
        
            [
                'nombre' => 'Side Bend con Barra',
                'descripcion' => 'Inclinación lateral con barra en hombros',
                'tipo' => 'fuerza',
                'orbes_fuerza' => 63,
                'orbes_calistenia' => 16,
                'orbes_resistencia' => 0,
            ],
        
            [
                'nombre' => 'Rotación en Cable con Agarre Neutro',
                'descripcion' => 'Giro del torso con cuerda neutra',
                'tipo' => 'fuerza',
                'orbes_fuerza' => 58,
                'orbes_calistenia' => 20,
                'orbes_resistencia' => 0,
            ],
        
        ];

        // =========================
        // QUADRICEPS
        // =========================
        $quadriceps = [

            // =====================
            // SENTADILLAS (1-10)
            // =====================
        
            [
                'nombre' => 'Sentadilla con Barra',
                'descripcion' => 'Sentadilla libre con barra en espalda',
                'tipo' => 'fuerza',
                'orbes_fuerza' => 160,
                'orbes_calistenia' => 0,
                'orbes_resistencia' => 0,
            ],
            [
                'nombre' => 'Sentadilla Frontal',
                'descripcion' => 'Sentadilla con barra en la parte frontal',
                'tipo' => 'fuerza',
                'orbes_fuerza' => 162,
                'orbes_calistenia' => 0,
                'orbes_resistencia' => 0,
            ],
            [
                'nombre' => 'Sentadilla Safety Bar',
                'descripcion' => 'Sentadilla con barra de seguridad',
                'tipo' => 'fuerza',
                'orbes_fuerza' => 158,
                'orbes_calistenia' => 0,
                'orbes_resistencia' => 0,
            ],
            [
                'nombre' => 'Sentadilla en Smith Machine',
                'descripcion' => 'Sentadilla guiada en máquina Smith',
                'tipo' => 'fuerza',
                'orbes_fuerza' => 150,
                'orbes_calistenia' => 0,
                'orbes_resistencia' => 0,
            ],
            [
                'nombre' => 'Sentadilla Frontal en Smith',
                'descripcion' => 'Sentadilla frontal guiada',
                'tipo' => 'fuerza',
                'orbes_fuerza' => 152,
                'orbes_calistenia' => 0,
                'orbes_resistencia' => 0,
            ],
            [
                'nombre' => 'Hack Squat Machine',
                'descripcion' => 'Sentadilla en máquina hack',
                'tipo' => 'fuerza',
                'orbes_fuerza' => 158,
                'orbes_calistenia' => 0,
                'orbes_resistencia' => 0,
            ],
            [
                'nombre' => 'Hack Squat Inverso',
                'descripcion' => 'Hack squat con énfasis en cuádriceps',
                'tipo' => 'fuerza',
                'orbes_fuerza' => 160,
                'orbes_calistenia' => 0,
                'orbes_resistencia' => 0,
            ],
            [
                'nombre' => 'Sentadilla Pendulum',
                'descripcion' => 'Sentadilla en máquina pendulum',
                'tipo' => 'fuerza',
                'orbes_fuerza' => 163,
                'orbes_calistenia' => 0,
                'orbes_resistencia' => 0,
            ],
            [
                'nombre' => 'Sentadilla Belt Squat',
                'descripcion' => 'Sentadilla con carga en cinturón',
                'tipo' => 'fuerza',
                'orbes_fuerza' => 159,
                'orbes_calistenia' => 0,
                'orbes_resistencia' => 0,
            ],
            [
                'nombre' => 'Sentadilla en Máquina V-Squat',
                'descripcion' => 'Sentadilla en máquina guiada tipo V',
                'tipo' => 'fuerza',
                'orbes_fuerza' => 161,
                'orbes_calistenia' => 0,
                'orbes_resistencia' => 0,
            ],
        
            // =====================
            // PRENSA (11-20)
            // =====================
        
            [
                'nombre' => 'Prensa de Piernas 45°',
                'descripcion' => 'Empuje en prensa inclinada',
                'tipo' => 'fuerza',
                'orbes_fuerza' => 155,
                'orbes_calistenia' => 0,
                'orbes_resistencia' => 0,
            ],
            [
                'nombre' => 'Prensa Horizontal',
                'descripcion' => 'Empuje en prensa horizontal',
                'tipo' => 'fuerza',
                'orbes_fuerza' => 152,
                'orbes_calistenia' => 0,
                'orbes_resistencia' => 0,
            ],
            [
                'nombre' => 'Prensa Vertical',
                'descripcion' => 'Empuje vertical en máquina de piernas',
                'tipo' => 'fuerza',
                'orbes_fuerza' => 156,
                'orbes_calistenia' => 0,
                'orbes_resistencia' => 0,
            ],
            [
                'nombre' => 'Prensa de Piernas Unilateral',
                'descripcion' => 'Prensa con una pierna',
                'tipo' => 'fuerza',
                'orbes_fuerza' => 150,
                'orbes_calistenia' => 0,
                'orbes_resistencia' => 0,
            ],
            [
                'nombre' => 'Prensa con Pies Bajos',
                'descripcion' => 'Prensa enfocada en cuádriceps',
                'tipo' => 'fuerza',
                'orbes_fuerza' => 156,
                'orbes_calistenia' => 0,
                'orbes_resistencia' => 0,
            ],
            [
                'nombre' => 'Prensa con Pies Altos',
                'descripcion' => 'Variación de prensa con pies altos',
                'tipo' => 'fuerza',
                'orbes_fuerza' => 154,
                'orbes_calistenia' => 0,
                'orbes_resistencia' => 0,
            ],
            [
                'nombre' => 'Prensa con Pies Cerrados',
                'descripcion' => 'Prensa con enfoque en cuádriceps interno',
                'tipo' => 'fuerza',
                'orbes_fuerza' => 153,
                'orbes_calistenia' => 0,
                'orbes_resistencia' => 0,
            ],
            [
                'nombre' => 'Prensa con Pies Abiertos',
                'descripcion' => 'Prensa con base amplia',
                'tipo' => 'fuerza',
                'orbes_fuerza' => 153,
                'orbes_calistenia' => 0,
                'orbes_resistencia' => 0,
            ],
            [
                'nombre' => 'Prensa Plate Loaded',
                'descripcion' => 'Prensa con discos',
                'tipo' => 'fuerza',
                'orbes_fuerza' => 158,
                'orbes_calistenia' => 0,
                'orbes_resistencia' => 0,
            ],
            [
                'nombre' => 'Prensa Hack Machine',
                'descripcion' => 'Prensa tipo hack guiada',
                'tipo' => 'fuerza',
                'orbes_fuerza' => 157,
                'orbes_calistenia' => 0,
                'orbes_resistencia' => 0,
            ],
        
            // =====================
            // EXTENSIÓN + ACCESORIOS (21-35)
            // =====================
        
            [
                'nombre' => 'Extensión de Piernas en Máquina',
                'descripcion' => 'Extensión de rodilla guiada',
                'tipo' => 'fuerza',
                'orbes_fuerza' => 140,
                'orbes_calistenia' => 0,
                'orbes_resistencia' => 0,
            ],
            [
                'nombre' => 'Extensión Unilateral de Piernas',
                'descripcion' => 'Extensión de una pierna',
                'tipo' => 'fuerza',
                'orbes_fuerza' => 138,
                'orbes_calistenia' => 0,
                'orbes_resistencia' => 0,
            ],
            [
                'nombre' => 'Extensión Iso-Lateral de Piernas',
                'descripcion' => 'Extensión independiente por pierna',
                'tipo' => 'fuerza',
                'orbes_fuerza' => 142,
                'orbes_calistenia' => 0,
                'orbes_resistencia' => 0,
            ],
            [
                'nombre' => 'Extensión de Piernas en Polea',
                'descripcion' => 'Extensión con cable',
                'tipo' => 'fuerza',
                'orbes_fuerza' => 135,
                'orbes_calistenia' => 0,
                'orbes_resistencia' => 0,
            ],
            [
                'nombre' => 'Extensión de Piernas en Polea Unilateral',
                'descripcion' => 'Extensión con cable a una pierna',
                'tipo' => 'fuerza',
                'orbes_fuerza' => 134,
                'orbes_calistenia' => 0,
                'orbes_resistencia' => 0,
            ],
            [
                'nombre' => 'Extensión de Piernas en Máquina Sentado',
                'descripcion' => 'Extensión estándar sentado',
                'tipo' => 'fuerza',
                'orbes_fuerza' => 140,
                'orbes_calistenia' => 0,
                'orbes_resistencia' => 0,
            ],
            [
                'nombre' => 'Extensión de Piernas en Máquina Inclinada',
                'descripcion' => 'Extensión en máquina inclinada',
                'tipo' => 'fuerza',
                'orbes_fuerza' => 141,
                'orbes_calistenia' => 0,
                'orbes_resistencia' => 0,
            ],
            [
                'nombre' => 'Extensión de Piernas en Máquina Iso',
                'descripcion' => 'Extensión con brazos independientes',
                'tipo' => 'fuerza',
                'orbes_fuerza' => 142,
                'orbes_calistenia' => 0,
                'orbes_resistencia' => 0,
            ],
            [
                'nombre' => 'Extensión de Piernas en Máquina Guiada',
                'descripcion' => 'Extensión estándar guiada',
                'tipo' => 'fuerza',
                'orbes_fuerza' => 140,
                'orbes_calistenia' => 0,
                'orbes_resistencia' => 0,
            ],
            [
                'nombre' => 'Extensión de Piernas en Máquina Pesada',
                'descripcion' => 'Extensión con carga alta',
                'tipo' => 'fuerza',
                'orbes_fuerza' => 145,
                'orbes_calistenia' => 0,
                'orbes_resistencia' => 0,
            ],
        
            [
                'nombre' => 'Sissy Squat Machine',
                'descripcion' => 'Sentadilla en máquina sissy',
                'tipo' => 'fuerza',
                'orbes_fuerza' => 150,
                'orbes_calistenia' => 0,
                'orbes_resistencia' => 0,
            ],
        
            [
                'nombre' => 'Split Squat en Smith Machine',
                'descripcion' => 'Zancada fija en máquina Smith',
                'tipo' => 'fuerza',
                'orbes_fuerza' => 145,
                'orbes_calistenia' => 0,
                'orbes_resistencia' => 0,
            ],
            [
                'nombre' => 'Split Squat con Mancuernas',
                'descripcion' => 'Zancada con mancuernas',
                'tipo' => 'fuerza',
                'orbes_fuerza' => 142,
                'orbes_calistenia' => 0,
                'orbes_resistencia' => 0,
            ],
            [
                'nombre' => 'Split Squat con Barra',
                'descripcion' => 'Zancada con barra libre',
                'tipo' => 'fuerza',
                'orbes_fuerza' => 146,
                'orbes_calistenia' => 0,
                'orbes_resistencia' => 0,
            ],
            [
                'nombre' => 'Bulgarian Split Squat con Mancuernas',
                'descripcion' => 'Zancada búlgara con mancuernas',
                'tipo' => 'fuerza',
                'orbes_fuerza' => 144,
                'orbes_calistenia' => 0,
                'orbes_resistencia' => 0,
            ],
        
        ];

        // =========================
        // FEMORALES
        // =========================
        $isquiotibiales = [

            // =====================
            // BISAGRA DE CADERA / DEADLIFT (1-8)
            // =====================
        
            [
                'nombre' => 'Peso Muerto Convencional',
                'descripcion' => 'Peso muerto con barra desde el suelo',
                'tipo' => 'fuerza',
                'orbes_fuerza' => 165,
                'orbes_calistenia' => 0,
                'orbes_resistencia' => 0,
            ],
            [
                'nombre' => 'Peso Muerto Rumano con Barra',
                'descripcion' => 'Bisagra de cadera con barra y piernas semirrígidas',
                'tipo' => 'fuerza',
                'orbes_fuerza' => 162,
                'orbes_calistenia' => 0,
                'orbes_resistencia' => 0,
            ],
            [
                'nombre' => 'Peso Muerto Rumano con Mancuernas',
                'descripcion' => 'Bisagra de cadera con mancuernas',
                'tipo' => 'fuerza',
                'orbes_fuerza' => 160,
                'orbes_calistenia' => 0,
                'orbes_resistencia' => 0,
            ],
            [
                'nombre' => 'Peso Muerto Piernas Rígidas',
                'descripcion' => 'Deadlift con énfasis en estiramiento femoral',
                'tipo' => 'fuerza',
                'orbes_fuerza' => 160,
                'orbes_calistenia' => 0,
                'orbes_resistencia' => 0,
            ],
            [
                'nombre' => 'Peso Muerto Sumo',
                'descripcion' => 'Peso muerto con stance ancho',
                'tipo' => 'fuerza',
                'orbes_fuerza' => 163,
                'orbes_calistenia' => 0,
                'orbes_resistencia' => 0,
            ],
            [
                'nombre' => 'Buenos Días con Barra',
                'descripcion' => 'Bisagra de cadera con barra en espalda',
                'tipo' => 'fuerza',
                'orbes_fuerza' => 158,
                'orbes_calistenia' => 0,
                'orbes_resistencia' => 0,
            ],
            [
                'nombre' => 'Buenos Días en Smith Machine',
                'descripcion' => 'Bisagra guiada en máquina Smith',
                'tipo' => 'fuerza',
                'orbes_fuerza' => 156,
                'orbes_calistenia' => 0,
                'orbes_resistencia' => 0,
            ],
            [
                'nombre' => 'Peso Muerto Rumano en Smith',
                'descripcion' => 'RDL guiado en máquina Smith',
                'tipo' => 'fuerza',
                'orbes_fuerza' => 158,
                'orbes_calistenia' => 0,
                'orbes_resistencia' => 0,
            ],
        
            // =====================
            // CURL DE FEMORAL (9-20)
            // =====================
        
            [
                'nombre' => 'Curl Femoral Sentado',
                'descripcion' => 'Curl en máquina sentado',
                'tipo' => 'fuerza',
                'orbes_fuerza' => 145,
                'orbes_calistenia' => 0,
                'orbes_resistencia' => 0,
            ],
            [
                'nombre' => 'Curl Femoral Tumbado',
                'descripcion' => 'Curl en máquina acostado',
                'tipo' => 'fuerza',
                'orbes_fuerza' => 147,
                'orbes_calistenia' => 0,
                'orbes_resistencia' => 0,
            ],
            [
                'nombre' => 'Curl Femoral de Pie',
                'descripcion' => 'Curl unilateral en máquina',
                'tipo' => 'fuerza',
                'orbes_fuerza' => 143,
                'orbes_calistenia' => 0,
                'orbes_resistencia' => 0,
            ],
            [
                'nombre' => 'Curl Femoral Sentado Unilateral',
                'descripcion' => 'Curl sentado pierna por pierna',
                'tipo' => 'fuerza',
                'orbes_fuerza' => 142,
                'orbes_calistenia' => 0,
                'orbes_resistencia' => 0,
            ],
            [
                'nombre' => 'Curl Femoral Tumbado Unilateral',
                'descripcion' => 'Curl acostado pierna por pierna',
                'tipo' => 'fuerza',
                'orbes_fuerza' => 144,
                'orbes_calistenia' => 0,
                'orbes_resistencia' => 0,
            ],
            [
                'nombre' => 'Curl Femoral Iso-Lateral',
                'descripcion' => 'Curl independiente por pierna',
                'tipo' => 'fuerza',
                'orbes_fuerza' => 146,
                'orbes_calistenia' => 0,
                'orbes_resistencia' => 0,
            ],
            [
                'nombre' => 'Curl Femoral Plate Loaded',
                'descripcion' => 'Curl con carga de discos',
                'tipo' => 'fuerza',
                'orbes_fuerza' => 150,
                'orbes_calistenia' => 0,
                'orbes_resistencia' => 0,
            ],
            [
                'nombre' => 'Curl Femoral Selectorizado Sentado',
                'descripcion' => 'Curl sentado con pila de peso',
                'tipo' => 'fuerza',
                'orbes_fuerza' => 145,
                'orbes_calistenia' => 0,
                'orbes_resistencia' => 0,
            ],
            [
                'nombre' => 'Curl Femoral Selectorizado Tumbado',
                'descripcion' => 'Curl acostado con pila de peso',
                'tipo' => 'fuerza',
                'orbes_fuerza' => 147,
                'orbes_calistenia' => 0,
                'orbes_resistencia' => 0,
            ],
            [
                'nombre' => 'Curl Femoral en Máquina Prone',
                'descripcion' => 'Curl tumbado en máquina guiada',
                'tipo' => 'fuerza',
                'orbes_fuerza' => 146,
                'orbes_calistenia' => 0,
                'orbes_resistencia' => 0,
            ],
            [
                'nombre' => 'Curl Femoral en Máquina Kneeling',
                'descripcion' => 'Curl en máquina con apoyo de rodilla',
                'tipo' => 'fuerza',
                'orbes_fuerza' => 144,
                'orbes_calistenia' => 0,
                'orbes_resistencia' => 0,
            ],
        
            // =====================
            // CABLES Y POLEAS (21-25)
            // =====================
        
            [
                'nombre' => 'Curl Femoral en Polea Baja',
                'descripcion' => 'Curl con cable y tobillera',
                'tipo' => 'fuerza',
                'orbes_fuerza' => 140,
                'orbes_calistenia' => 0,
                'orbes_resistencia' => 0,
            ],
            [
                'nombre' => 'Curl Femoral en Polea de Pie',
                'descripcion' => 'Curl unilateral con cable',
                'tipo' => 'fuerza',
                'orbes_fuerza' => 138,
                'orbes_calistenia' => 0,
                'orbes_resistencia' => 0,
            ],
            [
                'nombre' => 'Pull Through en Polea',
                'descripcion' => 'Extensión de cadera con cable',
                'tipo' => 'fuerza',
                'orbes_fuerza' => 150,
                'orbes_calistenia' => 0,
                'orbes_resistencia' => 0,
            ],
            [
                'nombre' => 'Curl Femoral en Polea Sentado',
                'descripcion' => 'Curl con cable en posición sentada',
                'tipo' => 'fuerza',
                'orbes_fuerza' => 139,
                'orbes_calistenia' => 0,
                'orbes_resistencia' => 0,
            ],
            [
                'nombre' => 'Curl Femoral en Polea Acostado',
                'descripcion' => 'Curl con cable en banco plano',
                'tipo' => 'fuerza',
                'orbes_fuerza' => 141,
                'orbes_calistenia' => 0,
                'orbes_resistencia' => 0,
            ],
        
            // =====================
            // EXTENSIÓN CADERA / HIP HINGE (26-35)
            // =====================
        
            [
                'nombre' => 'Extensión de Espalda 45°',
                'descripcion' => 'Back extension en banco inclinado',
                'tipo' => 'fuerza',
                'orbes_fuerza' => 148,
                'orbes_calistenia' => 0,
                'orbes_resistencia' => 0,
            ],
            [
                'nombre' => 'Extensión de Espalda en Máquina',
                'descripcion' => 'Back extension en máquina guiada',
                'tipo' => 'fuerza',
                'orbes_fuerza' => 150,
                'orbes_calistenia' => 0,
                'orbes_resistencia' => 0,
            ],
            [
                'nombre' => 'Reverse Hyperextension',
                'descripcion' => 'Extensión de cadera en máquina reverse hyper',
                'tipo' => 'fuerza',
                'orbes_fuerza' => 155,
                'orbes_calistenia' => 0,
                'orbes_resistencia' => 0,
            ],
            [
                'nombre' => 'Hip Hinge Machine',
                'descripcion' => 'Máquina guiada de bisagra de cadera',
                'tipo' => 'fuerza',
                'orbes_fuerza' => 153,
                'orbes_calistenia' => 0,
                'orbes_resistencia' => 0,
            ],
            [
                'nombre' => 'Leverage Deadlift Machine',
                'descripcion' => 'Peso muerto en máquina de palanca',
                'tipo' => 'fuerza',
                'orbes_fuerza' => 160,
                'orbes_calistenia' => 0,
                'orbes_resistencia' => 0,
            ],
            [
                'nombre' => 'Extensión de Espalda en Máquina Horizontal',
                'descripcion' => 'Extensión lumbar en máquina horizontal',
                'tipo' => 'fuerza',
                'orbes_fuerza' => 147,
                'orbes_calistenia' => 0,
                'orbes_resistencia' => 0,
            ],
            [
                'nombre' => 'Extensión de Espalda Plate Loaded',
                'descripcion' => 'Back extension con carga de discos',
                'tipo' => 'fuerza',
                'orbes_fuerza' => 150,
                'orbes_calistenia' => 0,
                'orbes_resistencia' => 0,
            ],
            [
                'nombre' => 'Curl Femoral en Máquina Iso Convergente',
                'descripcion' => 'Curl con trayectoria convergente',
                'tipo' => 'fuerza',
                'orbes_fuerza' => 146,
                'orbes_calistenia' => 0,
                'orbes_resistencia' => 0,
            ],
            [
                'nombre' => 'Curl Femoral de Alta Carga en Máquina',
                'descripcion' => 'Curl femoral con carga máxima en máquina',
                'tipo' => 'fuerza',
                'orbes_fuerza' => 150,
                'orbes_calistenia' => 0,
                'orbes_resistencia' => 0,
            ],
            [
                'nombre' => 'Extensión de Cadera en Máquina Guiada',
                'descripcion' => 'Extensión de cadera en máquina específica',
                'tipo' => 'fuerza',
                'orbes_fuerza' => 152,
                'orbes_calistenia' => 0,
                'orbes_resistencia' => 0,
            ],
        
        ];

        // =========================
        // ADDCUTORES / ABDUCTORES
        // =========================

        $aductores_abductores = [

            // =====================
            // ABDUCTORES (1-18)
            // =====================
        
            [
                'nombre' => 'Abducción de Cadera en Máquina Sentado',
                'descripcion' => 'Apertura de piernas en máquina de abductores',
                'tipo' => 'fuerza',
                'orbes_fuerza' => 130,
                'orbes_calistenia' => 0,
                'orbes_resistencia' => 0,
            ],
            [
                'nombre' => 'Abducción de Cadera en Máquina de Pie',
                'descripcion' => 'Abducción unilateral en máquina',
                'tipo' => 'fuerza',
                'orbes_fuerza' => 128,
                'orbes_calistenia' => 0,
                'orbes_resistencia' => 0,
            ],
            [
                'nombre' => 'Abducción de Cadera en Polea Baja',
                'descripcion' => 'Apertura lateral con cable',
                'tipo' => 'fuerza',
                'orbes_fuerza' => 125,
                'orbes_calistenia' => 0,
                'orbes_resistencia' => 0,
            ],
            [
                'nombre' => 'Abducción de Cadera en Polea de Pie',
                'descripcion' => 'Abducción unilateral con cable',
                'tipo' => 'fuerza',
                'orbes_fuerza' => 124,
                'orbes_calistenia' => 0,
                'orbes_resistencia' => 0,
            ],
            [
                'nombre' => 'Abducción de Cadera en Máquina Plate Loaded',
                'descripcion' => 'Abducción con carga de discos',
                'tipo' => 'fuerza',
                'orbes_fuerza' => 135,
                'orbes_calistenia' => 0,
                'orbes_resistencia' => 0,
            ],
            [
                'nombre' => 'Abducción de Cadera Iso-Lateral',
                'descripcion' => 'Trabajo independiente por pierna',
                'tipo' => 'fuerza',
                'orbes_fuerza' => 132,
                'orbes_calistenia' => 0,
                'orbes_resistencia' => 0,
            ],
            [
                'nombre' => 'Abducción de Cadera en Máquina Convergente',
                'descripcion' => 'Abducción con trayectoria guiada',
                'tipo' => 'fuerza',
                'orbes_fuerza' => 130,
                'orbes_calistenia' => 0,
                'orbes_resistencia' => 0,
            ],
            [
                'nombre' => 'Abducción de Cadera en Máquina Horizontal',
                'descripcion' => 'Abducción sentado horizontal',
                'tipo' => 'fuerza',
                'orbes_fuerza' => 128,
                'orbes_calistenia' => 0,
                'orbes_resistencia' => 0,
            ],
            [
                'nombre' => 'Abducción de Cadera en Máquina Selectorizada',
                'descripcion' => 'Abducción con pila de peso',
                'tipo' => 'fuerza',
                'orbes_fuerza' => 130,
                'orbes_calistenia' => 0,
                'orbes_resistencia' => 0,
            ],
            [
                'nombre' => 'Abducción de Cadera en Máquina Inclinada',
                'descripcion' => 'Abducción en ángulo inclinado',
                'tipo' => 'fuerza',
                'orbes_fuerza' => 129,
                'orbes_calistenia' => 0,
                'orbes_resistencia' => 0,
            ],
            [
                'nombre' => 'Abducción de Cadera en Máquina Standing',
                'descripcion' => 'Abducción de pie guiada',
                'tipo' => 'fuerza',
                'orbes_fuerza' => 127,
                'orbes_calistenia' => 0,
                'orbes_resistencia' => 0,
            ],
            [
                'nombre' => 'Abducción de Cadera en Máquina Dual',
                'descripcion' => 'Abducción bilateral independiente',
                'tipo' => 'fuerza',
                'orbes_fuerza' => 131,
                'orbes_calistenia' => 0,
                'orbes_resistencia' => 0,
            ],
            [
                'nombre' => 'Abducción de Cadera en Máquina Multiángulo',
                'descripcion' => 'Abducción con ángulo variable',
                'tipo' => 'fuerza',
                'orbes_fuerza' => 132,
                'orbes_calistenia' => 0,
                'orbes_resistencia' => 0,
            ],
            [
                'nombre' => 'Abducción de Cadera en Polea Sentado',
                'descripcion' => 'Abducción sentado con cable',
                'tipo' => 'fuerza',
                'orbes_fuerza' => 123,
                'orbes_calistenia' => 0,
                'orbes_resistencia' => 0,
            ],
            [
                'nombre' => 'Abducción de Cadera en Polea Cruzada',
                'descripcion' => 'Abducción cruzando el cuerpo con cable',
                'tipo' => 'fuerza',
                'orbes_fuerza' => 124,
                'orbes_calistenia' => 0,
                'orbes_resistencia' => 0,
            ],
            [
                'nombre' => 'Abducción de Cadera en Máquina Glute Focus',
                'descripcion' => 'Abducción con énfasis en glúteo medio',
                'tipo' => 'fuerza',
                'orbes_fuerza' => 133,
                'orbes_calistenia' => 0,
                'orbes_resistencia' => 0,
            ],
            [
                'nombre' => 'Abducción de Cadera en Máquina Heavy Stack',
                'descripcion' => 'Abducción con carga máxima',
                'tipo' => 'fuerza',
                'orbes_fuerza' => 136,
                'orbes_calistenia' => 0,
                'orbes_resistencia' => 0,
            ],
            [
                'nombre' => 'Abducción de Cadera en Máquina Guiada',
                'descripcion' => 'Abducción estándar en máquina',
                'tipo' => 'fuerza',
                'orbes_fuerza' => 130,
                'orbes_calistenia' => 0,
                'orbes_resistencia' => 0,
            ],
        
            // =====================
            // ADDUCTORES (19-35)
            // =====================
        
            [
                'nombre' => 'Aducción de Cadera en Máquina Sentado',
                'descripcion' => 'Cierre de piernas en máquina de aductores',
                'tipo' => 'fuerza',
                'orbes_fuerza' => 132,
                'orbes_calistenia' => 0,
                'orbes_resistencia' => 0,
            ],
            [
                'nombre' => 'Aducción de Cadera en Máquina de Pie',
                'descripcion' => 'Aducción unilateral en máquina',
                'tipo' => 'fuerza',
                'orbes_fuerza' => 130,
                'orbes_calistenia' => 0,
                'orbes_resistencia' => 0,
            ],
            [
                'nombre' => 'Aducción de Cadera en Polea Baja',
                'descripcion' => 'Aducción con cable a una pierna',
                'tipo' => 'fuerza',
                'orbes_fuerza' => 125,
                'orbes_calistenia' => 0,
                'orbes_resistencia' => 0,
            ],
            [
                'nombre' => 'Aducción de Cadera en Polea Cruzada',
                'descripcion' => 'Cruce de pierna con cable',
                'tipo' => 'fuerza',
                'orbes_fuerza' => 124,
                'orbes_calistenia' => 0,
                'orbes_resistencia' => 0,
            ],
            [
                'nombre' => 'Aducción de Cadera Iso-Lateral',
                'descripcion' => 'Trabajo independiente por pierna',
                'tipo' => 'fuerza',
                'orbes_fuerza' => 131,
                'orbes_calistenia' => 0,
                'orbes_resistencia' => 0,
            ],
            [
                'nombre' => 'Aducción de Cadera en Máquina Plate Loaded',
                'descripcion' => 'Aducción con discos',
                'tipo' => 'fuerza',
                'orbes_fuerza' => 135,
                'orbes_calistenia' => 0,
                'orbes_resistencia' => 0,
            ],
            [
                'nombre' => 'Aducción de Cadera en Máquina Convergente',
                'descripcion' => 'Movimiento guiado de cierre de piernas',
                'tipo' => 'fuerza',
                'orbes_fuerza' => 132,
                'orbes_calistenia' => 0,
                'orbes_resistencia' => 0,
            ],
            [
                'nombre' => 'Aducción de Cadera en Máquina Horizontal',
                'descripcion' => 'Aducción en posición sentada',
                'tipo' => 'fuerza',
                'orbes_fuerza' => 128,
                'orbes_calistenia' => 0,
                'orbes_resistencia' => 0,
            ],
            [
                'nombre' => 'Aducción de Cadera en Máquina Selectorizada',
                'descripcion' => 'Aducción con pila de peso',
                'tipo' => 'fuerza',
                'orbes_fuerza' => 130,
                'orbes_calistenia' => 0,
                'orbes_resistencia' => 0,
            ],
            [
                'nombre' => 'Aducción de Cadera en Máquina Inclinada',
                'descripcion' => 'Aducción en ángulo inclinado',
                'tipo' => 'fuerza',
                'orbes_fuerza' => 129,
                'orbes_calistenia' => 0,
                'orbes_resistencia' => 0,
            ],
            [
                'nombre' => 'Aducción de Cadera en Máquina Standing',
                'descripcion' => 'Aducción de pie guiada',
                'tipo' => 'fuerza',
                'orbes_fuerza' => 127,
                'orbes_calistenia' => 0,
                'orbes_resistencia' => 0,
            ],
            [
                'nombre' => 'Aducción de Cadera en Máquina Dual',
                'descripcion' => 'Aducción bilateral independiente',
                'tipo' => 'fuerza',
                'orbes_fuerza' => 131,
                'orbes_calistenia' => 0,
                'orbes_resistencia' => 0,
            ],
            [
                'nombre' => 'Aducción de Cadera en Máquina Heavy Stack',
                'descripcion' => 'Aducción con carga alta',
                'tipo' => 'fuerza',
                'orbes_fuerza' => 136,
                'orbes_calistenia' => 0,
                'orbes_resistencia' => 0,
            ],
            [
                'nombre' => 'Aducción de Cadera en Polea Sentado',
                'descripcion' => 'Aducción sentado con cable',
                'tipo' => 'fuerza',
                'orbes_fuerza' => 123,
                'orbes_calistenia' => 0,
                'orbes_resistencia' => 0,
            ],
            [
                'nombre' => 'Aducción de Cadera en Máquina Guiada',
                'descripcion' => 'Aducción estándar en máquina',
                'tipo' => 'fuerza',
                'orbes_fuerza' => 130,
                'orbes_calistenia' => 0,
                'orbes_resistencia' => 0,
            ],
        
        ];

        // =========================
        // GLUTEOS
        // =========================
        $gluteos = [

            // =====================
            // HIP THRUST / BRIDGE (1-12)
            // =====================
        
            [
                'nombre' => 'Hip Thrust con Barra',
                'descripcion' => 'Empuje de cadera con barra en banco',
                'tipo' => 'fuerza',
                'orbes_fuerza' => 170,
                'orbes_calistenia' => 0,
                'orbes_resistencia' => 0,
            ],
            [
                'nombre' => 'Hip Thrust en Máquina',
                'descripcion' => 'Empuje de cadera en máquina guiada',
                'tipo' => 'fuerza',
                'orbes_fuerza' => 172,
                'orbes_calistenia' => 0,
                'orbes_resistencia' => 0,
            ],
            [
                'nombre' => 'Hip Thrust en Smith Machine',
                'descripcion' => 'Empuje de cadera guiado en Smith',
                'tipo' => 'fuerza',
                'orbes_fuerza' => 168,
                'orbes_calistenia' => 0,
                'orbes_resistencia' => 0,
            ],
            [
                'nombre' => 'Hip Thrust Plate Loaded',
                'descripcion' => 'Empuje de cadera con discos',
                'tipo' => 'fuerza',
                'orbes_fuerza' => 175,
                'orbes_calistenia' => 0,
                'orbes_resistencia' => 0,
            ],
            [
                'nombre' => 'Hip Thrust Unilateral con Barra',
                'descripcion' => 'Empuje de cadera a una pierna',
                'tipo' => 'fuerza',
                'orbes_fuerza' => 170,
                'orbes_calistenia' => 0,
                'orbes_resistencia' => 0,
            ],
            [
                'nombre' => 'Hip Thrust Unilateral en Máquina',
                'descripcion' => 'Empuje unilateral guiado',
                'tipo' => 'fuerza',
                'orbes_fuerza' => 172,
                'orbes_calistenia' => 0,
                'orbes_resistencia' => 0,
            ],
            [
                'nombre' => 'Glute Bridge con Barra',
                'descripcion' => 'Puente de glúteos con barra en suelo',
                'tipo' => 'fuerza',
                'orbes_fuerza' => 165,
                'orbes_calistenia' => 0,
                'orbes_resistencia' => 0,
            ],
            [
                'nombre' => 'Glute Bridge en Máquina',
                'descripcion' => 'Puente de glúteos en máquina guiada',
                'tipo' => 'fuerza',
                'orbes_fuerza' => 168,
                'orbes_calistenia' => 0,
                'orbes_resistencia' => 0,
            ],
            [
                'nombre' => 'Glute Bridge en Smith Machine',
                'descripcion' => 'Puente guiado en Smith',
                'tipo' => 'fuerza',
                'orbes_fuerza' => 166,
                'orbes_calistenia' => 0,
                'orbes_resistencia' => 0,
            ],
            [
                'nombre' => 'Glute Bridge Plate Loaded',
                'descripcion' => 'Puente con carga de discos',
                'tipo' => 'fuerza',
                'orbes_fuerza' => 170,
                'orbes_calistenia' => 0,
                'orbes_resistencia' => 0,
            ],
            [
                'nombre' => 'Hip Thrust en Máquina Horizontal',
                'descripcion' => 'Empuje en máquina horizontal',
                'tipo' => 'fuerza',
                'orbes_fuerza' => 171,
                'orbes_calistenia' => 0,
                'orbes_resistencia' => 0,
            ],
            [
                'nombre' => 'Hip Thrust en Máquina Convergente',
                'descripcion' => 'Empuje con trayectoria convergente',
                'tipo' => 'fuerza',
                'orbes_fuerza' => 172,
                'orbes_calistenia' => 0,
                'orbes_resistencia' => 0,
            ],
        
            // =====================
            // PATADA DE GLÚTEO (13-28)
            // =====================
        
            [
                'nombre' => 'Patada de Glúteo en Máquina',
                'descripcion' => 'Extensión posterior guiada',
                'tipo' => 'fuerza',
                'orbes_fuerza' => 150,
                'orbes_calistenia' => 0,
                'orbes_resistencia' => 0,
            ],
            [
                'nombre' => 'Patada de Glúteo en Polea Baja',
                'descripcion' => 'Kickback con cable',
                'tipo' => 'fuerza',
                'orbes_fuerza' => 145,
                'orbes_calistenia' => 0,
                'orbes_resistencia' => 0,
            ],
            [
                'nombre' => 'Patada de Glúteo en Polea Unilateral',
                'descripcion' => 'Kickback una pierna',
                'tipo' => 'fuerza',
                'orbes_fuerza' => 146,
                'orbes_calistenia' => 0,
                'orbes_resistencia' => 0,
            ],
            [
                'nombre' => 'Patada de Glúteo en Máquina Plate Loaded',
                'descripcion' => 'Kickback con discos',
                'tipo' => 'fuerza',
                'orbes_fuerza' => 152,
                'orbes_calistenia' => 0,
                'orbes_resistencia' => 0,
            ],
            [
                'nombre' => 'Patada de Glúteo en Máquina de Pie',
                'descripcion' => 'Extensión de cadera guiada de pie',
                'tipo' => 'fuerza',
                'orbes_fuerza' => 148,
                'orbes_calistenia' => 0,
                'orbes_resistencia' => 0,
            ],
            [
                'nombre' => 'Patada de Glúteo en Máquina Sentado',
                'descripcion' => 'Kickback sentado en máquina',
                'tipo' => 'fuerza',
                'orbes_fuerza' => 149,
                'orbes_calistenia' => 0,
                'orbes_resistencia' => 0,
            ],
            [
                'nombre' => 'Extensión de Glúteo en Polea',
                'descripcion' => 'Extensión posterior con cable',
                'tipo' => 'fuerza',
                'orbes_fuerza' => 144,
                'orbes_calistenia' => 0,
                'orbes_resistencia' => 0,
            ],
            [
                'nombre' => 'Extensión de Glúteo en Polea Cruzada',
                'descripcion' => 'Kickback cruzado',
                'tipo' => 'fuerza',
                'orbes_fuerza' => 143,
                'orbes_calistenia' => 0,
                'orbes_resistencia' => 0,
            ],
            [
                'nombre' => 'Extensión de Glúteo en Máquina Iso-Lateral',
                'descripcion' => 'Trabajo independiente por pierna',
                'tipo' => 'fuerza',
                'orbes_fuerza' => 151,
                'orbes_calistenia' => 0,
                'orbes_resistencia' => 0,
            ],
            [
                'nombre' => 'Glute Kickback en Máquina Guiada',
                'descripcion' => 'Kickback estándar en máquina',
                'tipo' => 'fuerza',
                'orbes_fuerza' => 150,
                'orbes_calistenia' => 0,
                'orbes_resistencia' => 0,
            ],
            [
                'nombre' => 'Glute Kickback en Máquina Convergente',
                'descripcion' => 'Kickback con trayectoria guiada',
                'tipo' => 'fuerza',
                'orbes_fuerza' => 152,
                'orbes_calistenia' => 0,
                'orbes_resistencia' => 0,
            ],
            [
                'nombre' => 'Glute Kickback en Máquina Horizontal',
                'descripcion' => 'Kickback en máquina horizontal',
                'tipo' => 'fuerza',
                'orbes_fuerza' => 150,
                'orbes_calistenia' => 0,
                'orbes_resistencia' => 0,
            ],
            [
                'nombre' => 'Glute Kickback en Máquina Dual',
                'descripcion' => 'Kickback bilateral independiente',
                'tipo' => 'fuerza',
                'orbes_fuerza' => 151,
                'orbes_calistenia' => 0,
                'orbes_resistencia' => 0,
            ],
            [
                'nombre' => 'Glute Kickback en Máquina Heavy Stack',
                'descripcion' => 'Kickback con carga alta',
                'tipo' => 'fuerza',
                'orbes_fuerza' => 154,
                'orbes_calistenia' => 0,
                'orbes_resistencia' => 0,
            ],
            [
                'nombre' => 'Glute Kickback en Máquina Selectorizada',
                'descripcion' => 'Kickback con pila de peso',
                'tipo' => 'fuerza',
                'orbes_fuerza' => 148,
                'orbes_calistenia' => 0,
                'orbes_resistencia' => 0,
            ],
        ];

        // =========================
        // GEMELOS
        // =========================
        $gemelos = [

            // =====================
            // DE PIE (1-12)
            // =====================
        
            [
                'nombre' => 'Elevación de Gemelos en Máquina de Pie',
                'descripcion' => 'Elevación bilateral en máquina guiada',
                'tipo' => 'fuerza',
                'orbes_fuerza' => 135,
                'orbes_calistenia' => 0,
                'orbes_resistencia' => 0,
            ],
            [
                'nombre' => 'Elevación de Gemelos en Smith Machine',
                'descripcion' => 'Gemelos con barra en Smith de pie',
                'tipo' => 'fuerza',
                'orbes_fuerza' => 140,
                'orbes_calistenia' => 0,
                'orbes_resistencia' => 0,
            ],
            [
                'nombre' => 'Elevación de Gemelos con Barra Libre',
                'descripcion' => 'Gemelos de pie con barra',
                'tipo' => 'fuerza',
                'orbes_fuerza' => 142,
                'orbes_calistenia' => 0,
                'orbes_resistencia' => 0,
            ],
            [
                'nombre' => 'Elevación de Gemelos con Mancuernas',
                'descripcion' => 'Gemelos de pie con mancuernas',
                'tipo' => 'fuerza',
                'orbes_fuerza' => 138,
                'orbes_calistenia' => 0,
                'orbes_resistencia' => 0,
            ],
            [
                'nombre' => 'Elevación de Gemelos en Prensa de Piernas',
                'descripcion' => 'Gemelos en máquina de prensa',
                'tipo' => 'fuerza',
                'orbes_fuerza' => 145,
                'orbes_calistenia' => 0,
                'orbes_resistencia' => 0,
            ],
            [
                'nombre' => 'Elevación de Gemelos en Prensa Horizontal',
                'descripcion' => 'Gemelos en prensa horizontal',
                'tipo' => 'fuerza',
                'orbes_fuerza' => 144,
                'orbes_calistenia' => 0,
                'orbes_resistencia' => 0,
            ],
            [
                'nombre' => 'Elevación de Gemelos en Prensa 45°',
                'descripcion' => 'Gemelos en prensa inclinada',
                'tipo' => 'fuerza',
                'orbes_fuerza' => 146,
                'orbes_calistenia' => 0,
                'orbes_resistencia' => 0,
            ],
            [
                'nombre' => 'Elevación de Gemelos en Máquina Plate Loaded',
                'descripcion' => 'Gemelos con discos',
                'tipo' => 'fuerza',
                'orbes_fuerza' => 148,
                'orbes_calistenia' => 0,
                'orbes_resistencia' => 0,
            ],
            [
                'nombre' => 'Elevación de Gemelos en Máquina Selectorizada',
                'descripcion' => 'Gemelos con pila de peso',
                'tipo' => 'fuerza',
                'orbes_fuerza' => 135,
                'orbes_calistenia' => 0,
                'orbes_resistencia' => 0,
            ],
            [
                'nombre' => 'Elevación de Gemelos en Multipower',
                'descripcion' => 'Gemelos guiados en barra fija',
                'tipo' => 'fuerza',
                'orbes_fuerza' => 140,
                'orbes_calistenia' => 0,
                'orbes_resistencia' => 0,
            ],
            [
                'nombre' => 'Elevación de Gemelos en Hack Squat Machine',
                'descripcion' => 'Gemelos en máquina hack',
                'tipo' => 'fuerza',
                'orbes_fuerza' => 147,
                'orbes_calistenia' => 0,
                'orbes_resistencia' => 0,
            ],
            [
                'nombre' => 'Elevación de Gemelos en V-Squat Machine',
                'descripcion' => 'Gemelos en máquina V-squat',
                'tipo' => 'fuerza',
                'orbes_fuerza' => 146,
                'orbes_calistenia' => 0,
                'orbes_resistencia' => 0,
            ],
        
            // =====================
            // SENTADO (13-22)
            // =====================
        
            [
                'nombre' => 'Elevación de Gemelos Sentado en Máquina',
                'descripcion' => 'Gemelos sentado guiado',
                'tipo' => 'fuerza',
                'orbes_fuerza' => 132,
                'orbes_calistenia' => 0,
                'orbes_resistencia' => 0,
            ],
            [
                'nombre' => 'Elevación de Gemelos Sentado con Barra',
                'descripcion' => 'Gemelos sentado con barra en piernas',
                'tipo' => 'fuerza',
                'orbes_fuerza' => 138,
                'orbes_calistenia' => 0,
                'orbes_resistencia' => 0,
            ],
            [
                'nombre' => 'Elevación de Gemelos Sentado con Mancuernas',
                'descripcion' => 'Gemelos sentado con mancuernas',
                'tipo' => 'fuerza',
                'orbes_fuerza' => 135,
                'orbes_calistenia' => 0,
                'orbes_resistencia' => 0,
            ],
            [
                'nombre' => 'Elevación de Gemelos Sentado Plate Loaded',
                'descripcion' => 'Gemelos sentado con discos',
                'tipo' => 'fuerza',
                'orbes_fuerza' => 140,
                'orbes_calistenia' => 0,
                'orbes_resistencia' => 0,
            ],
            [
                'nombre' => 'Elevación de Gemelos Sentado Iso-Lateral',
                'descripcion' => 'Trabajo independiente por pierna',
                'tipo' => 'fuerza',
                'orbes_fuerza' => 136,
                'orbes_calistenia' => 0,
                'orbes_resistencia' => 0,
            ],
            [
                'nombre' => 'Elevación de Gemelos Sentado en Máquina Horizontal',
                'descripcion' => 'Gemelos sentado en máquina horizontal',
                'tipo' => 'fuerza',
                'orbes_fuerza' => 133,
                'orbes_calistenia' => 0,
                'orbes_resistencia' => 0,
            ],
            [
                'nombre' => 'Elevación de Gemelos Sentado en Máquina Convergente',
                'descripcion' => 'Gemelos con trayectoria guiada',
                'tipo' => 'fuerza',
                'orbes_fuerza' => 134,
                'orbes_calistenia' => 0,
                'orbes_resistencia' => 0,
            ],
            [
                'nombre' => 'Elevación de Gemelos Sentado Selectorizado',
                'descripcion' => 'Gemelos con pila de peso',
                'tipo' => 'fuerza',
                'orbes_fuerza' => 132,
                'orbes_calistenia' => 0,
                'orbes_resistencia' => 0,
            ],
            [
                'nombre' => 'Elevación de Gemelos Sentado en Smith',
                'descripcion' => 'Gemelos sentado guiado',
                'tipo' => 'fuerza',
                'orbes_fuerza' => 137,
                'orbes_calistenia' => 0,
                'orbes_resistencia' => 0,
            ],
            [
                'nombre' => 'Elevación de Gemelos Sentado en Banco',
                'descripcion' => 'Gemelos sentado libre con carga',
                'tipo' => 'fuerza',
                'orbes_fuerza' => 136,
                'orbes_calistenia' => 0,
                'orbes_resistencia' => 0,
            ],
        
            // =====================
            // AISLADOS / VARIANTES (23-35)
            // =====================
        
            [
                'nombre' => 'Gemelos en Prensa con Punta de Pie',
                'descripcion' => 'Extensión de tobillo en prensa',
                'tipo' => 'fuerza',
                'orbes_fuerza' => 145,
                'orbes_calistenia' => 0,
                'orbes_resistencia' => 0,
            ],
            [
                'nombre' => 'Gemelos en Prensa Unilateral',
                'descripcion' => 'Gemelo una pierna en prensa',
                'tipo' => 'fuerza',
                'orbes_fuerza' => 142,
                'orbes_calistenia' => 0,
                'orbes_resistencia' => 0,
            ],
            [
                'nombre' => 'Gemelos en Hack Machine',
                'descripcion' => 'Gemelos en máquina hack squat',
                'tipo' => 'fuerza',
                'orbes_fuerza' => 146,
                'orbes_calistenia' => 0,
                'orbes_resistencia' => 0,
            ],
            [
                'nombre' => 'Gemelos en V-Squat Machine',
                'descripcion' => 'Gemelos en máquina V-squat',
                'tipo' => 'fuerza',
                'orbes_fuerza' => 145,
                'orbes_calistenia' => 0,
                'orbes_resistencia' => 0,
            ],
            [
                'nombre' => 'Gemelos en Máquina Inclinado',
                'descripcion' => 'Gemelos en ángulo inclinado',
                'tipo' => 'fuerza',
                'orbes_fuerza' => 138,
                'orbes_calistenia' => 0,
                'orbes_resistencia' => 0,
            ],
            [
                'nombre' => 'Gemelos en Máquina Vertical',
                'descripcion' => 'Gemelos en posición vertical guiada',
                'tipo' => 'fuerza',
                'orbes_fuerza' => 139,
                'orbes_calistenia' => 0,
                'orbes_resistencia' => 0,
            ],
            [
                'nombre' => 'Gemelos en Máquina Dual',
                'descripcion' => 'Gemelos independientes por pierna',
                'tipo' => 'fuerza',
                'orbes_fuerza' => 140,
                'orbes_calistenia' => 0,
                'orbes_resistencia' => 0,
            ],
            [
                'nombre' => 'Gemelos en Máquina Heavy Stack',
                'descripcion' => 'Gemelos con carga alta',
                'tipo' => 'fuerza',
                'orbes_fuerza' => 148,
                'orbes_calistenia' => 0,
                'orbes_resistencia' => 0,
            ],
            [
                'nombre' => 'Gemelos en Máquina Selectorizada Vertical',
                'descripcion' => 'Gemelos con pila vertical',
                'tipo' => 'fuerza',
                'orbes_fuerza' => 135,
                'orbes_calistenia' => 0,
                'orbes_resistencia' => 0,
            ],
            [
                'nombre' => 'Gemelos en Smith con Elevación Parcial',
                'descripcion' => 'Gemelos guiados en Smith',
                'tipo' => 'fuerza',
                'orbes_fuerza' => 140,
                'orbes_calistenia' => 0,
                'orbes_resistencia' => 0,
            ],
            [
                'nombre' => 'Gemelos en Plataforma Elevada',
                'descripcion' => 'Elevación en plataforma con carga',
                'tipo' => 'fuerza',
                'orbes_fuerza' => 138,
                'orbes_calistenia' => 0,
                'orbes_resistencia' => 0,
            ],
            [
                'nombre' => 'Gemelos en Máquina Iso-Lateral',
                'descripcion' => 'Trabajo independiente por pierna',
                'tipo' => 'fuerza',
                'orbes_fuerza' => 141,
                'orbes_calistenia' => 0,
                'orbes_resistencia' => 0,
            ],
            [
                'nombre' => 'Gemelos en Máquina Plate Loaded Unilateral',
                'descripcion' => 'Gemelos con discos una pierna',
                'tipo' => 'fuerza',
                'orbes_fuerza' => 143,
                'orbes_calistenia' => 0,
                'orbes_resistencia' => 0,
            ],
        
        ];

        foreach (array_merge($pecho, $triceps, $hombros) as $ejercicio) {
            Ejercicio::create($ejercicio);
        }
    }
}
