<?php

namespace App\Http\Controllers;

use App\Exports\ReportesExport;
use Illuminate\Http\Request;
use Maatwebsite\Excel\Facades\Excel;

class reporteController extends Controller
{
    //
    public function export()
    {
        return Excel::download(new ReportesExport, 'reporte.xlsx');
    }
}
