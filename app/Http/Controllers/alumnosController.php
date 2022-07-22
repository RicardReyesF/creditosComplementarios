<?php

namespace App\Http\Controllers;

use App\Models\actividades;
use App\Models\solicitudes;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;

class alumnosController extends Controller
{
    public function alumnos()
    {
        $solicitudes = solicitudes::where('alumnos_id', Auth::user()->noControl)
            ->get();
        $actividades=actividades::all();

        return view('alumnos', array('actividades'=> $actividades,'solicitudes' => $solicitudes));
    }
}
