<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <meta name="csrf-token" content="{{ csrf_token() }}" />
    <title></title>
    <link href="{{ asset('css/app.css') }}" rel="stylesheet" />
    <link href="{{ asset('css/cssFatima.css') }}" rel="stylesheet" />
    <link href="{{ asset('css/cssScrabble.css') }}" rel="stylesheet" />
    <style>
    @import url('https://fonts.googleapis.com/css2?family=Cardo:ital,wght@0,400;0,700;1,400&family=Urbanist:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;1,200;1,400&display=swap');
    </style>
    <script src="https://kit.fontawesome.com/1f856bd712.js" crossorigin="anonymous"></script>
</head>

<body>
    <div id="">
        <!--MENÚ DE NAVEGACIÓN / HEADER-->
        <nav class="navbar navbar-expand-xl overlay" id="barraNav">

            <button class="navbar-toggler navegacion float-left" type="button" data-toggle="collapse"
                data-target="#collapsibleNavbar">
                <div class="navegacion iconoNav"><i class="fa-solid fa-bars"></i>
                </div>
            </button>

            <div class="collapse navbar-collapse despliegue" id="collapsibleNavbar">
                <ul class="navbar-nav nav-typografy">
                    <li class="nav-item">
                        <a class="nav-link nav-typografy" href="../#app">Gutenberg</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link nav-typografy" href="../#trabajos">Trabajos en el S.XV</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link nav-typografy" href="../#difusion">Difusión de la idea</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link nav-typografy" href="../#españa">Primeros libros en España</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link nav-typografy" href="../#lugares-valencia">Lugares emblemáticos en
                            Valencia</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link nav-typografy" href="scrabble">Scrabble</a>
                    </li>
                    <!-- <li>
                        
                    </li> -->
                </ul>
            </div>
            <div class="d-flex justify-content-between">
                <div class="navbar-brand pr-2"><a href="dashboard"><i class="fa-solid fa-circle-user"
                            style="font-size: 40px; color: white"></i></a>
                </div>
                <div class="navbar-brand pr-2"><a href="http://www.ceedcv.es"><img class="img-link" width="140px"
                            alt="Redireccionamiento a la página del CEEDCV" src="img/logo-ceedcv2.png"></a>
                </div>
            </div>
        </nav>

        <main>
            @yield('content')
        </main>

        <!-- Footer -->
        <footer class="text-center bg-secondary text-light">
            <!-- Grid container -->

            <!-- Copyright -->
            <div class="text-center p-3 bg-dark">
                Fátima María Rahmatí Barberá. Diseño de Interfaces Web. 2021-2022
            </div>
            <!-- Copyright -->
        </footer>
        <!-- Footer -->

    </div>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}"></script>
    <script src="{{ asset('js/jsFatima.js') }}"></script>
    @foreach ($js_files as $file)
    <script src="{{ asset('js/' . $file . '.js') }}"></script>
    @endforeach

    @yield('internal_script')
</body>

</html>