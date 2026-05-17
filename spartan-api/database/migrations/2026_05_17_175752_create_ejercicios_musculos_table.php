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
        Schema::create('ejercicios_musculos', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('ejercicio_id');
            $table->unsignedBigInteger('musculo_id');   

            $table->foreign('ejercicio_id')->references('id')->on('ejercicios')->cascadeOnDelete();
            $table->foreign('musculo_id')->references('id')->on('musculos')->cascadeOnDelete();
            
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('ejercicios_musculos');
    }
};
