<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('ejercicios', function (Blueprint $table) {
            $table->id();
            $table->string('nombre',100);
            $table->string('descripcion')->nullable();
            $table->enum('tipo', ['fuerza', 'calistenia', 'resistencia']);
            $table->unsignedBigInteger('orbes_fuerza')->default(0);
            $table->unsignedBigInteger('orbes_calistenia')->default(0);
            $table->unsignedBigInteger('orbes_resistencia')->default(0);
            $table->string('imagen');
            $table->timestamps();

        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('ejercicios');
    }
};
