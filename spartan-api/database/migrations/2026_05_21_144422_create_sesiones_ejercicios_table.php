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
        Schema::create('sesiones_ejercicios', function (Blueprint $table) {
            $table->id();

            $table->unsignedBigInteger('sesion_id');
            $table->foreign('sesion_id')->references('id')->on('sesiones')->onDelete('cascade');

            $table->unsignedBigInteger('ejercicio_id');
            $table->foreign('ejercicio_id')->references('id')->on('ejercicios')->onDelete('cascade');
            $table->integer('numero_serie');
            $table->integer('repeticiones')->nullable();
            $table->integer('segundos')->nullable();
            $table->integer('metros')->nullable();
            $table->decimal('peso', 5, 2)->nullable();

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('sesiones_ejercicios');
    }
};
