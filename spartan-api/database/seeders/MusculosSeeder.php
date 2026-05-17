<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Musculo;

class MusculosSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Musculo::create(['nombre' => 'pecho']);
        Musculo::create(['nombre' => 'triceps']);
        Musculo::create(['nombre' => 'deltoides-anterior']);
        Musculo::create(['nombre' => 'deltoides-medial']);
        
        Musculo::create(['nombre' => 'brazos']);
        Musculo::create(['nombre' => 'biceps']);
        Musculo::create(['nombre' => 'dorsales']);
        Musculo::create(['nombre' => 'espalda-alta']);
        Musculo::create(['nombre' => 'deltoides-posterior']);
        Musculo::create(['nombre' => 'trapecios']);

        Musculo::create(['nombre' => 'abdomen']);

        Musculo::create(['nombre' => 'quadriceps']);
        Musculo::create(['nombre' => 'adductores']);
        Musculo::create(['nombre' => 'isquiotibiales']);
        Musculo::create(['nombre' => 'abductores']);
        Musculo::create(['nombre' => 'gluteos']);
        Musculo::create(['nombre' => 'gemelos']);

    }
}
