<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class SesionEjercicio extends Model
{
    protected $table = 'sesiones_ejercicios';

    protected  $fillable = [
        'sesion_id',
        'ejercicio_id',
        'numero_serie',
        'repeticiones',
        'segundos',
        'metros',
        'peso',
    ];

    public function sesion() {
        return $this->belongsTo(Sesion::class);
    }

    public function ejercicio() {
        return $this->belongsTo(Ejercicio::class, 'ejercicio_id');
    }
}
