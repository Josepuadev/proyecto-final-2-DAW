<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class Musculo extends Model
{
    protected $fillable = [
        'nombre'
    ];

    public function ejercicios() {
        return $this->belongsToMany(Ejercicio::class, 'ejercicios_musculos');
    }
}
