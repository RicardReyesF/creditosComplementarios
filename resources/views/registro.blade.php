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
    <br>
    <div class="container">
        <nav class="navbar navbar-default" role="navigation">
            <div class="container-fluid">
                <div class="navbar-header">
                    <a class="navbar-brand">Registro Creditos Complementarios ENERO - JUNIO 2022</a>
                </div>
            </div>

        </nav>
    </div>
<div class="container">
	<form action="{{route('register')}}" method="POST">
        @csrf

        <label>Numero de Control</label>
		<input type="text" class="field" name="noControl"> <br/>

        <label>Apellido Paterno</label>
		<input type="text" class="field" name="apellidoP"> <br/>

        <label>Apellido Materno</label>
		<input type="text" class="field" name="apellidoM"> <br/>

        <label>Nombre</label>
		<input type="text" class="field" name="name"> <br/>

        <label>Carrera</label>
		<input type="text" class="field" name="carrera"> <br/>

        <label>Semestre</label>
		<input type="text" class="field" name="semestre"> <br/>

        <label>Correo</label>
		<input type="email" class="field" name="email"> <br/>

        <label>Contraseña</label>
		<input type="password" class="field" name="password"> <br/>

		<button class="btn btn-lg btn-primary btn-block align-center" type="submit">
             Registrar
        </button>
        <br>
        <a href="{{route('Formulario')}}"> ¿Ya tienes Cuenta?</a>

	</form>
    </div>
</html>


