@extends('layouts.app',
['title' => 'Registro', 'css_files' => ['test_scr_login', 'errorpage'],
'js_files' => ['test_scr_register']])

@section('content')

<div class="container-fluid d-flex align-items-center error-page">
    <div class="background-403"></div>
    <div class="container text-center ">
        <div class="error-number">Bad credentials</div>
        <div class="error-name">No access... Try again</div>
        <div class="error-link"><a class="" href="{{ route('register') }}">
                Regístrate </a> o <a class="" href="{{ route('login') }}">
                Inicia sesión</a>
            <p>para acceder a todo el contenido</p>
        </div>
    </div>
</div>

@endsection