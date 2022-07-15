<?php

namespace App\Http\Controllers;

use App\Models\actividades;
use Illuminate\Http\Request;

class actividadnueva extends Controller
{
    public function actividadnueva()
    {
        return view('actividadnueva');
    }

    public function create(Request $request)
    {
        
        $actividad=new actividades;
        $actividad->creditos=$request->creditos;
        $actividad->actividad=$request->actividad;
        $actividad->responsable=$request->responsable;
        $actividad->tipo=$request->tipo;
        if($request->creditos == 1)
        {
            $actividad->horas=20;
        } else 
            {
                $actividad->horas=40;
            }
        $actividad->fechaInicio=$request->fechaInicio;
        $actividad->fechaTerminacion=$request->fechaTerminacion;
        $actividad->save();

        return redirect()->route('Administrador');

    }


    //s
}
