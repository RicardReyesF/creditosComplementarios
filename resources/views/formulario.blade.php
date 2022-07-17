
@extends('plantilla')
@section('content')
<div class="container">
	<form class="user">
        @csrf

        <label>Usuario</label>
		<input type="text" class="field" name="noControl"> <br/>

        <label>Contraseña</label>
		<input type="text" class="field" name="password"> <br/>

		<button class="btn btn-lg btn-primary btn-block align-center" type="submit">
             Ingresar
        </button>

	</form>
    </div>
</html>
@endsection

