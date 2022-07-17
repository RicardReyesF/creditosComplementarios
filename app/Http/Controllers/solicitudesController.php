<?php

namespace App\Http\Controllers;

use App\Models\solicitudes;
use Illuminate\Http\Request;

class solicitudesController extends Controller
{
    public function solicitudes()
    {
        $solicitudes = solicitudes::all();
        return view('solicitudes',array('solicitudes'=>$solicitudes));
    }
    //
}
