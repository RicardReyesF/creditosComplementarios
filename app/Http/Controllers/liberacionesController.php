<?php

namespace App\Http\Controllers;

use App\Models\solicitudes;
use App\Models\actividades;
use Illuminate\Http\Request;

class liberacionesController extends Controller
{
    public function liberaciones()
    {
        $solicitudes = solicitudes::query()->where('estado',2)->get();


        return view('liberacionesCopy', array('solicitudes' => $solicitudes));
    }
    public function liberar(Request $request,$id){
        $actividad = solicitudes::find($id);
        $actividad->desempeño=$request->get('calificacion');
        $actividad->estado=3;
        $actividad->save();
        return redirect('/liberacionesCopy');
    }
}
