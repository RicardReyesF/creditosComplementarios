<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Formulario</title>
    <link href="{{asset('css/style.css')}}" rel="stylesheet">
</head>
<div class="container">
    <img src="{{asset('img/logoTec.png')}}" class="img-responsive">
</div>
<center><form  id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none"></center>
@csrf
<div class="container">
    <nav class="navbar navbar-default" role="navigation">
        <div class="container-fluid">
            <div class="navbar-header">
                <a class="navbar-brand">Creditos Complementarios ENERO - JUNIO 2022</a>
                <a class="navbar-brand" href="{{route('Descarga')}}">Detalles</a>
                <a class="navbar-brand" href="{{route('logout')}}" onclick="event.preventDefault();
                document.getElementById('logout-form').submit();">
                    Salir
                </a>

                </form>
            </div>
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav navbar-right">
                    <li>
                        <a href="">Salir</a>
                    </li>
                </ul>
            </div>
        </div>

    </nav>
</div>
<div class="container">
    <div class="panel panel-primary">
        <div class="panel-heading">
            <h3 class="panel-tittle"> Actividades </h3>
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
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <div class="table tablesorter">
                <div id="tblCardex_wraper" class="dataTables_wrapper form-inline dt-bootstrap no-footer">
                    <div class="row">
                        <div class="col-sm-12">
                            <table id="tblCardex" class="table table-bordered table-striped dataTable no-footer" style="font-size: 10px" role="grid">
                                <thead>
                                    <tr class="info" role="row">
                                        
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
                                        <th class="sporting_asc" tabindex="0" aria-controls="tblCardex" rowspan="1" colspan="1" aria-label="Seleccion: activate to sort column ascending" style="width: 30px;">
                                            Seleccion
                                        </th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach($actividades as $actividad)
                                    <tr role="row" class="odd">
                                        
                                        <td class="id">{{$actividad->id}}</td>
                                        <td class="creditos">{{$actividad->creditos}}</td>
                                        <td class="actividad" align="left">{{$actividad->actividad}}</td>
                                        <td class="responsable" align="left">{{$actividad->responsable}}</td>
                                        <td class="tipo">{{$actividad->tipo}}</td>
                                        <td class="horas">{{$actividad->horas}}</td>
                                        <td>
                                            <a type="button" class="btn btn-prymari" href="{{route('Solicitud',['id' => $actividad->id, 'user' =>$actividad->userAlta, 'tipo' => $actividad->tipo])}}"> Unirse </a>
                                        </td>

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
