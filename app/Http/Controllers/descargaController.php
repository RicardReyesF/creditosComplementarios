<?php

namespace App\Http\Controllers;
use App\Models\solicitudes;
use Illuminate\Http\Request;
use Barryvdh\DomPDF\Facade\Pdf;
use Illuminate\Support\Facades\Auth;

class descargaController extends Controller
{
    public function descarga()
    {
        $solicitudes = solicitudes::where('alumnos_id', Auth::user()->noControl)
            ->get();

        return view('descarga', array('solicitudes' => $solicitudes));
    }

    public function pdf(){
        $solicitudes = solicitudes::query()->where('estado',3)->get();
        $pdf = Pdf::loadView('generarpdf',array('solicitudes' => $solicitudes));
        return $pdf->stream();

    }
}
