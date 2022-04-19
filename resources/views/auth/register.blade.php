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

            <input type="email" id="email" name="email" placeholder="Email" value="{{old('email')}}" autocomplete="on"
                required /><br>

            <input type="password" id="password" name="password" placeholder="Contraseña" minlength="4" maxlength="20"
                autocomplete="off" required /><br>

            <input type="password" id="password-confirm" name="password_confirmation"
                placeholder="Confirme su contraseña" minlength="6" maxlength="20" autocomplete="off" required /><br>

            <input type="text" id="country" name="country" placeholder="País (primeras dos letras)" autocomplete="on"
                required /><br>

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


<!-- <aside class="sidebar">
        <ul>
            <li class="input-menu"><a v-on:click="automatic_register" href="#">Registro automático</a></li>
            <li class="input-menu"><a v-on:click="wrong_register" href="#">Registro erróneo</a></li>
        </ul>
    </aside>
    <div class="form">
        <h2>Registro manual</h2>
        <form method="POST" action="{{ route('register') }}"> 
            @csrf <!-- por razones educativas está desactivado
<label for="name">Nombre</label>
<input id="name" type="text" name="name" value="+{{ old('name') }}" required autofocus>
<br>
<label for="email">Correo electrónico</label>
<input id="email" type="email" name="email" value="{{ old('email') }}" required>
<br>
<label for="password">Contraseña</label>
<input id="password" type="password" name="password" required>
<br>
<label for="password-confirm">Confirma la contraseña</label>
<!-- es obligatorio que el name sea XXXX_confirmation, donde XXXX es el 
                 nombre del campo a confirmar
<input id="password-confirm" type="password" name="password_confirmation" required>
<br>
<label for="country">País</label>
<input id="country" type="text" name="country" required>
<br>
<button type="submit">
    Registrar
</button>
</form>
</div> -->



@if ($errors->isNotEmpty())
<div class="error">
    <div>
        <h4>Error modo 1</h4>
        <ul>
            @foreach ($errors->all() as $error)
            <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
    <div>
        <h4>Error modo 2</h4>
        @if ($errors->has('name'))
        <p><strong>nombre:</strong>{{ $errors->first('name') }}</p>
        @endif
        @if ($errors->has('email'))
        <p><strong>Correo:</strong>{{ $errors->first('email') }}</p>
        @endif
        @if ($errors->has('password'))
        <p><strong>Contraseña:</strong>{{ $errors->first('password') }}</p>
        @endif
        @if ($errors->has('country'))
        <p><strong>País:</strong>{{ $errors->first('country') }}</p>
        @endif
    </div>
</div>
@endif
@endsection