<?php

namespace App\Exports;

use App\Models\reporteModel;

use Maatwebsite\Excel\Concerns\FromQuery;
use Maatwebsite\Excel\Concerns\WithHeadings;
use Maatwebsite\Excel\Concerns\WithEvents;
use Maatwebsite\Excel\Events\BeforeExport;
use Maatwebsite\Excel\Concerns\Exportable;
use Maatwebsite\Excel\Events\AfterSheet;
use Maatwebsite\Excel\Concerns\FromCollection;

class peeExport implements WithHeadings,WithEvents,FromQuery
{

    use Exportable;

    public function query()
    {
        return reporteModel::query()->where('tipo','Participacion en ediciones');
    }


    public function headings():array
    {
        return [
            'Creditos',
            'No_Ctrl',
            'Nombre',
            'Semestre',
            'Carrera',
            'Nombre',
            'Tipo',
            'Desempeño'
        ];
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
                        'A1:H1',
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
