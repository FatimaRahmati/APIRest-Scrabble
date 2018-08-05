<!DOCTYPE html>
<!-- obtiene de la configuracion (app.php) el idioma por defecto --> 
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token para evitar ataques de petición de sitios cruzados -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <!-- Obtiene del fichero /config/app.php la variable name, en caso contrario
         usa Laravel. Lo une con el valor de la variable title que se le pasa desde 
         el template, con la directiva extends -->
    <title>{{ config('app.name', 'Laravel') . '. '}} {{ $title or '' }}</title>

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet">

    <!-- Carga los estilos css -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link href="{{ asset('css/test.css') }}" rel="stylesheet">

    @foreach ($css_files as $file)
        <link href="{{ asset('css/' . $file . '.css') }}" rel="stylesheet">
    @endforeach
</head>
<body>
    <div id="app"> <!-- contenedor para trabajo con Vue -->
        <header class="title">{{ config('app.name', 'Laravel') . '. ' }} {{ $title or '' }}</header>
    
        <main class="py-4">
            @yield('content')
        </main>
    </div>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}"></script>
</body>
</html>