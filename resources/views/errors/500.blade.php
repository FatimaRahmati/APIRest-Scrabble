@extends('layouts.app',
['title' => 'Registro', 'css_files' => ['test_scr_login', 'errorpage'],
'js_files' => ['test_scr_register']])

@section('content')

<div class="container-fluid d-flex align-items-center error-page">
    <div class="background-500"></div>
    <div class="container text-center ">
        <div class="error-number"> Ooopsss!</div>
        <div class="error-name">Internal server error...</div>
    </div>
</div>

@endsection