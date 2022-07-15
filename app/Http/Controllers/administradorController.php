<?php

namespace App\Http\Controllers;

use App\Models\actividades;
use Illuminate\Http\Request;

class administradorController extends Controller
{
    public function administrador()
    {
        $actividades=actividades::all();
        return view('administrador',array('actividades'=> $actividades));
    }
    //
}
