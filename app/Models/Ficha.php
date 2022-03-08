<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Ficha extends Model
{
    use HasFactory;

    // Relacion uno a muchos (Una ficha tiene muchos aprendices)
    // $this hace referencia a la bd fichas y aprendiz a la bd de aprendices enlazados por la llave foreana id
    public function aprendizs() {
        return $this->hasMany(Aprendiz::class, 'id');
    }

}
