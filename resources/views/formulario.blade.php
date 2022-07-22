
@extends('plantilla')
@section('content')
<div class="container">
<form  method="POST" action="{{ route('login') }}">
        @csrf

        <label>Usuario</label>
        
        <input id="email" type="email" class="form-control @error('email') is-invalid @enderror field" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

        @error('email')
        <span class="invalid-feedback" role="alert">
            <strong>{{ $message }}</strong>
        </span>
        @enderror
        
        <br>
		
        <label>Contraseña</label>
		
        <input id="password" type="password" class="form-control @error('password') is-invalid @enderror field" name="password" required autocomplete="current-password">

        @error('password')
        <span class="invalid-feedback" role="alert">
            <strong>{{ $message }}</strong>
        </span>
        @enderror
        <br>
        

		<button class="btn btn-lg btn-primary btn-block align-center" type="submit">
             Ingresar
        </button>
        <br>

        <a href="{{route('Registro')}}"> ¿Aun no tienes Cuenta?</a>

	</form>
    </div>
</html>
@endsection

