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
        Schema::create('rutina_ejercicios', function (Blueprint $table) {
            $table->id();

            $table->unsignedBigInteger('rutina_id');
            $table->foreign('rutina_id')->references('id')->on('rutinas')->onDelete('cascade');

            $table->unsignedBigInteger('ejercicio_id');
            $table->foreign('ejercicio_id')->references('id')->on('ejercicios')->onDelete('cascade');

            $table->integer('series')->nullable();
            $table->integer('segundos_objetivo')->nullable();
            $table->integer('metros_objetivo')->nullable();
            $table->integer('repeticiones_objetivo');
            $table->decimal('peso', 5 , 2)->nullable();
            $table->integer('orden')->default(1);


            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('rutina_ejercicios');
    }
};
