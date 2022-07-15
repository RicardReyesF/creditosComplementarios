<?php

namespace App\Http\Controllers;

use App\Models\actividades;
use Illuminate\Http\Request;

class alumnosController extends Controller
{
    public function alumnos()
    {
        $actividades=actividades::all();
        return view('alumnos', array('actividades'=> $actividades));
    }
}
