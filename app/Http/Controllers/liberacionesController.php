<?php

namespace App\Http\Controllers;

use App\Exports\ReportesExport;
use App\Models\solicitudes;
use App\Models\actividades;
use App\Models\reporteModel;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class liberacionesController extends Controller
{
    public function liberaciones()
    {
        $solicitudes = solicitudes::query()->where('estado',2)->where('userAlta',Auth::user()->noControl)->get();


        return view('liberacionesCopy', array('solicitudes' => $solicitudes));
    }
    public function liberar(Request $request,$id){
        $actividad = solicitudes::find($id);
        $actividad->desempeño=$request->get('calificacion');
        $actividad->estado=3;
        $actividad->save();

        $reporte = new reporteModel();
        $reporte->no_ctrl = $request->get('alumno_id');
        $reporte->nombre = $request->get('nombre');
        $reporte->semestre = $request->get('semestre');
        $reporte->carrera = $request->get('carrera');
        $reporte->materia = $request->get('actividad_id');
        $reporte->tipo = $request->get('tipo');
        $reporte->desempeño = $request->get('calificacion');
        $reporte->save();

        return redirect('/liberaciones');


    }
}
