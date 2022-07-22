<?php

namespace App\Exports;

use App\Models\reporteModel;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\WithHeadings;
use Maatwebsite\Excel\Concerns\WithEvents;
use Maatwebsite\Excel\Events\BeforeExport;
use Maatwebsite\Excel\Events\AfterSheet;

class ReportesExport implements FromCollection,WithHeadings,WithEvents
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

        /**
         * @return array
         */
        public function registerEvents(): array
        {
            return [
                BeforeExport::class  => function(BeforeExport $event) {
                    $event->writer->setCreator('Patrick');
                },
                AfterSheet::class    => function(AfterSheet $event) {
                    $event->sheet->setOrientation(\PhpOffice\PhpSpreadsheet\Worksheet\PageSetup::ORIENTATION_LANDSCAPE);

                    $event->sheet->styleCells(
                        'A1:F1',
                        [
                            'borders' => [
                                'outline' => [
                                    'borderStyle' => \PhpOffice\PhpSpreadsheet\Style\Border::BORDER_THICK,
                                    'color' => ['argb' => '198754'],
                                ],
                            ],
                        ]
                    );
                },
            ];
        }
    }

