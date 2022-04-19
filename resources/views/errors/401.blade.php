@extends('layouts.app',
['title' => 'Registro', 'css_files' => ['test_scr_login', 'errorpage'],
'js_files' => ['test_scr_register']])

@section('content')

<div class="container-fluid d-flex align-items-center error-page">
    <div class="background-401"></div>
    <div class="container text-center ">
        <div class="error-number">Access denied</div>
        <div class="error-name">Unauthorized</div>
        <div class="error-link"><a class="" href="{{ route('register') }}">
                Regístrate </a> o <a class="" href="{{ route('login') }}">
                Inicia sesión</a>
            <p>para acceder a todo el contenido</p>
        </div>
    </div>
</div>

@endsection


<!-- <svg height="450px" width="210px">
            <path d="M100 100 L" />
            <circle cx="100" cy="100" r="80" />
            <path id="pol" d="M50 150 L10 420 L200 420 L150 150" />
            <circle id="stop" cx="100" cy="100" r="60" stroke="red" />
            <line x1="50" x2="150" y1="50" y2="150" stroke="red" />
        </svg> -->