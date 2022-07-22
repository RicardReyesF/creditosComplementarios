@extends('plantillaAdmin')
@section('content')
<div class="container" style="text-align: center;">
    <form action="{{route('Actividadnueva1')}}" method="POST">
        @csrf


        <label>Creditos</label>
        <select name="creditos" class="form-control" id="creditos">
            <option value=" " selected disabled hidden>Seleccione una opcion</option>
            <option> 1 </option>
            <option> 2 </option>
        </select>

        <label>Actividad</label>
        <input type="text" class="form-control" name="actividad"> 
        <label>Responsable</label>
        <input type="text" class="form-control" name="responsable"> 

        <label>Tipo</label>
        <select name="tipo" class="form-control">
            <option value=" " selected disabled hidden>Seleccione una opcion</option>
            <option> Eventos academicos relacionados con la carrera </option>
            <option> Construccion de prototipos y desarrollo tecnologico </option>
            <option> Participacion en ediciones </option>
            <option> Programas de apoyo a la formacion profecional </option>
            <option> Proyectos de investigacion </option>
            <option> Generico </option>
        </select>

        @if("creditos" == 1)
        <label>Horas</label>
        <select name="horas" class="form-control">
            <option value="20" selected disabled hidden>Seleccione una opcion</option>
        </select>
        @elseif("creditos" == 2)
        <select name="horas" class="form-control">
            <option value="40" selected disabled hidden>Seleccione una opcion</option>
        </select>
        @endif
        <label>Fecha Inicio</label>
        <input type="date" class="form-control" name="fechaInicio">
        
        <label>Fecha Terminacion</label>
        <input type="date" class="form-control" name="fechaTerminacion"> 


        <br>

        <div style="text-align:center ;">
            <button class="btn btn-primary " id="sidebarToggle">Registrar</button>
        </div>

    </form>
</div>


<!-- Bootstrap core JS-->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
<!-- Core theme JS-->
<script src="js/scripts.js"></script>
@endsection