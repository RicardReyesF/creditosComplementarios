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
                                    Creditos
                                </th>
                                <th class="sporting_asc" tabindex="0" aria-controls="tblCardex" rowspan="1" colspan="1" aria-label="Actividad: activate to sort column ascendig" style="width: 149px;">
                                    Tipo Actividad
                                </th>
                                <th class="sporting_asc" tabindex="0" aria-controls="tblCardex" rowspan="1" colspan="1" aria-label="Actividad: activate to sort column ascendig" style="width: 149px;">
                                    Semestre
                                </th>
                                <th class="sporting_asc" tabindex="0" aria-controls="tblCardex" rowspan="1" colspan="1" aria-label="Actividad: activate to sort column ascendig" style="width: 149px;">
                                    Carrera
                                </th>
                                <th class="sporting_asc" tabindex="0" aria-controls="tblCardex" rowspan="1" colspan="1" aria-label="No. Control: activate to sort column ascending" style="width: 170px;">
                                    No. Control
                                </th>
                                <th class="sporting_asc" tabindex="0" aria-controls="tblCardex" rowspan="1" colspan="1" aria-label="Nombre: activate to sort column ascending" style="width: 170px;">
                                    Nombre
                                </th>
                                <th class="sporting_asc" tabindex="0" aria-controls="tblCardex" rowspan="1" colspan="1" aria-label="Nombre: activate to sort column ascending" style="width: 170px;">
                                    Desempeño
                                </th>
                                <th class="sporting_asc" tabindex="0" aria-controls="tblCardex" rowspan="1" colspan="1" aria-label="Seleccion: activate to sort column ascending" style="width: 47px;">
                                    Seleccion
                                </th>

                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($solicitudes as $solicitud )
                            <tr role="row" class="odd">
                                <td>{{$solicitud->creditos}}</td>
                                <td>{{$solicitud->actividad}}</td>
                                @foreach ($solicitud->alumnos->filter(fn($item) => $item->pivot->estado == 1) as $alumno )
                                <td>{{$alumno->semestre}}</td>
                                <td>{{$alumno->carrera}}</td>
                                <td>{{$alumno->noControl}}</td>
                                <td>{{$alumno->nombre}} {{$alumno->apellidoP}} {{$alumno->apellidoM}}</td>
                                @endforeach
                                <form action="{{ route('LiberarSolicitud') }}" method="POST">
                                    @csrf
                                    <input type="hidden" name="alumno_id" value="{{  }}">
                                    <input type="hidden" name="actividad_id">
                                    <td>
                                        <select name="calificacion"  class="calificacion" id="calf">
                                                <option $value="{{$solicitud->desempeño}}">{{$solicitud->desempeño}}</option>
                                                    <option value="1"> Sufuciente </option>
                                                    <option value="2"> Bueno </option>
                                                    <option value="3"> Notable </option>
                                                    <option value="4"> Excelente </option>
                                        </select>
                                    </td>
                                    <td>
                                        <a type="button" class="btn btn-success" href="{{route('LiberarSolicitud',)}}" method="GET"> Liberar </a>
                                    </td>
                                </form>
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
</div>
@endsection
