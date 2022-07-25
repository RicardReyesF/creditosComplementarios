<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class reporteviewController extends Controller
{
    public function vista(){
        return view('Reportes');
    }
}
