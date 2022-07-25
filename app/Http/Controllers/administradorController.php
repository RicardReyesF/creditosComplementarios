<?php

namespace App\Http\Controllers;

use App\Models\actividades;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class administradorController extends Controller
{
    public function administrador()
    {
        $actividades=actividades::query()->where('userAlta',Auth::user()->noControl)->get();
        return view('administrador',array('actividades'=> $actividades));
    }
    //
}
