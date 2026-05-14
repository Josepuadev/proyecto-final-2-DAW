<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CalisteniaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {

        // =========================
        // FLEXIONES
        // =========================
        $flexiones = [

            // =====================
            // MUY FÁCILES (10-30)
            // =====================
        
            [
                'nombre' => 'Flexiones en Pared',
                'descripcion' => 'Flexión vertical contra pared',
                'tipo' => 'calistenia',
                'orbes_calistenia' => 15,
                'orbes_fuerza' => 5,
                'orbes_resistencia' => 0,
            ],
            [
                'nombre' => 'Flexiones Inclinadas Altas',
                'descripcion' => 'Manos en banco alto',
                'tipo' => 'calistenia',
                'orbes_calistenia' => 20,
                'orbes_fuerza' => 8,
                'orbes_resistencia' => 0,
            ],
            [
                'nombre' => 'Flexiones Inclinadas',
                'descripcion' => 'Manos en banco medio',
                'tipo' => 'calistenia',
                'orbes_calistenia' => 25,
                'orbes_fuerza' => 10,
                'orbes_resistencia' => 0,
            ],
        
            // =====================
            // BÁSICAS (40-55)
            // =====================
        
            [
                'nombre' => 'Flexiones con Rodillas',
                'descripcion' => 'Flexión apoyando rodillas',
                'tipo' => 'calistenia',
                'orbes_calistenia' => 45,
                'orbes_fuerza' => 15,
                'orbes_resistencia' => 0,
            ],
            [
                'nombre' => 'Flexiones Básicas',
                'descripcion' => 'Flexión estándar en suelo',
                'tipo' => 'calistenia',
                'orbes_calistenia' => 50,
                'orbes_fuerza' => 20,
                'orbes_resistencia' => 0,
            ],
            [
                'nombre' => 'Flexiones Amplias',
                'descripcion' => 'Manos más abiertas',
                'tipo' => 'calistenia',
                'orbes_calistenia' => 55,
                'orbes_fuerza' => 22,
                'orbes_resistencia' => 0,
            ],
            [
                'nombre' => 'Flexiones con Pausa',
                'descripcion' => 'Pausa en el punto bajo',
                'tipo' => 'calistenia',
                'orbes_calistenia' => 52,
                'orbes_fuerza' => 21,
                'orbes_resistencia' => 0,
            ],
        
            // =====================
            // INTERMEDIAS (60-75)
            // =====================
        
            [
                'nombre' => 'Flexiones Declinadas',
                'descripcion' => 'Pies elevados en banco',
                'tipo' => 'calistenia',
                'orbes_calistenia' => 65,
                'orbes_fuerza' => 30,
                'orbes_resistencia' => 0,
            ],
            [
                'nombre' => 'Flexiones Close Grip',
                'descripcion' => 'Manos juntas',
                'tipo' => 'calistenia',
                'orbes_calistenia' => 70,
                'orbes_fuerza' => 35,
                'orbes_resistencia' => 0,
            ],
            [
                'nombre' => 'Flexiones Lentas (Tempo)',
                'descripcion' => 'Control excéntrico lento',
                'tipo' => 'calistenia',
                'orbes_calistenia' => 72,
                'orbes_fuerza' => 38,
                'orbes_resistencia' => 0,
            ],
            [
                'nombre' => 'Flexiones Spiderman',
                'descripcion' => 'Rodilla al codo',
                'tipo' => 'calistenia',
                'orbes_calistenia' => 75,
                'orbes_fuerza' => 40,
                'orbes_resistencia' => 0,
            ],
            [
                'nombre' => 'Flexiones Espartanas',
                'descripcion' => 'Flexiones cambiando las palmas',
                'tipo' => 'calistenia',
                'orbes_calistenia' => 85,
                'orbes_fuerza' => 40,
                'orbes_resistencia' => 0,
            ],
            [
                'nombre' => 'Flexiones Diamante',
                'descripcion' => 'Flexiones cambiando las palmas',
                'tipo' => 'calistenia',
                'orbes_calistenia' => 90,
                'orbes_fuerza' => 40,
                'orbes_resistencia' => 0,
            ],
        
            // =====================
            // AVANZADAS (80-95)
            // =====================
        
            [
                'nombre' => 'Flexiones Archer',
                'descripcion' => 'Trabajo unilateral asistido',
                'tipo' => 'calistenia',
                'orbes_calistenia' => 90,
                'orbes_fuerza' => 55,
                'orbes_resistencia' => 0,
            ],
            [
                'nombre' => 'Flexiones Explosivas',
                'descripcion' => 'Empuje con despegue de manos',
                'tipo' => 'calistenia',
                'orbes_calistenia' => 88,
                'orbes_fuerza' => 60,
                'orbes_resistencia' => 0,
            ],
            [
                'nombre' => 'Flexiones Diamante Explosivo',
                'descripcion' => 'Flexión diamante con potencia',
                'tipo' => 'calistenia',
                'orbes_calistenia' => 91,
                'orbes_fuerza' => 58,
                'orbes_resistencia' => 0,
            ],
            [
                'nombre' => 'Flexiones Clap',
                'descripcion' => 'Flexión con aplauso',
                'tipo' => 'calistenia',
                'orbes_calistenia' => 92,
                'orbes_fuerza' => 65,
                'orbes_resistencia' => 0,
            ],
            [
                'nombre' => 'Flexiones Deficit',
                'descripcion' => 'Mayor rango de movimiento',
                'tipo' => 'calistenia',
                'orbes_calistenia' => 85,
                'orbes_fuerza' => 50,
                'orbes_resistencia' => 0,
            ],
        
            // =====================
            // ÉLITE (95-100)
            // =====================
        
            [
                'nombre' => 'Pseudo Planche Push Up',
                'descripcion' => 'Flexión inclinada tipo planche',
                'tipo' => 'calistenia',
                'orbes_calistenia' => 100,
                'orbes_fuerza' => 70,
                'orbes_resistencia' => 0,
            ],
            [
                'nombre' => 'Planche Lean Push Up',
                'descripcion' => 'Flexión con inclinación extrema',
                'tipo' => 'calistenia',
                'orbes_calistenia' => 100,
                'orbes_fuerza' => 75,
                'orbes_resistencia' => 0,
            ],
            [
                'nombre' => 'Typewriter Push Up',
                'descripcion' => 'Desplazamiento lateral en flexión',
                'tipo' => 'calistenia',
                'orbes_calistenia' => 98,
                'orbes_fuerza' => 68,
                'orbes_resistencia' => 0,
            ],
            [
                'nombre' => 'Archer Push Up Avanzado',
                'descripcion' => 'Archer con mayor rango y control',
                'tipo' => 'calistenia',
                'orbes_calistenia' => 95,
                'orbes_fuerza' => 60,
                'orbes_resistencia' => 0,
            ],
            [
                'nombre' => 'Diamond Decline Push Up',
                'descripcion' => 'Diamante con pies elevados',
                'tipo' => 'calistenia',
                'orbes_calistenia' => 97,
                'orbes_fuerza' => 65,
                'orbes_resistencia' => 0,
            ],
        
        ];

        // =========================
        // FLEXIONES HOMBRO
        // =========================
        $flexiones_hombro = [

            // =====================
            // INICIALES (10–30)
            // =====================
        
            [
                'nombre' => 'Pike Push Up en Banco Alto',
                'descripcion' => 'Flexión en V con manos elevadas',
                'tipo' => 'calistenia',
                'orbes_calistenia' => 15,
                'orbes_fuerza' => 5,
                'orbes_resistencia' => 0,
            ],
            [
                'nombre' => 'Pike Push Up Básico',
                'descripcion' => 'Posición en V estándar',
                'tipo' => 'calistenia',
                'orbes_calistenia' => 25,
                'orbes_fuerza' => 10,
                'orbes_resistencia' => 0,
            ],
            [
                'nombre' => 'Pike Push Up con Pies Elevados Bajos',
                'descripcion' => 'Pies en superficie baja',
                'tipo' => 'calistenia',
                'orbes_calistenia' => 30,
                'orbes_fuerza' => 12,
                'orbes_resistencia' => 0,
            ],
        
            // =====================
            // BÁSICOS (40–55)
            // =====================
        
            [
                'nombre' => 'Pike Push Up Estándar',
                'descripcion' => 'Flexión en V completa',
                'tipo' => 'calistenia',
                'orbes_calistenia' => 45,
                'orbes_fuerza' => 18,
                'orbes_resistencia' => 0,
            ],
            [
                'nombre' => 'Pike Push Up con Apoyo en Rodillas Parcial',
                'descripcion' => 'Versión asistida de hombro',
                'tipo' => 'calistenia',
                'orbes_calistenia' => 40,
                'orbes_fuerza' => 15,
                'orbes_resistencia' => 0,
            ],
            [
                'nombre' => 'Pike Push Up con Manos Estrechas',
                'descripcion' => 'Mayor énfasis en deltoide anterior',
                'tipo' => 'calistenia',
                'orbes_calistenia' => 50,
                'orbes_fuerza' => 20,
                'orbes_resistencia' => 0,
            ],
            [
                'nombre' => 'Pike Push Up con Manos Amplias',
                'descripcion' => 'Mayor estabilidad lateral',
                'tipo' => 'calistenia',
                'orbes_calistenia' => 48,
                'orbes_fuerza' => 18,
                'orbes_resistencia' => 0,
            ],
            [
                'nombre' => 'Pike Push Up con Desplazamiento Corto',
                'descripcion' => 'Movimiento hacia adelante en cada repetición',
                'tipo' => 'calistenia',
                'orbes_calistenia' => 52,
                'orbes_fuerza' => 22,
                'orbes_resistencia' => 0,
            ],
        
            // =====================
            // INTERMEDIOS (60–75)
            // =====================
        
            [
                'nombre' => 'Pike Push Up Elevado Medio',
                'descripcion' => 'Pies en banco medio',
                'tipo' => 'calistenia',
                'orbes_calistenia' => 65,
                'orbes_fuerza' => 30,
                'orbes_resistencia' => 0,
            ],
            [
                'nombre' => 'Wall Pike Push Up',
                'descripcion' => 'Flexión en V contra pared',
                'tipo' => 'calistenia',
                'orbes_calistenia' => 70,
                'orbes_fuerza' => 35,
                'orbes_resistencia' => 0,
            ],
            [
                'nombre' => 'Pike Push Up con Elevación Alterna de Pierna',
                'descripcion' => 'Una pierna elevada para inestabilidad',
                'tipo' => 'calistenia',
                'orbes_calistenia' => 72,
                'orbes_fuerza' => 38,
                'orbes_resistencia' => 0,
            ],
            [
                'nombre' => 'Pike Push Up con Rotación de Hombro',
                'descripcion' => 'Rotación ligera durante el empuje',
                'tipo' => 'calistenia',
                'orbes_calistenia' => 75,
                'orbes_fuerza' => 40,
                'orbes_resistencia' => 0,
            ],
            [
                'nombre' => 'Pseudo Handstand Inclinado',
                'descripcion' => 'Inclinación hacia vertical',
                'tipo' => 'calistenia',
                'orbes_calistenia' => 74,
                'orbes_fuerza' => 42,
                'orbes_resistencia' => 0,
            ],
        
            // =====================
            // AVANZADOS (80–95)
            // =====================
        
            [
                'nombre' => 'Handstand Push Up Parcial en Pared',
                'descripcion' => 'Rango parcial en vertical',
                'tipo' => 'calistenia',
                'orbes_calistenia' => 85,
                'orbes_fuerza' => 55,
                'orbes_resistencia' => 0,
            ],
            [
                'nombre' => 'Wall Handstand Push Up Completo',
                'descripcion' => 'Flexión vertical completa',
                'tipo' => 'calistenia',
                'orbes_calistenia' => 95,
                'orbes_fuerza' => 65,
                'orbes_resistencia' => 0,
            ],
            [
                'nombre' => 'Wall Handstand Push Up con Separación de Manos',
                'descripcion' => 'Mayor dificultad de estabilidad',
                'tipo' => 'calistenia',
                'orbes_calistenia' => 90,
                'orbes_fuerza' => 60,
                'orbes_resistencia' => 0,
            ],
            [
                'nombre' => 'Handstand Push Up sin Apoyo Total de Pared',
                'descripcion' => 'Control parcial libre',
                'tipo' => 'calistenia',
                'orbes_calistenia' => 92,
                'orbes_fuerza' => 62,
                'orbes_resistencia' => 0,
            ],
            [
                'nombre' => 'Pike Push Up Explosivo Avanzado',
                'descripcion' => 'Empuje potente desde V profunda',
                'tipo' => 'calistenia',
                'orbes_calistenia' => 88,
                'orbes_fuerza' => 60,
                'orbes_resistencia' => 0,
            ],
        
            // =====================
            // ÉLITE (96–100)
            // =====================
        
            [
                'nombre' => 'Strict Handstand Push Up',
                'descripcion' => 'Flexión vertical sin impulso',
                'tipo' => 'calistenia',
                'orbes_calistenia' => 100,
                'orbes_fuerza' => 75,
                'orbes_resistencia' => 0,
            ],
            [
                'nombre' => 'Handstand Push Up Profundo',
                'descripcion' => 'Mayor rango en vertical',
                'tipo' => 'calistenia',
                'orbes_calistenia' => 100,
                'orbes_fuerza' => 78,
                'orbes_resistencia' => 0,
            ],
            [
                'nombre' => 'Handstand Push Up Control Total',
                'descripcion' => 'Ejecución estricta perfecta',
                'tipo' => 'calistenia',
                'orbes_calistenia' => 100,
                'orbes_fuerza' => 80,
                'orbes_resistencia' => 0,
            ],
            [
                'nombre' => 'Wall Handstand Push Up Estricto Avanzado',
                'descripcion' => 'Versión más exigente en pared',
                'tipo' => 'calistenia',
                'orbes_calistenia' => 100,
                'orbes_fuerza' => 82,
                'orbes_resistencia' => 0,
            ],
            [
                'nombre' => 'Handstand Push Up Freestanding Asistido',
                'descripcion' => 'Control sin pared con asistencia mínima',
                'tipo' => 'calistenia',
                'orbes_calistenia' => 100,
                'orbes_fuerza' => 85,
                'orbes_resistencia' => 0,
            ],
        
        ];

        // =========================
        // FONDOS
        // =========================
        $fondos_triceps = [

            // =====================
            // INICIO (80–90)
            // =====================
        
            [
                'nombre' => 'Fondos en Banco Asistidos',
                'descripcion' => 'Fondos con apoyo de pies',
                'tipo' => 'calistenia',
                'orbes_calistenia' => 30,
                'orbes_fuerza' => 40,
                'orbes_resistencia' => 0,
            ],
            [
                'nombre' => 'Fondos en Banco',
                'descripcion' => 'Versión estándar en banco',
                'tipo' => 'calistenia',
                'orbes_calistenia' => 35,
                'orbes_fuerza' => 45,
                'orbes_resistencia' => 0,
            ],
            [
                'nombre' => 'Fondos en Banco Estrechos',
                'descripcion' => 'Mayor énfasis en tríceps',
                'tipo' => 'calistenia',
                'orbes_calistenia' => 38,
                'orbes_fuerza' => 48,
                'orbes_resistencia' => 0,
            ],
        
            // =====================
            // BÁSICOS (90–100)
            // =====================
        
            [
                'nombre' => 'Fondos en Paralelas Asistidos',
                'descripcion' => 'Asistencia parcial',
                'tipo' => 'calistenia',
                'orbes_calistenia' => 92,
                'orbes_fuerza' => 55,
                'orbes_resistencia' => 0,
            ],
            [
                'nombre' => 'Fondos en Paralelas',
                'descripcion' => 'Dips estándar',
                'tipo' => 'calistenia',
                'orbes_calistenia' => 95,
                'orbes_fuerza' => 60,
                'orbes_resistencia' => 0,
            ],
            [
                'nombre' => 'Fondos en Paralelas Estrechos',
                'descripcion' => 'Mayor carga en tríceps',
                'tipo' => 'calistenia',
                'orbes_calistenia' => 98,
                'orbes_fuerza' => 62,
                'orbes_resistencia' => 0,
            ],
        
            // =====================
            // INTERMEDIOS (100–110)
            // =====================
        
            [
                'nombre' => 'Fondos en Paralelas Profundos',
                'descripcion' => 'Mayor rango de movimiento',
                'tipo' => 'calistenia',
                'orbes_calistenia' => 102,
                'orbes_fuerza' => 65,
                'orbes_resistencia' => 0,
            ],
            [
                'nombre' => 'Fondos en Paralelas Controlados',
                'descripcion' => 'Sin impulso',
                'tipo' => 'calistenia',
                'orbes_calistenia' => 105,
                'orbes_fuerza' => 68,
                'orbes_resistencia' => 0,
            ],
            [
                'nombre' => 'Fondos en Paralelas Inclinación Vertical',
                'descripcion' => 'Mayor estrés en tríceps',
                'tipo' => 'calistenia',
                'orbes_calistenia' => 108,
                'orbes_fuerza' => 70,
                'orbes_resistencia' => 0,
            ],
        
            // =====================
            // AVANZADOS (110–118)
            // =====================
        
            [
                'nombre' => 'Fondos en Barra Recta',
                'descripcion' => 'Dips en barra horizontal',
                'tipo' => 'calistenia',
                'orbes_calistenia' => 110,
                'orbes_fuerza' => 72,
                'orbes_resistencia' => 0,
            ],
            [
                'nombre' => 'Fondos en Anillas Asistidos',
                'descripcion' => 'Inestabilidad controlada',
                'tipo' => 'calistenia',
                'orbes_calistenia' => 112,
                'orbes_fuerza' => 75,
                'orbes_resistencia' => 0,
            ],
            [
                'nombre' => 'Fondos en Anillas',
                'descripcion' => 'Inestabilidad total',
                'tipo' => 'calistenia',
                'orbes_calistenia' => 115,
                'orbes_fuerza' => 78,
                'orbes_resistencia' => 0,
            ],
            [
                'nombre' => 'Fondos en Barra Recta Estrictos',
                'descripcion' => 'Control total en barra',
                'tipo' => 'calistenia',
                'orbes_calistenia' => 116,
                'orbes_fuerza' => 80,
                'orbes_resistencia' => 0,
            ],
        
            // =====================
            // ÉLITE (118–125)
            // =====================
        
            [
                'nombre' => 'Fondos en Anillas Profundos',
                'descripcion' => 'Máximo rango en anillas',
                'tipo' => 'calistenia',
                'orbes_calistenia' => 118,
                'orbes_fuerza' => 82,
                'orbes_resistencia' => 0,
            ],
            [
                'nombre' => 'Fondos en Paralelas Explosivos',
                'descripcion' => 'Empuje potente',
                'tipo' => 'calistenia',
                'orbes_calistenia' => 120,
                'orbes_fuerza' => 85,
                'orbes_resistencia' => 0,
            ],
            [
                'nombre' => 'Fondos en Anillas Estrictos',
                'descripcion' => 'Control total avanzado',
                'tipo' => 'calistenia',
                'orbes_calistenia' => 122,
                'orbes_fuerza' => 88,
                'orbes_resistencia' => 0,
            ],
            [
                'nombre' => 'Fondos en Barra Recta Control Total',
                'descripcion' => 'Ejecución perfecta',
                'tipo' => 'calistenia',
                'orbes_calistenia' => 123,
                'orbes_fuerza' => 90,
                'orbes_resistencia' => 0,
            ],
            [
                'nombre' => 'Fondos en Anillas Estilo Gimnástico',
                'descripcion' => 'Nivel élite de control',
                'tipo' => 'calistenia',
                'orbes_calistenia' => 125,
                'orbes_fuerza' => 92,
                'orbes_resistencia' => 0,
            ],
        
        ];

        // =========================
        // FONDOS TRUCOS
        // =========================
        $fondos_trucos = [

            // =====================
            // HANDSTAND BASE (140–160)
            // =====================
        
            [
                'nombre' => 'Handstand Hold en Paralelas',
                'descripcion' => 'Equilibrio en parada de manos sobre paralelas',
                'tipo' => 'calistenia',
                'orbes_calistenia' => 145,
                'orbes_fuerza' => 90,
                'orbes_resistencia' => 0,
            ],
            [
                'nombre' => 'Handstand Push Control en Paralelas',
                'descripcion' => 'Pequeños descensos en vertical',
                'tipo' => 'calistenia',
                'orbes_calistenia' => 150,
                'orbes_fuerza' => 95,
                'orbes_resistencia' => 0,
            ],
            [
                'nombre' => 'Handstand con Apertura de Control',
                'descripcion' => 'Ajuste de equilibrio en paralelas',
                'tipo' => 'calistenia',
                'orbes_calistenia' => 155,
                'orbes_fuerza' => 100,
                'orbes_resistencia' => 0,
            ],
        
            // =====================
            // TRANSICIONES (160–180)
            // =====================
        
            [
                'nombre' => 'Handstand to Dip Transition',
                'descripcion' => 'Bajada controlada desde vertical a fondo',
                'tipo' => 'calistenia',
                'orbes_calistenia' => 165,
                'orbes_fuerza' => 110,
                'orbes_resistencia' => 0,
            ],
            [
                'nombre' => 'Press to Handstand en Paralelas (Negativo)',
                'descripcion' => 'Descenso desde vertical a apoyo',
                'tipo' => 'calistenia',
                'orbes_calistenia' => 170,
                'orbes_fuerza' => 115,
                'orbes_resistencia' => 0,
            ],
            [
                'nombre' => 'L-Sit to Handstand Transición',
                'descripcion' => 'Paso de L-sit a vertical',
                'tipo' => 'calistenia',
                'orbes_calistenia' => 175,
                'orbes_fuerza' => 118,
                'orbes_resistencia' => 0,
            ],
        
            // =====================
            // PLANCHE PROGRESIONES (180–200)
            // =====================
        
            [
                'nombre' => 'Tuck Planche en Paralelas',
                'descripcion' => 'Planche con piernas recogidas',
                'tipo' => 'calistenia',
                'orbes_calistenia' => 185,
                'orbes_fuerza' => 125,
                'orbes_resistencia' => 0,
            ],
            [
                'nombre' => 'Advanced Tuck Planche en Paralelas',
                'descripcion' => 'Planche tuck extendida',
                'tipo' => 'calistenia',
                'orbes_calistenia' => 195,
                'orbes_fuerza' => 135,
                'orbes_resistencia' => 0,
            ],
            [
                'nombre' => 'Straddle Planche en Paralelas',
                'descripcion' => 'Planche con piernas abiertas',
                'tipo' => 'calistenia',
                'orbes_calistenia' => 205,
                'orbes_fuerza' => 145,
                'orbes_resistencia' => 0,
            ],
            [
                'nombre' => 'Planche Lean Hold en Paralelas',
                'descripcion' => 'Inclinación extrema hacia planche',
                'tipo' => 'calistenia',
                'orbes_calistenia' => 190,
                'orbes_fuerza' => 130,
                'orbes_resistencia' => 0,
            ],
        
            // =====================
            // ÉLITE (200+)
            // =====================
        
            [
                'nombre' => 'Full Planche en Paralelas',
                'descripcion' => 'Planche completa en paralelas',
                'tipo' => 'calistenia',
                'orbes_calistenia' => 220,
                'orbes_fuerza' => 160,
                'orbes_resistencia' => 0,
            ],
            [
                'nombre' => 'Planche Push Hold en Paralelas',
                'descripcion' => 'Planche con micro flexión',
                'tipo' => 'calistenia',
                'orbes_calistenia' => 225,
                'orbes_fuerza' => 165,
                'orbes_resistencia' => 0,
            ],
            [
                'nombre' => 'Press to Handstand en Paralelas',
                'descripcion' => 'Elevación completa a vertical',
                'tipo' => 'calistenia',
                'orbes_calistenia' => 210,
                'orbes_fuerza' => 150,
                'orbes_resistencia' => 0,
            ],
            [
                'nombre' => 'Handstand Planche Transition Flow',
                'descripcion' => 'Flujo entre planche y handstand',
                'tipo' => 'calistenia',
                'orbes_calistenia' => 230,
                'orbes_fuerza' => 170,
                'orbes_resistencia' => 0,
            ],
            [
                'nombre' => 'Planche Hold Freestyle en Paralelas',
                'descripcion' => 'Control libre avanzado de planche',
                'tipo' => 'calistenia',
                'orbes_calistenia' => 240,
                'orbes_fuerza' => 180,
                'orbes_resistencia' => 0,
            ],
        
        ];

        // =========================
        // DOMINADAS
        // =========================
        $dominadas = [

            // =====================
            // INICIO (40–70)
            // =====================
        
            [
                'nombre' => 'Dominadas Asistidas con Salto',
                'descripcion' => 'Impulso inicial desde el suelo',
                'tipo' => 'calistenia',
                'orbes_calistenia' => 45,
                'orbes_fuerza' => 20,
                'orbes_resistencia' => 0,
            ],
            [
                'nombre' => 'Dominadas Negativas',
                'descripcion' => 'Bajada controlada desde arriba',
                'tipo' => 'calistenia',
                'orbes_calistenia' => 60,
                'orbes_fuerza' => 30,
                'orbes_resistencia' => 0,
            ],
            [
                'nombre' => 'Dominadas Isométricas a 90°',
                'descripcion' => 'Sostén en mitad del recorrido',
                'tipo' => 'calistenia',
                'orbes_calistenia' => 65,
                'orbes_fuerza' => 32,
                'orbes_resistencia' => 0,
            ],
        
            // =====================
            // BÁSICAS (70–100)
            // =====================
        
            [
                'nombre' => 'Dominadas Pronas (Pull Up)',
                'descripcion' => 'Dominada estándar agarre prono',
                'tipo' => 'calistenia',
                'orbes_calistenia' => 85,
                'orbes_fuerza' => 45,
                'orbes_resistencia' => 0,
            ],
            [
                'nombre' => 'Dominadas Supinas (Chin Up)',
                'descripcion' => 'Dominada con énfasis en bíceps',
                'tipo' => 'calistenia',
                'orbes_calistenia' => 90,
                'orbes_fuerza' => 50,
                'orbes_resistencia' => 0,
            ],
            [
                'nombre' => 'Dominadas Neutras',
                'descripcion' => 'Agarre neutro paralelo',
                'tipo' => 'calistenia',
                'orbes_calistenia' => 88,
                'orbes_fuerza' => 48,
                'orbes_resistencia' => 0,
            ],
            [
                'nombre' => 'Dominadas Estrechas',
                'descripcion' => 'Mayor activación de dorsales',
                'tipo' => 'calistenia',
                'orbes_calistenia' => 92,
                'orbes_fuerza' => 52,
                'orbes_resistencia' => 0,
            ],
            [
                'nombre' => 'Dominadas Amplias',
                'descripcion' => 'Mayor rango de espalda alta',
                'tipo' => 'calistenia',
                'orbes_calistenia' => 95,
                'orbes_fuerza' => 55,
                'orbes_resistencia' => 0,
            ],
        
            // =====================
            // INTERMEDIOS (100–140)
            // =====================
        
            [
                'nombre' => 'Dominadas Explosivas',
                'descripcion' => 'Subida con máxima potencia',
                'tipo' => 'calistenia',
                'orbes_calistenia' => 110,
                'orbes_fuerza' => 70,
                'orbes_resistencia' => 0,
            ],
            [
                'nombre' => 'Dominadas con Pausa en Arriba',
                'descripcion' => 'Sostén en la parte alta',
                'tipo' => 'calistenia',
                'orbes_calistenia' => 115,
                'orbes_fuerza' => 72,
                'orbes_resistencia' => 0,
            ],
            [
                'nombre' => 'Dominadas Archer Asistidas',
                'descripcion' => 'Transferencia lateral de peso',
                'tipo' => 'calistenia',
                'orbes_calistenia' => 130,
                'orbes_fuerza' => 85,
                'orbes_resistencia' => 0,
            ],
            [
                'nombre' => 'Dominadas Tipo Typewriter',
                'descripcion' => 'Desplazamiento lateral en barra',
                'tipo' => 'calistenia',
                'orbes_calistenia' => 135,
                'orbes_fuerza' => 90,
                'orbes_resistencia' => 0,
            ],
            [
                'nombre' => 'Dominadas con Elevación de Rodillas',
                'descripcion' => 'Control de core durante tirón',
                'tipo' => 'calistenia',
                'orbes_calistenia' => 120,
                'orbes_fuerza' => 75,
                'orbes_resistencia' => 0,
            ],
        
            // =====================
            // AVANZADOS (140–180)
            // =====================
        
            [
                'nombre' => 'Archer Pull Up Completo',
                'descripcion' => 'Dominada unilateral real',
                'tipo' => 'calistenia',
                'orbes_calistenia' => 155,
                'orbes_fuerza' => 105,
                'orbes_resistencia' => 0,
            ],
            [
                'nombre' => 'Dominadas en L-Sit',
                'descripcion' => 'Tirón con core en L-sit',
                'tipo' => 'calistenia',
                'orbes_calistenia' => 150,
                'orbes_fuerza' => 100,
                'orbes_resistencia' => 0,
            ],
            [
                'nombre' => 'Dominadas Explosivas con Giro',
                'descripcion' => 'Rotación durante subida',
                'tipo' => 'calistenia',
                'orbes_calistenia' => 160,
                'orbes_fuerza' => 110,
                'orbes_resistencia' => 0,
            ],
            [
                'nombre' => 'Dominadas en Barra con Balanceo Controlado',
                'descripcion' => 'Uso controlado de momentum',
                'tipo' => 'calistenia',
                'orbes_calistenia' => 165,
                'orbes_fuerza' => 115,
                'orbes_resistencia' => 0,
            ],
            [
                'nombre' => 'Chest to Bar Pull Up',
                'descripcion' => 'Subida hasta tocar pecho',
                'tipo' => 'calistenia',
                'orbes_calistenia' => 170,
                'orbes_fuerza' => 120,
                'orbes_resistencia' => 0,
            ],
        
            // =====================
            // ÉLITE (180–240)
            // =====================
        
            [
                'nombre' => 'Muscle Up Estricto',
                'descripcion' => 'Transición completa de tirón a empuje',
                'tipo' => 'calistenia',
                'orbes_calistenia' => 200,
                'orbes_fuerza' => 140,
                'orbes_resistencia' => 0,
            ],
            [
                'nombre' => 'Muscle Up Explosivo',
                'descripcion' => 'Versión rápida con potencia',
                'tipo' => 'calistenia',
                'orbes_calistenia' => 210,
                'orbes_fuerza' => 150,
                'orbes_resistencia' => 0,
            ],
            [
                'nombre' => 'Muscle Up en Anillas',
                'descripcion' => 'Mayor inestabilidad y control',
                'tipo' => 'calistenia',
                'orbes_calistenia' => 220,
                'orbes_fuerza' => 160,
                'orbes_resistencia' => 0,
            ],
            [
                'nombre' => 'Front Lever Pull Up Tuck',
                'descripcion' => 'Tirón en posición de front lever tuck',
                'tipo' => 'calistenia',
                'orbes_calistenia' => 230,
                'orbes_fuerza' => 170,
                'orbes_resistencia' => 0,
            ],
            [
                'nombre' => 'Front Lever Pull Up Straddle',
                'descripcion' => 'Tirón en front lever abierto',
                'tipo' => 'calistenia',
                'orbes_calistenia' => 240,
                'orbes_fuerza' => 180,
                'orbes_resistencia' => 0,
            ],
        
        ];

        // =========================
        // REMOS EN BARRA
        // =========================
        $remos = [

            // =====================
            // INICIO (30–60)
            // =====================
        
            [
                'nombre' => 'Remo Australiano Alto en Barra',
                'descripcion' => 'Remo con barra alta (cuerpo casi vertical)',
                'tipo' => 'calistenia',
                'orbes_calistenia' => 35,
                'orbes_fuerza' => 15,
                'orbes_resistencia' => 0,
            ],
            [
                'nombre' => 'Remo Australiano en Paralelas Altas',
                'descripcion' => 'Remo básico en paralelas elevadas',
                'tipo' => 'calistenia',
                'orbes_calistenia' => 40,
                'orbes_fuerza' => 18,
                'orbes_resistencia' => 0,
            ],
            [
                'nombre' => 'Remo Australiano con Rodillas Flexionadas',
                'descripcion' => 'Versión asistida del remo',
                'tipo' => 'calistenia',
                'orbes_calistenia' => 45,
                'orbes_fuerza' => 20,
                'orbes_resistencia' => 0,
            ],
            [
                'nombre' => 'Remo Australiano Estándar',
                'descripcion' => 'Cuerpo recto bajo barra',
                'tipo' => 'calistenia',
                'orbes_calistenia' => 50,
                'orbes_fuerza' => 25,
                'orbes_resistencia' => 0,
            ],
            [
                'nombre' => 'Remo Australiano Supino',
                'descripcion' => 'Agarre supino (más bíceps)',
                'tipo' => 'calistenia',
                'orbes_calistenia' => 55,
                'orbes_fuerza' => 28,
                'orbes_resistencia' => 0,
            ],
        
            // =====================
            // BÁSICOS (60–90)
            // =====================
        
            [
                'nombre' => 'Remo Australiano Estricto',
                'descripcion' => 'Cuerpo rígido y controlado',
                'tipo' => 'calistenia',
                'orbes_calistenia' => 65,
                'orbes_fuerza' => 35,
                'orbes_resistencia' => 0,
            ],
            [
                'nombre' => 'Remo Australiano con Pausa',
                'descripcion' => 'Sostén en la parte alta',
                'tipo' => 'calistenia',
                'orbes_calistenia' => 70,
                'orbes_fuerza' => 38,
                'orbes_resistencia' => 0,
            ],
            [
                'nombre' => 'Remo Australiano Agarre Estrecho',
                'descripcion' => 'Mayor activación dorsal',
                'tipo' => 'calistenia',
                'orbes_calistenia' => 72,
                'orbes_fuerza' => 40,
                'orbes_resistencia' => 0,
            ],
            [
                'nombre' => 'Remo Australiano Agarre Amplio',
                'descripcion' => 'Mayor trabajo de espalda alta',
                'tipo' => 'calistenia',
                'orbes_calistenia' => 75,
                'orbes_fuerza' => 42,
                'orbes_resistencia' => 0,
            ],
            [
                'nombre' => 'Remo en Barra Baja',
                'descripcion' => 'Cuerpo más horizontal',
                'tipo' => 'calistenia',
                'orbes_calistenia' => 80,
                'orbes_fuerza' => 45,
                'orbes_resistencia' => 0,
            ],
            [
                'nombre' => 'Remo en Paralelas Baja Inclinación',
                'descripcion' => 'Mayor dificultad que el australiano',
                'tipo' => 'calistenia',
                'orbes_calistenia' => 85,
                'orbes_fuerza' => 48,
                'orbes_resistencia' => 0,
            ],
        
            // =====================
            // INTERMEDIOS (90–130)
            // =====================
        
            [
                'nombre' => 'Remo con barra neutra',
                'descripcion' => 'Piernas apoyadas en otrabarra y remas neutro',
                'tipo' => 'calistenia',
                'orbes_calistenia' => 90,
                'orbes_fuerza' => 55,
                'orbes_resistencia' => 0,
            ],
            [
                'nombre' => 'Remo con Elevación de Piernas',
                'descripcion' => 'Piernas elevadas para más carga',
                'tipo' => 'calistenia',
                'orbes_calistenia' => 95,
                'orbes_fuerza' => 55,
                'orbes_resistencia' => 0,
            ],
            [
                'nombre' => 'Remo Unilateral Asistido',
                'descripcion' => 'Transferencia parcial a un brazo',
                'tipo' => 'calistenia',
                'orbes_calistenia' => 105,
                'orbes_fuerza' => 65,
                'orbes_resistencia' => 0,
            ],
            [
                'nombre' => 'Remo Explosivo en Barra',
                'descripcion' => 'Tirón rápido hacia barra',
                'tipo' => 'calistenia',
                'orbes_calistenia' => 110,
                'orbes_fuerza' => 70,
                'orbes_resistencia' => 0,
            ],
            [
                'nombre' => 'Remo Tipo Archer Asistido',
                'descripcion' => 'Carga hacia un lado',
                'tipo' => 'calistenia',
                'orbes_calistenia' => 120,
                'orbes_fuerza' => 80,
                'orbes_resistencia' => 0,
            ],
            [
                'nombre' => 'Remo con Desplazamiento Lateral',
                'descripcion' => 'Movimiento horizontal durante tirón',
                'tipo' => 'calistenia',
                'orbes_calistenia' => 125,
                'orbes_fuerza' => 85,
                'orbes_resistencia' => 0,
            ],
            [
                'nombre' => 'Remo en Anillas Básico',
                'descripcion' => 'Inestabilidad ligera en anillas',
                'tipo' => 'calistenia',
                'orbes_calistenia' => 130,
                'orbes_fuerza' => 90,
                'orbes_resistencia' => 0,
            ],
        
            // =====================
            // AVANZADOS (130–180)
            // =====================
        
            [
                'nombre' => 'Remo en Anillas Controlado',
                'descripcion' => 'Estabilidad media en anillas',
                'tipo' => 'calistenia',
                'orbes_calistenia' => 140,
                'orbes_fuerza' => 100,
                'orbes_resistencia' => 0,
            ],
            [
                'nombre' => 'Remo en Anillas Profundo',
                'descripcion' => 'Mayor rango de movimiento',
                'tipo' => 'calistenia',
                'orbes_calistenia' => 150,
                'orbes_fuerza' => 110,
                'orbes_resistencia' => 0,
            ],
            [
                'nombre' => 'Remo Archer en Anillas',
                'descripcion' => 'Tirón unilateral real en anillas',
                'tipo' => 'calistenia',
                'orbes_calistenia' => 160,
                'orbes_fuerza' => 120,
                'orbes_resistencia' => 0,
            ],
            [
                'nombre' => 'Remo Tipo Front Lever Tuck',
                'descripcion' => 'Remo en posición tuck front lever',
                'tipo' => 'calistenia',
                'orbes_calistenia' => 170,
                'orbes_fuerza' => 130,
                'orbes_resistencia' => 0,
            ],
            [
                'nombre' => 'Remo Front Lever Avanzado',
                'descripcion' => 'Mayor extensión de palanca',
                'tipo' => 'calistenia',
                'orbes_calistenia' => 175,
                'orbes_fuerza' => 135,
                'orbes_resistencia' => 0,
            ],
        
            // =====================
            // ÉLITE (180–240)
            // =====================
        
            [
                'nombre' => 'Remo Front Lever Straddle',
                'descripcion' => 'Tirón en front lever abierto',
                'tipo' => 'calistenia',
                'orbes_calistenia' => 200,
                'orbes_fuerza' => 150,
                'orbes_resistencia' => 0,
            ],
            [
                'nombre' => 'Remo Front Lever Completo',
                'descripcion' => 'Remo en front lever full',
                'tipo' => 'calistenia',
                'orbes_calistenia' => 220,
                'orbes_fuerza' => 160,
                'orbes_resistencia' => 0,
            ],
            [
                'nombre' => 'Remo en Anillas Freestyle Avanzado',
                'descripcion' => 'Control libre en anillas',
                'tipo' => 'calistenia',
                'orbes_calistenia' => 230,
                'orbes_fuerza' => 170,
                'orbes_resistencia' => 0,
            ],
            [
                'nombre' => 'Remo Front Lever con Transición',
                'descripcion' => 'Cambio de ángulo en palanca',
                'tipo' => 'calistenia',
                'orbes_calistenia' => 235,
                'orbes_fuerza' => 175,
                'orbes_resistencia' => 0,
            ],
            [
                'nombre' => 'Remo Gimnástico Nivel Competición',
                'descripcion' => 'Control total en tirón horizontal',
                'tipo' => 'calistenia',
                'orbes_calistenia' => 240,
                'orbes_fuerza' => 180,
                'orbes_resistencia' => 0,
            ],
        
        ];

        // =========================
        // PIERNAS EN CALISTENIA
        // =========================
        $piernas = [

            // =====================
            // BASE
            // =====================
        
            [
                'nombre' => 'Sentadilla Libre',
                'descripcion' => 'Sentadilla corporal básica',
                'tipo' => 'calistenia',
                'orbes_calistenia' => 28,
                'orbes_fuerza' => 20,
                'orbes_resistencia' => 0,
            ],
            [
                'nombre' => 'Sentadilla con Pausa',
                'descripcion' => 'Pausa en el punto bajo',
                'tipo' => 'calistenia',
                'orbes_calistenia' => 30,
                'orbes_fuerza' => 25,
                'orbes_resistencia' => 0,
            ],
            [
                'nombre' => 'Sentadilla Sumo',
                'descripcion' => 'Mayor apertura de piernas',
                'tipo' => 'calistenia',
                'orbes_calistenia' => 33,
                'orbes_fuerza' => 28,
                'orbes_resistencia' => 0,
            ],
            [
                'nombre' => 'Sentadilla Pulsos',
                'descripcion' => 'Repeticiones cortas en rango medio',
                'tipo' => 'calistenia',
                'orbes_calistenia' => 35,
                'orbes_fuerza' => 30,
                'orbes_resistencia' => 0,
            ],
            [
                'nombre' => 'Zancadas Alternas',
                'descripcion' => 'Paso alterno controlado',
                'tipo' => 'calistenia',
                'orbes_calistenia' => 38,
                'orbes_fuerza' => 35,
                'orbes_resistencia' => 0,
            ],
        
            // =====================
            // UNILATERAL
            // =====================
        
            [
                'nombre' => 'Split Squat Estático',
                'descripcion' => 'Zancada fija',
                'tipo' => 'calistenia',
                'orbes_calistenia' => 42,
                'orbes_fuerza' => 45,
                'orbes_resistencia' => 0,
            ],
            [
                'nombre' => 'Split Squat Profundo',
                'descripcion' => 'Mayor rango de movimiento',
                'tipo' => 'calistenia',
                'orbes_calistenia' => 45,
                'orbes_fuerza' => 50,
                'orbes_resistencia' => 0,
            ],
            [
                'nombre' => 'Bulgarian Split Squat',
                'descripcion' => 'Pierna trasera elevada',
                'tipo' => 'calistenia',
                'orbes_calistenia' => 50,
                'orbes_fuerza' => 60,
                'orbes_resistencia' => 0,
            ],
            [
                'nombre' => 'Bulgarian Split Squat Profundo',
                'descripcion' => 'Mayor profundidad',
                'tipo' => 'calistenia',
                'orbes_calistenia' => 55,
                'orbes_fuerza' => 65,
                'orbes_resistencia' => 0,
            ],
            [
                'nombre' => 'Sentadilla Pistol Asistida',
                'descripcion' => 'Pistol con apoyo',
                'tipo' => 'calistenia',
                'orbes_calistenia' => 58,
                'orbes_fuerza' => 70,
                'orbes_resistencia' => 0,
            ],
        
            // =====================
            // INTERMEDIO
            // =====================
        
            [
                'nombre' => 'Pistol Squat',
                'descripcion' => 'Sentadilla a una pierna',
                'tipo' => 'calistenia',
                'orbes_calistenia' => 65,
                'orbes_fuerza' => 85,
                'orbes_resistencia' => 0,
            ],
            [
                'nombre' => 'Pistol Squat Profunda',
                'descripcion' => 'Mayor rango',
                'tipo' => 'calistenia',
                'orbes_calistenia' => 68,
                'orbes_fuerza' => 90,
                'orbes_resistencia' => 0,
            ],
            [
                'nombre' => 'Pistol Squat Explosiva',
                'descripcion' => 'Subida potente',
                'tipo' => 'calistenia',
                'orbes_calistenia' => 70,
                'orbes_fuerza' => 95,
                'orbes_resistencia' => 0,
            ],
            [
                'nombre' => 'Skater Squat',
                'descripcion' => 'Unilateral sin apoyo trasero',
                'tipo' => 'calistenia',
                'orbes_calistenia' => 73,
                'orbes_fuerza' => 100,
                'orbes_resistencia' => 0,
            ],
            [
                'nombre' => 'Shrimp Squat',
                'descripcion' => 'Flexión profunda unilateral',
                'tipo' => 'calistenia',
                'orbes_calistenia' => 75,
                'orbes_fuerza' => 105,
                'orbes_resistencia' => 0,
            ],
        
            // =====================
            // AVANZADO
            // =====================
        
            [
                'nombre' => 'Jump Squat Explosivo',
                'descripcion' => 'Sentadilla con salto',
                'tipo' => 'calistenia',
                'orbes_calistenia' => 82,
                'orbes_fuerza' => 115,
                'orbes_resistencia' => 0,
            ],
            [
                'nombre' => 'Pistol Jump Squat',
                'descripcion' => 'Pistol con salto',
                'tipo' => 'calistenia',
                'orbes_calistenia' => 85,
                'orbes_fuerza' => 120,
                'orbes_resistencia' => 0,
            ],
            [
                'nombre' => 'Split Squat Jump',
                'descripcion' => 'Zancada con salto',
                'tipo' => 'calistenia',
                'orbes_calistenia' => 88,
                'orbes_fuerza' => 125,
                'orbes_resistencia' => 0,
            ],
            [
                'nombre' => 'Sissy Squat',
                'descripcion' => 'Cuádriceps extremo',
                'tipo' => 'calistenia',
                'orbes_calistenia' => 90,
                'orbes_fuerza' => 130,
                'orbes_resistencia' => 0,
            ],
            [
                'nombre' => 'Sissy Squat Profundo',
                'descripcion' => 'Mayor tensión',
                'tipo' => 'calistenia',
                'orbes_calistenia' => 92,
                'orbes_fuerza' => 135,
                'orbes_resistencia' => 0,
            ],
        
            // =====================
            // ÉLITE
            // =====================
        
            [
                'nombre' => 'Shrimp Squat Estricto',
                'descripcion' => 'Control total unilateral',
                'tipo' => 'calistenia',
                'orbes_calistenia' => 100,
                'orbes_fuerza' => 150,
                'orbes_resistencia' => 0,
            ],
            [
                'nombre' => 'Pistol Squat Control Total',
                'descripcion' => 'Ejecución perfecta',
                'tipo' => 'calistenia',
                'orbes_calistenia' => 103,
                'orbes_fuerza' => 155,
                'orbes_resistencia' => 0,
            ],
            [
                'nombre' => 'Sissy Squat Extremo',
                'descripcion' => 'Máxima tensión cuádriceps',
                'tipo' => 'calistenia',
                'orbes_calistenia' => 105,
                'orbes_fuerza' => 160,
                'orbes_resistencia' => 0,
            ],
            [
                'nombre' => 'Pistol Jump Controlado',
                'descripcion' => 'Explosión unilateral precisa',
                'tipo' => 'calistenia',
                'orbes_calistenia' => 108,
                'orbes_fuerza' => 165,
                'orbes_resistencia' => 0,
            ],
            [
                'nombre' => 'Skater Squat Explosivo Elite',
                'descripcion' => 'Potencia unilateral máxima',
                'tipo' => 'calistenia',
                'orbes_calistenia' => 110,
                'orbes_fuerza' => 170,
                'orbes_resistencia' => 0,
            ],
        
        ];

        // =========================
        // CORE
        // =========================
        $core = [

            // =====================
            // BASE (40–80)
            // =====================
        
            [
                'nombre' => 'Crunch en Suelo',
                'descripcion' => 'Flexión básica de abdomen',
                'tipo' => 'calistenia',
                'orbes_calistenia' => 45,
                'orbes_fuerza' => 20,
                'orbes_resistencia' => 0,
            ],
            [
                'nombre' => 'Crunch con Pausa',
                'descripcion' => 'Contracción mantenida',
                'tipo' => 'calistenia',
                'orbes_calistenia' => 50,
                'orbes_fuerza' => 22,
                'orbes_resistencia' => 0,
            ],
            [
                'nombre' => 'Elevaciones de Rodillas en Suelo',
                'descripcion' => 'Rodillas al pecho controlado',
                'tipo' => 'calistenia',
                'orbes_calistenia' => 55,
                'orbes_fuerza' => 25,
                'orbes_resistencia' => 0,
            ],
            [
                'nombre' => 'Dead Bug',
                'descripcion' => 'Control anti-extensión básico',
                'tipo' => 'calistenia',
                'orbes_calistenia' => 60,
                'orbes_fuerza' => 28,
                'orbes_resistencia' => 0,
            ],
            [
                'nombre' => 'Plancha Frontal',
                'descripcion' => 'Isométrico básico de core',
                'tipo' => 'calistenia',
                'orbes_calistenia' => 70,
                'orbes_fuerza' => 30,
                'orbes_resistencia' => 0,
            ],
        
            // =====================
            // INTERMEDIO (80–140)
            // =====================
        
            [
                'nombre' => 'Elevaciones de Piernas en Suelo',
                'descripcion' => 'Piernas rectas al aire',
                'tipo' => 'calistenia',
                'orbes_calistenia' => 85,
                'orbes_fuerza' => 45,
                'orbes_resistencia' => 0,
            ],
            [
                'nombre' => 'Hollow Body Hold',
                'descripcion' => 'Posición de hollow controlado',
                'tipo' => 'calistenia',
                'orbes_calistenia' => 95,
                'orbes_fuerza' => 50,
                'orbes_resistencia' => 0,
            ],
            [
                'nombre' => 'Hollow Rocks',
                'descripcion' => 'Balanceo en hollow',
                'tipo' => 'calistenia',
                'orbes_calistenia' => 100,
                'orbes_fuerza' => 55,
                'orbes_resistencia' => 0,
            ],
            [
                'nombre' => 'Elevaciones de Piernas Colgado',
                'descripcion' => 'Tirón de core en barra',
                'tipo' => 'calistenia',
                'orbes_calistenia' => 110,
                'orbes_fuerza' => 65,
                'orbes_resistencia' => 0,
            ],
            [
                'nombre' => 'Rodillas al Pecho Colgado',
                'descripcion' => 'Versión básica en barra',
                'tipo' => 'calistenia',
                'orbes_calistenia' => 105,
                'orbes_fuerza' => 60,
                'orbes_resistencia' => 0,
            ],
        
            // =====================
            // AVANZADO (140–180)
            // =====================
        
            [
                'nombre' => 'L-Sit en Suelo',
                'descripcion' => 'Isométrico de piernas extendidas',
                'tipo' => 'calistenia',
                'orbes_calistenia' => 140,
                'orbes_fuerza' => 80,
                'orbes_resistencia' => 0,
            ],
            [
                'nombre' => 'L-Sit en Paralelas',
                'descripcion' => 'Mayor dificultad por altura',
                'tipo' => 'calistenia',
                'orbes_calistenia' => 150,
                'orbes_fuerza' => 90,
                'orbes_resistencia' => 0,
            ],
            [
                'nombre' => 'Tuck L-Sit Hold',
                'descripcion' => 'Versión recogida del L-sit',
                'tipo' => 'calistenia',
                'orbes_calistenia' => 145,
                'orbes_fuerza' => 85,
                'orbes_resistencia' => 0,
            ],
            [
                'nombre' => 'Dragon Flag Negativa',
                'descripcion' => 'Descenso controlado tipo Bruce Lee',
                'tipo' => 'calistenia',
                'orbes_calistenia' => 160,
                'orbes_fuerza' => 100,
                'orbes_resistencia' => 0,
            ],
            [
                'nombre' => 'Dragon Flag Completa',
                'descripcion' => 'Isométrico completo de core extremo',
                'tipo' => 'calistenia',
                'orbes_calistenia' => 170,
                'orbes_fuerza' => 110,
                'orbes_resistencia' => 0,
            ],
        
            // =====================
            // ÉLITE (180–240)
            // =====================
        
            [
                'nombre' => 'Front Lever Tuck Hold',
                'descripcion' => 'Palanca básica recogida',
                'tipo' => 'calistenia',
                'orbes_calistenia' => 185,
                'orbes_fuerza' => 120,
                'orbes_resistencia' => 0,
            ],
            [
                'nombre' => 'Front Lever Advanced Tuck',
                'descripcion' => 'Palanca más extendida',
                'tipo' => 'calistenia',
                'orbes_calistenia' => 195,
                'orbes_fuerza' => 130,
                'orbes_resistencia' => 0,
            ],
            [
                'nombre' => 'Front Lever Straddle Hold',
                'descripcion' => 'Palanca abierta',
                'tipo' => 'calistenia',
                'orbes_calistenia' => 210,
                'orbes_fuerza' => 145,
                'orbes_resistencia' => 0,
            ],
            [
                'nombre' => 'Front Lever Full Hold',
                'descripcion' => 'Palanca completa',
                'tipo' => 'calistenia',
                'orbes_calistenia' => 225,
                'orbes_fuerza' => 160,
                'orbes_resistencia' => 0,
            ],
            [
                'nombre' => 'Human Flag Hold',
                'descripcion' => 'Isométrico lateral extremo',
                'tipo' => 'calistenia',
                'orbes_calistenia' => 235,
                'orbes_fuerza' => 170,
                'orbes_resistencia' => 0,
            ],
        
        ];
    }
}
