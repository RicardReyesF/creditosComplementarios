<?php

namespace App\Http\Controllers;

use App\Models\solicitudes;
use Illuminate\Http\Request;
use PhpParser\Node\Expr\Cast\Array_;

class solicitudController extends Controller
{
    public function insertar($id){
        $solicitud = new solicitudes;
        $solicitud->actividades_id=$id;
        $solicitud->alumnos_id=15280813;
        $solicitud->estado=1;
        $solicitud->save();
        return view('Solicitud');
    }
}
