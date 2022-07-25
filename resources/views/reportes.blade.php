@extends('plantillaAdmin')
@section('content')
<div class="container">
    <div class="table tablesorter">
        <div id="tblCardex_wraper" class="dataTables_wrapper form-inline dt-bootstrap no-footer">
            <div class="row">
                <div class="col-sm-12">
                    <table id="tblCardex" class="table table-bordered table-striped dataTable no-footer" style="font-size: 14px" role="grid">
                        <thead>
                            <tr class="info" role="row">
                                <th class="sporting_asc" tabindex="0" aria-controls="tblCardex" rowspan="1" colspan="1" aria-label="Creditos: activate to sort column ascending" style="width: 54px;">
                                    Tipo de Actividad
                                </th>
                                <th class="sporting_asc" tabindex="0" aria-controls="tblCardex" rowspan="1" colspan="1" aria-label="Actividad: activate to sort column ascendig" style="width: 149px;">
                                    Reporte
                                </th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>Eventos academicos relacionados con la carrera</td>
                                <td><a href="{{route('ExportEventos')}}">Descargar</a></td>
                            </tr>
                            <tr>
                                <td>Construccion de prototipos y desarrollo tecnologico</td>
                                <td><a href="{{route('ExportConstruccion')}}">Descargar</a></td>
                            </tr>
                            <tr>
                                <td>Participacion en ediciones</td>
                                <td><a href="{{route('ExportParticipacion')}}">Descargar</a></td>
                            </tr>
                            <tr>
                                <td>Programas de apoyo a la formacion profesional</td>
                                <td><a href="{{route('ExportProgramas')}}">Descargar</a></td>
                            </tr>
                            <tr>
                                <td>Proyecto de investigacion</td>
                                <td><a href="{{route('Export')}}">Descargar</a></td>
                            </tr>
                            <tr>
                                <td>Generico</td>
                                <td><a href="{{route('ExportGenerico')}}">Descargar</a></td>
                            </tr>

                        </tbody>
                    </table>
                </div>
            </div>

        </div>
    </div>
    <br>
    <br>
</div>

@endsection
