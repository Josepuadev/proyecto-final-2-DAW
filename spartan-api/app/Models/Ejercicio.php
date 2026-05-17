<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use App\Models\TipoEjercicio;
use App\Models\UnidadMedida;

class Ejercicio extends Model
{

    protected $fillable = [
        'nombre',
        'descripcion',
        'orbes_fuerza',
        'orbes_calistenia',
        'orbes_resistencia',
    ];

    public function musculos() {
        return $this->belongsToMany(Musculo::class, 'ejercicios_musculos');
        // Relacionamos la tabla musculos con ejercicios creando una tabla intermedia llamada ejercicios_musculos. 
    }

    public function tipo() {
        return $this->belongsTo(TipoEjercicio::class);
    }

    public function medida() {
        return $this->belongsTo(UnidadMedida::class);
    }
}
