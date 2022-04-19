@extends('layouts.app',
['title' => 'Login', 'css_files' => ['test_scr_login'],
'js_files' => ['test_scr_login']])

@section('content')

<div class="container-fluid register-page my-5">
    <h2 class="d-flex justify-content-center mb-4">
        Inicia sesión
    </h2>
    <div class="container d-flex justify-content-center align-self-center">
        <form method="POST" action="{{ route('login') }}">

            <input type="email" id="email" name="email" placeholder="Email" value="{{old('useremail')}}"
                autocomplete="on" required="" /><br>

            @if ($errors->has('email'))
            <p>{{ $errors->first('email') }}</p>
            @endif

            <input placeholder="Contraseña" type="password" id="password" name="password" minlength="5" maxlength="20"
                required="" /><br>

            <input class="boton botonlink" type="submit" value="Enviar" />
        </form>
    </div>
    <div class="d-flex justify-content-center mt-5"><a class="pl-1" href="{{ route('password.request') }}">
            ¿Has olvidado tu contraseña?</a></div>

    <div class="d-flex justify-content-center mt-3">¿Aun no tienes una cuenta? <a class="pl-1"
            href="{{ route('register') }}">
            Regístrate</a></div>
</div>

@endsection