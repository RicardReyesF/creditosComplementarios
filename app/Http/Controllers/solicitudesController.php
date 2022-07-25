<?php

namespace App\Http\Controllers;

use App\Models\actividades;
use App\Models\solicitudes;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Maatwebsite\Excel\Concerns\ToArray;

class solicitudesController extends Controller
{
    public function solicitudes()
    {
        $solicitudes = solicitudes::query()->where('estado', 1)->where('userAlta',Auth::user()->noControl)->get();

        return view('solicitudesCopia', array('solicitudes' => $solicitudes));
    }

    public function aceptar($alumno_id, $actividad_id)
    {
        $actividad = solicitudes::where('alumnos_id', $alumno_id)
            ->where('actividades_id', $actividad_id)->first();
        $actividad->update(['estado' => 2]);
        return redirect('/solicitudes');
    }
    public function denegar($id)
    {
        $actividad = solicitudes::find($id);
        $actividad->estado=0;
        $actividad->save();
        return redirect('/solicitudes');
    }
}
