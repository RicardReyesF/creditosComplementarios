@extends('plantilla')
@section('content')

    <div class="container">
        <div class="panel panel-primary">
            <div class="panel-heading">
                <h3 class="panel-tittle"> Detalle </h3>
            </div>
            <div class="panel-body">
                <div class="panel-body">
                    <div class="row">
                        <div class="col-md-8">
                            <div class="thumbnail">
                                <ul>
                                    <li>
                                        <p>
                                            <strong> Nombre: </strong>
                                            {{Auth::user()->nombre}} {{Auth::user()->apellidoP}} {{Auth::user()->apellidoM}}
                                        </p>
                                    </li>
                                    <li>
                                        <p>
                                            <strong> Nùmero de Control: </strong>
                                            {{Auth::user()->noControl}}
                                        </p>
                                    </li>
                                    <li>
                                        <p>
                                            <strong> Carrera: </strong>
                                            {{Auth::user()->carrera}}
                                        </p>
                                    </li>
                                    <li>
                                        <p>
                                            <strong> Semestre: </strong>
                                            {{Auth::user()->semestre}}
                                        </p>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-md-2"> </div>
                        <div class="col-md-4"></div>
                            <br>
                            <br>

                        </div>
                </div>
                <div class="table tablesorter">
                    <div id="tblCardex_wraper" class="dataTables_wrapper form-inline dt-bootstrap no-footer">
                        <div class="row">
                            <div class="col-sm-12">
                                <table id="tblCardex" class="table table-bordered table-striped dataTable no-footer" style="font-size: 10px" role="grid">
                                    <thead>
                                        <tr class="info" role="row">
                                            <th class="sporting_asc" tabindex="0" aria-controls="tblCardex" rowspan="1" colspan="1" aria-sort="ascending" aria-label="Semestre: activate to sort column descending" style="width: 59px;">
                                                Semestre
                                            </th>
                                            <th class="sporting_asc" tabindex="0" aria-controls="tblCardex" rowspan="1" colaspan="1" aria-sort="ascending" aria-label="Materia: activate to sort column ascendig" style="width: 47px;">
                                                Tipo de Actividad
                                            </th>
                                            <th class="sporting_asc" tabindex="0" aria-controls="tblCardex" rowspan="1" colspan="1" aria-label="Creditos: activate to sort column ascending" style="width: 54px;">
                                                Creditos
                                            </th>
                                            <th class="sporting_asc" tabindex="0" aria-controls="tblCardex" rowspan="1" colspan="1" aria-label="Responsable: activate to sort column ascending" style="width: 170px;">
                                                Responsable
                                            </th>
                                            <th class="sporting_asc" tabindex="0" aria-controls="tblCardex" rowspan="1" colspan="1" aria-label="Horas: activate to sort column ascending" style="width: 170px;">
                                                Horas
                                            </th>
                                            <th class="sporting_asc" tabindex="0" aria-controls="tblCardex" rowspan="1" colspan="1" aria-label="Estatus: activate to sort column ascending" style="width: 30px;">
                                                Estatus
                                            </th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($solicitudes as $solicitud )
                                        <tr role="row" class="odd">
                                            <td>{{ $solicitud->alumno->semestre }}</td>
                                            <td>{{ $solicitud->actividad->actividad }}</td>
                                            <td>{{ $solicitud->actividad->creditos }}</td>
                                            <td>{{ $solicitud->actividad->responsable }}</td>
                                            <td>{{ $solicitud->actividad->horas }}</td>
                                            @if ($solicitud->estado == 1)
                                            <td>
                                                <p>Solicitado</p>
                                            </td>

                                            @elseif ($solicitud->estado == 2)
                                                <td>
                                                    <p>En curso</p>
                                                </td>
                                            @else
                                                <td>
                                                    <a href="{{route('Constancia')}}">descargar</a>
                                                </td>

                                            @endif
                                        </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
            <br>
            <br>
        </div>
        <br>


</body>

</html>
@endsection
