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
        Schema::create('sesiones', function (Blueprint $table) {
            $table->id();

            $table->unsignedBigInteger('usuario_id');
            $table->foreign('usuario_id')->references('id')->on('users')->onDelete('cascade');

            // Para entrenar sin rutina asignada, o si se borra conservar el historial de siones
            // por eso en onDelete null
            $table->unsignedBigInteger('rutina_id')->nullable();
            $table->foreign('rutina_id')->references('id')->on('rutinas')->onDelete('set null');

            $table->string('titulo');
            $table->text('descripcion')->nullable();
            $table->timestamp('fecha');
            $table->boolean('completada')->default(false);
            $table->integer('orbes_fuerza_ganados')->default(0);
            $table->integer('orbes_calistenia_ganados')->default(0);
            $table->integer('orbes_resistencia_ganados')->default(0);

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('sesiones');
    }
};
