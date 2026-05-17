<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\TipoEjercicio;

class TipoEjercicioSeed extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        TipoEjercicio::create(['nombre' => 'fuerza']);
        TipoEjercicio::create(['nombre' => 'calistenia']);
        TipoEjercicio::create(['nombre' => 'resistencia']);
    }
}
