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

            <input placeholder="Contraseña" type="password" id="password" name="password" minlength="4" maxlength="20"
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



<!--
<aside class="sidebar">
    <ul>
        <li class="input-menu"><a href="{{ route('register') }}">Registro</a></li>
        <li class="input-menu upper-margin"><a v-on:click="automatic_login1" href="#">Login (user1)</a></li>
        <li class="input-menu" id="b02"><a v-on:click="automatic_login2" href="#">Login (user2)</a></li>
        <li class="input-menu" id="b03"><a v-on:click="wrong_login" href="#">Login erróneo</a></li>
        <li class="input-menu upper-margin" id="b04"><a href="{{ route('password.request') }}">Contraseña olvidada</a>
        </li>
    </ul>
</aside>
<div class="form">
    <h2>Login manual</h2>
    <form method="POST" action="{{ route('login') }}">
        @csrf
        <!-- por razones educativas está desactivado
        <label for="email">Correo</label>
        <input id="email" type="email" name="email" value="{{ old('email') }}" required autofocus>
        <br>
        <label for="password">Password</label>
        <input id="password" type="password" class="{{ $errors->has('password') ? ' is-invalid' : '' }}" name="password"
            required>
        <button type="submit">Login</button>
    </form>
</div>

-->
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
        @if ($errors->has('email'))
        <p><strong>email:</strong>{{ $errors->first('email') }}</p>
        <p>@foreach ($errors as $error)
            {{$error->email}}
            @endforeach</p>
        @endif
    </div>
</div>
@endif


@endsection