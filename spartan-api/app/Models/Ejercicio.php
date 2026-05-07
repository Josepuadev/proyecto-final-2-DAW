<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class Ejercicio extends Model
{
    public function musculos() {
        return $this->belongsToMany(Musculo::class, 'ejercicios_musculos');
        // Relacionamos la tabla musculos con ejercicios creando una tabla intermedia llamada ejercicios_musculos. 
    }
}
