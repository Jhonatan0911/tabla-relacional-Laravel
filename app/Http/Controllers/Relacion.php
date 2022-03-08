<?php

namespace App\Http\Controllers;


//importamos los modelos con las relaciones
use App\Models\Aprendiz;
use App\Models\Ficha;

use Illuminate\Http\Request;

class Relacion extends Controller
{
    // Funcion index que muestra los aprendices que devuelve una vista (welcome) pasandoles un arreglo con todos los aprendices
    public function index(){
        $aprendizs = Aprendiz::all();
        return view('welcome', compact('aprendizs'));
    }
}
