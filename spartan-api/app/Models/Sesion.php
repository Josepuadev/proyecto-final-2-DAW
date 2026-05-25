<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Sesion extends Model
{
    // La forma de pluralizar de Laravel no me sirve para esta tabla,  NO ES SESIONES, 
    // es: sesiones...
    protected $table = 'sesiones';

    protected $fillable = [
        'usuario_id',
        'rutina_id',
        'titulo',
        'descripcion',
        'fecha',
        'completada',
        'orbes_fuerza_ganados',
        'orbes_calistenia_ganados',
        'orbes_resistencia_ganados',
    ];

    public function usuario()
    {
        return $this->belongsTo(User::class);
    }

    public function rutina()
    {
        return $this->belongsTo(Rutina::class);
    }

    public function sesionEjercicios() {
        return $this->hasMany(SesionEjercicio::class,'sesion_id');
    }
}
