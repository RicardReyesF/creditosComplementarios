<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Barryvdh\DomPDF\Facade\Pdf;

class descargaController extends Controller
{
    public function descarga()
    {
        return view('descarga');
    }

    public function pdf(){
        $pdf = Pdf::loadView('generarpdf');
        return $pdf->stream();

    }
}
