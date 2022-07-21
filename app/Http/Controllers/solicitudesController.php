<?php

namespace App\Http\Controllers;

use App\Models\actividades;
use App\Models\solicitudes;
use Illuminate\Http\Request;
use Maatwebsite\Excel\Concerns\ToArray;

class solicitudesController extends Controller
{
    public function solicitudes()
    {
        $solicitudes = solicitudes::query()->where('estado','=',1)->get();
        return view('solicitudesCopia',array('solicitudes'=>$solicitudes));
    }

    public function aceptar($id){
        $actividad = solicitudes::find($id);
        $actividad->estado = 2;
        $actividad->save();
        return redirect('/solicitudesCopia');
    }
    public function denegar($id){
        $actividad = solicitudes::find($id);
        $actividad->delete();
        return redirect('/solicitudesCopia');
    }

}
