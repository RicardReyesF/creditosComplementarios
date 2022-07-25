<?php

namespace App\Http\Controllers;

use App\Models\solicitudes;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use PhpParser\Node\Expr\Cast\Array_;

class solicitudController extends Controller
{
    public function insertar($id,$user,$tipo){
        $solicitud = new solicitudes;
        $solicitud->actividades_id=$id;
        $solicitud->alumnos_id=Auth::user()->noControl;
        $solicitud->estado=1;
        $solicitud->userAlta=$user;
        $solicitud->save();
        return redirect('/alumnos');
    }
}
