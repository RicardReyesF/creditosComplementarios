@extends('plantillaAdmin')
@section('content')
<div style="text-align:end ;">
    <a class="btn btn-warning " type="button" href="{{route('Actividadnueva')}}">Crear Nueva</a>
</div>
<br>
<br>

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
                            <th class="sporting_asc" tabindex="0" aria-controls="tblCardex" rowspan="1" colspan="1" aria-label="Responsable: activate to sort column ascending" style="width: 170px;">
                                Responsable
                            </th>
                            <th class="sporting_asc" tabindex="0" aria-controls="tblCardex" rowspan="1" colspan="1" aria-label="Tipo: activate to sort column ascending" style="width: 170px;">
                                Tipo
                            </th>
                            <th class="sporting_asc" tabindex="0" aria-controls="tblCardex" rowspan="1" colspan="1" aria-label="Horas: activate to sort column ascending" style="width: 170px;">
                                Horas
                            </th>
                            <th class="sporting_asc" tabindex="0" aria-controls="tblCardex" rowspan="1" colspan="1" aria-label="Modificar: activate to sort column ascending" style="width: 47px;">
                                Modificar
                            </th>
                            <th class="sporting_asc" tabindex="0" aria-controls="tblCardex" rowspan="1" colspan="1" aria-label="Eliminar: activate to sort column ascending" style="width: 47px;">
                                Eliminar
                            </th>

                        </tr>
                    </thead>
                    <tbody>
                        @foreach($actividades as $actividad)
                        <tr role="row" class="odd">
                            <td>{{$actividad->creditos}}</td>
                            <td align="left">{{$actividad->actividad}}</td>
                            <td align="left">{{$actividad->responsable}}</td>
                            <td>{{$actividad->tipo}}</td>
                            <td>{{$actividad->horas}}</td>
                            <td>
                                <a type="button" class="btn btn-success" href="{{route('Modificar',$actividad->id)}}"> Modificar </a>
                            </td>
                            <td>
                                <a type="button" class="btn btn-primary" href="{{route('Eliminar',$actividad->id)}}"> Eliminar </a>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>

    </div>
</div>
<!-- Bootstrap core JS-->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
<!-- Core theme JS-->
<script src="js/scripts.js"></script>
@endsection