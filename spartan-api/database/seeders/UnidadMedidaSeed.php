<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\UnidadMedida;

class UnidadMedidaSeed extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        UnidadMedida::create(['nombre' => 'repeticiones']);
        UnidadMedida::create(['nombre' => 'segundos']);
        UnidadMedida::create(['nombre' => 'metros']);
    }
}
