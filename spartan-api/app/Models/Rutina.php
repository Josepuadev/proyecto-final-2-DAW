<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Rutina extends Model
{
    protected $fillable = [
        'usuario_id',
        'nombre',
        'descripcion',
    ];

    public function usuario() // nombre del id que  referenciamos
    {
        return $this->belongsTo(User::class);
    }

    public function ejercicios() {
        return $this->belongsToMany(Ejercicio::class,'rutina_ejercicios')
                    ->withPivot('series', 'repeticiones_objetivo', 'segundos_objetivo', 'metros_objetivo', 'peso', 'orden')
                    ->orderBy('rutina_ejercicios.orden');
    }
}
