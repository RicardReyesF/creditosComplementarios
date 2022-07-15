<?php

namespace App\Exports;

use App\Models\reporteModel;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\WithHeadings;

class ReportesExport implements FromCollection,WithHeadings
{

    
    public function headings():array
    {
        return [
            'Creditos',
            'No_Ctrl',
            'Nombre',
            'Semestre',
            'Carrera',
            'Materia',
        ];
    }
    
    public function collection()
    {
        return reporteModel::all();
    }
}
