<?php

namespace App\Http\Controllers;

use App\Models\actividades;
use Illuminate\Http\Request;

class modificarActividad extends Controller
{
    public function modificar($id)
    {
        $actividad = actividades::query()->where('id','=',$id)->get();
        
        return view('modificarActividad',array('actividades'=>$actividad));
    }

    public function actualizar(Request $request,$id)
    {
        
        $actividad = actividades::find($id);
        $actividad->creditos=$request->get('creditos');
        $actividad->actividad=$request->get('actividad');
        $actividad->responsable=$request->get('responsable');
        $actividad->tipo=$request->get('tipo');
        if($request->creditos == 1)
        {
            $actividad->horas=20;
        } else 
            {
                $actividad->horas=40;
            }
        $actividad->fechaInicio=$request->get('fechaInicio');
        $actividad->fechaTerminacion=$request->get('fechaTerminacion');
        $actividad->save();

        return redirect('/administrador');

    }

    
}
