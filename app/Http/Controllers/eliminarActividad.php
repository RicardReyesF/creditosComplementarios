<?php

namespace App\Http\Controllers;

use App\Models\actividades;
use Illuminate\Http\Request;


class eliminarActividad extends Controller
{
    public function eliminar ($id)
    {
        $eliminar = actividades::find($id);
        
        $eliminar->delete();

        return redirect('/administrador');

    }
}
