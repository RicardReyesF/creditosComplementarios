@extends('plantillaAdmin')
@section('content')
    <div class="container">
        <div class="table tablesorter">
            <div id="tblCardex_wraper" class="dataTables_wrapper form-inline dt-bootstrap no-footer">
                <div class="row">
                    <div class="col-sm-12">
                        <table id="tblCardex" class="table table-bordered table-striped dataTable no-footer"
                            style="font-size: 14px" role="grid">
                            <thead>
                                <tr class="info" role="row">

                                    <th class="sporting_asc" tabindex="0" aria-controls="tblCardex" rowspan="1"
                                        colspan="1" aria-label="Creditos: activate to sort column ascending"
                                        style="width: 54px;">
                                        Creditos
                                    </th>
                                    <th class="sporting_asc" tabindex="0" aria-controls="tblCardex" rowspan="1"
                                        colspan="1" aria-label="Actividad: activate to sort column ascendig"
                                        style="width: 149px;">
                                        Tipo Actividad
                                    </th>
                                    <th class="sporting_asc" tabindex="0" aria-controls="tblCardex" rowspan="1"
                                        colspan="1" aria-label="Actividad: activate to sort column ascendig"
                                        style="width: 149px;">
                                        Semestre
                                    </th>
                                    <th class="sporting_asc" tabindex="0" aria-controls="tblCardex" rowspan="1"
                                        colspan="1" aria-label="No. Control: activate to sort column ascending"
                                        style="width: 170px;">
                                        No. Control
                                    </th>
                                    <th class="sporting_asc" tabindex="0" aria-controls="tblCardex" rowspan="1"
                                        colspan="1" aria-label="Nombre: activate to sort column ascending"
                                        style="width: 170px;">
                                        Nombre
                                    </th>
                                    <th class="sporting_asc" tabindex="0" aria-controls="tblCardex" rowspan="1"
                                        colspan="1" aria-label="Seleccion: activate to sort column ascending"
                                        style="width: 47px;">
                                        Aceptar
                                    </th>
                                    <th class="sporting_asc" tabindex="0" aria-controls="tblCardex" rowspan="1"
                                        colspan="1" aria-label="Seleccion: activate to sort column ascending"
                                        style="width: 47px;">
                                        Denegar
                                    </th>

                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($solicitudes as $solicitud)
                                    <tr role="row" class="odd">
                                        <td>{{ $solicitud->actividad->creditos }}</td>
                                        <td>{{ $solicitud->actividad->actividad }}</td>
                                        <td>{{ $solicitud->alumno->semestre }}</td>
                                        <td>{{ $solicitud->alumno->noControl }}</td>
                                        <td>{{ $solicitud->alumno->nombre }}</td>
                                        <td>
                                            <form method="POST"
                                                action="{{ route('AceptarSolicitud', ['alumno_id' => $solicitud->alumno->noControl, 'actividad_id' => $solicitud->actividad->id]) }}">
                                                @csrf
                                                <button type="submit" class="btn btn-success">
                                                    Aceptar
                                                </button>
                                            </form>
                                        </td>
                                        <td>
                                            <a type="button" class="btn btn-danger"
                                                href="{{ route('DenegarSolicitud', $solicitud->id) }}"> Denegar </a>
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>

            </div>
        </div>
        <br>
        <br>
        <div class="w3-section" style="text-align:end;">

            <a class="btn btn-success " id="sidebarToggle">Aceptar</a>
            <a class="btn btn-danger " id="sidebarToggle">Denegar</a>
        </div>

    </div>
@endsection
