<!-- el fichero css de login me vale para el registro -->
@extends('layouts.app',
['title' => 'Registro', 'css_files' => ['test_scr_login', 'register'],
'js_files' => ['test_scr_register']])

@section('content')

<div class="container-fluid register-page my-5">
    <h2 class="d-flex justify-content-center mb-4">
        Regístrate ahora y comienza a jugar
    </h2>
    <div class="container d-flex justify-content-center align-self-center">
        <form action="{{ route('register') }}" method="POST">

            <input type="text" id="name" name="name" maxlength="20" placeholder="Nombre de usuario"
                value="{{old('name')}}" autocomplete="on" required /><br>

            @if ($errors->has('name'))
            <p>{{ $errors->first('name') }}</p>
            @endif

            <input type="email" id="email" name="email" placeholder="Email" value="{{old('email')}}" autocomplete="on"
                required /><br>

            @if ($errors->has('email'))
            <p>{{ $errors->first('email') }}</p>
            @endif

            <input type="password" id="password" name="password" placeholder="Contraseña" minlength="5" maxlength="20"
                autocomplete="off" required /><br>

            <input type="password" id="password-confirm" name="password_confirmation"
                placeholder="Confirme su contraseña" minlength="5" maxlength="20" autocomplete="off" required /><br>

            @if ($errors->has('password'))
            <p>{{ $errors->first('password') }}</p>
            @endif

            <input type="text" id="country" name="country" placeholder="País (primeras dos letras)" autocomplete="on"
                required /><br>

            @if ($errors->has('country'))
            <p>{{ $errors->first('country') }}</p>
            @endif

            <select id="languages" name="languages">
                <option value="español">Español</option>
                <option value="ingles">Inglés</option>
            </select><br>
            <input class="boton botonlink" type="submit" value="Enviar">
        </form>
    </div>
    <div class="d-flex justify-content-center mt-4">¿Ya tienes una cuenta? <a class="pl-1" href="{{ route('login') }}">
            Inicia sesión</a></div>
</div>

@endsection