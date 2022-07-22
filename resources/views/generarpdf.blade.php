<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Constancia</title>
</head>
<style>
    * {
      box-sizing: border-box;
    }

    /* Create two equal columns that floats next to each other */
    .column {
      float: left;
      width: 50%;
      padding: 10px;
      height: 300px; /* Should be removed. Only for demonstration */
    }

    /* Clear floats after the columns */
    .row:after {
      content: "";
      display: table;
      clear: both;
    }
    </style>
<body>
    @foreach ( $solicitudes as $solicitud)
<img src="{{public_path('documentos/logo-tecnm-pdf.jpg')}}" height="100" >



<h2><b> XXVI. CONSTANCIA DE CUMPLIMIENTO DE ACTIVIDAD COMPLEMENTARIA </b></h2>
<p><b>C. </b></p>
<p><b>Jefe(a) del Departamento de Servicios Escolares o su equivalente en los Institutos Tecnologicos Descentralizados</b></p>
<p><b>PRESENTE</b></p>
<br>
<p>El que suscribe ____________. por este medio se permite hacer de su

   conocimiento que el estudiante {{$solicitud->alumno->nombre}} {{$solicitud->alumno->apellidoP}} {{$solicitud->alumno->apellidoM}} con numero de

   control {{$solicitud->alumno->noControl}} de la carrera de {{$solicitud->alumno->carrera}} han cumplido su

   actividad complementaria con el nivel de desempeño {{$solicitud->desempeño}},

   durante el periodo escolar ENERO - JUNIO con un

   valor curricular de {{$solicitud->actividad->creditos}} creditos.
</p>

<br>
<p>Se extiende la presente en Metepec, Estado de Mexico a {{date('d')}} los dias de {{date('m')}} de 20{{date('y')}} </p>
<br>
                        <center><b>ATENTAMENTE</b></center>
<br>

<div class="row">
    <div class="column" style="background-color:#ffffff;">
        <center><p>______________________</p></center>
      <center><p>Nombre y firma del (de la)
        Profesor(a) responsable
      </p></center>
    </div>
    <div class="column" style="background-color:#ffffff;">
        <center><p>______________________</p></center>
      <center><p>Vo. Bo. del Jefe(a) del
        Departamento de {{$solicitud->alumno->carrera}}
      </p></center>
    </div>
</div>
@endforeach
</body>
</html>
