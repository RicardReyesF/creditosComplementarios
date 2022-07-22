@extends('plantillaAdmin')
@section('content')
<div class="container" style="text-align: center;">
@foreach($actividades as $actividad)
    <form action="{{route('Actualizar',$actividad->id)}}" method="GET">
        @csrf
        @method('PUT')
        <label>ID</label>
        <input type="text" class="form-control" value="{{$actividad->id}}" name="id" disabled>

        <label>Creditos</label>
        <select name="creditos" class="form-control" id="creditos">
            <option value=" {{$actividad->creditos}} " >{{$actividad->creditos}}</option>
            <option> 1 </option>
            <option> 2 </option>
        </select>

        <label>Actividad</label>
        <input type="text" class="form-control" name="actividad" value="{{$actividad->actividad}}">
        <label>Responsable</label>
        <input type="text" class="form-control" name="responsable" value="{{$actividad->responsable}}">

        <label>Tipo</label>
        <select name="tipo" class="form-control">
            <option value="{{$actividad->tipo}} " >{{$actividad->tipo}}</option>
            <option> Eventos academicos relacionados con la carrera </option>
            <option> Construccion de prototipos y desarrollo tecnologico </option>
            <option> Participacion en ediciones </option>
            <option> Programas de apoyo a la formacion profecional </option>
            <option> Proyectos de investigacion </option>
            <option> Generico </option>
        </select>

        <label>Fecha Inicio</label>
        <input type="date" class="form-control" name="fechaInicio" value="{{$actividad->fechaInicio}}">

        <label>Fecha Terminacion</label>
        <input type="date" class="form-control" name="fechaTerminacion" value="{{$actividad->fechaTerminacion}}">
        @endforeach

        <br>

        <div style="text-align:center ;">
            <button class="btn btn-primary " id="sidebarToggle">Actualizar</button>
        </div>

    </form>
</div>


<!-- Bootstrap core JS-->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
<!-- Core theme JS-->
<script src="js/scripts.js"></script>
@endsection
