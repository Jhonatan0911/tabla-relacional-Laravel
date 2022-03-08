<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Aprendiz extends Model
{
    use HasFactory;
    // Un aprendiz pertenece a una ficha
    public function fichas(){
        return $this->belongsTo(Ficha::class, 'id_ficha');
    }
}
