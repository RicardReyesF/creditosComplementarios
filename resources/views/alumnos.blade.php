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

<div class="container">
    <nav class="navbar navbar-default" role="navigation">
        <div class="container-fluid">
            <div class="navbar-header">
                <a class="navbar-brand">Creditos Complementarios ENERO - JUNIO 2022</a>

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
                                        <strong> Creditos Complementarios Acumulados: </strong>
                                        3
                                        <strong> de </strong>
                                        5
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
                                        <th class="sporting_asc" tabindex="0" aria-controls="tblCardex" rowspan="1" colspan="1" aria-label="Seleccion: activate to sort column ascending" style="width: 30px;">
                                            Seleccion
                                        </th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach($actividades as $actividad)
                                    <tr role="row" class="odd">
                                        <td class="sorting_1">4</td>
                                        <td class="id">{{$actividad->id}}</td>
                                        <td class="creditos">{{$actividad->creditos}}</td>
                                        <td class="actividad" align="left">{{$actividad->actividad}}</td>
                                        <td class="responsable" align="left">{{$actividad->responsable}}</td>
                                        <td class="tipo">{{$actividad->tipo}}</td>
                                        <td class="horas">{{$actividad->horas}}</td>
                                        <td><input type="checkbox" id="seleccion" class="checkbox_id" name="seleccion" value="Actividad" style="width: 47px;" data-id="{{$actividad->id}}"></td>
                                    </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>

                </div>
            </div>
        </div>
        <form action="{{route('Solicitud')}}">
            <div style="text-align: right;">
                <button class="btn btn-lg btn-primary btn-block registrar" type="submit" id="registrar">
                    Registrar
                </button>
            </div>
        </form>
        <br>
        <br>
    </div>
    <br>

    <script>
        $("#registrar").on("click", () => {

            var arrayFila = [];

            $(".checkbox_id:checked").each((indice, elemento) => {
                let fila = $(elemento).parents("tr");
                let seleccion = $(elemento).val();
                let id_actividad = fila.find(".id")
                let creditos = fila.find(".creditos").val();
                let actividad = fila.find(".actividad").val();
                let tipo = fila.find(".tipo").val();
                let horas = fila.find(".horas").val();
                

                arrayFila.push({
                    id_actividad: id_actividad,
                    creditos: persona,
                    actividad: fecha,
                    tipo: ciudad,
                    horas: horas
                });
            });
            return arrayFila;

            console.log(arrayFila);
            let base_url = "";
            $.ajax({
                url: base_url + "solicitud/actividad",
                type: "POST",
                dataType: "json",
                data: {
                    personas: arrayFila
                },
                success: function(json) {},
                complete: function(textStatus, jqXHR) {},
                error: function(textStatus, errorThrown, jqXHR) {}
            });

        });
    </script>



    </body>

</html>