<?php

namespace App\Http\Controllers;

use App\Models\solicitudes;
use Illuminate\Http\Request;

class liberacionesController extends Controller
{
    public function liberaciones()
    {
        $solicitudes = solicitudes::query()->where('estado','=',2)->get();
        return view('liberaciones', array('solicitudes' => $solicitudes));
    }
    //
}
