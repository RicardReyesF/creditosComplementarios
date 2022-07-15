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
                                            DANIELA ALBOR MEZA
                                        </p>
                                    </li>
                                    <li>
                                        <p>
                                            <strong> Nùmero de Control: </strong>
                                            15280819
                                        </p>
                                    </li>
                                    <li>
                                        <p>
                                            <strong> Carrera: </strong>
                                            INGENIERIA EN SISTEMAS COMPUTACIONALES
                                        </p>
                                    </li>
                                    <li>
                                        <p>
                                            <strong> Promedio General: </strong>
                                            83.37
                                        </p>
                                    </li>
                                    <li>
                                        <p>
                                            <strong> Creditos Complementarios Acumulados: </strong>
                                            3
                                            <strong> de </strong>
                                            5
                                        </p>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-md-2"> </div>
                        <div class="col-md-4"></div>
                            <br>
                            <br>
                            <a href="{{asset('documentos/Prueba.pdf')}}">
                                <center>
                                    <button type="button" class="btn btn-warning btn-lg">
                                        <span class="glyphicon glyphicon-download-alt" aria-hidden="true">

                                        </span>
                                        Descargar
                                    </button>
                                </center>
                            </a>
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
                                                Materia
                                            </th>
                                            <th class="sporting_asc" tabindex="0" aria-controls="tblCardex" rowspan="1" colspan="1" aria-label="Creditos: activate to sort column ascending" style="width: 54px;">
                                                Creditos
                                            </th>
                                            <th class="sporting_asc" tabindex="0" aria-controls="tblCardex" rowspan="1" colspan="1" aria-label="Actividad: activate to sort column ascendig" style="width: 149px;">
                                                Actividad
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
                                            <th class="sporting_asc" tabindex="0" aria-controls="tblCardex" rowspan="1" colspan="1" aria-label="Estatus: activate to sort column ascending" style="width: 30px;">
                                                Estatus
                                            </th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr role="row" class="odd">
                                            <td class="sorting_1">4</td>
                                            <td>2219</td>
                                            <td>2</td>
                                            <td align="left">Curso Laravel</td>
                                            <td align="left">Luis Estrada Manuel</td>
                                            <td>ACT_EXTRAES</td>
                                            <td>20</td>
                                            <td>En Curso</td>
                                        </tr>
                                        <tr role="row" class="odd">
                                            <td class="sorting_1">4</td>
                                            <td>2043</td>
                                            <td>3</td>
                                            <td align="left">Excel basico</td>
                                            <td align="left">Luis Roberto Cruz</td>
                                            <td>COMPLEMENTARIA_GENERICA</td>
                                            <td>20</td>
                                            <td>Acreditado</td>
                                        </tr>
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