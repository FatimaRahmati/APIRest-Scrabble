<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <meta name="csrf-token" content="{{ csrf_token() }}" />
    <title>

    </title>
    <link href="{{ asset('css/app.css') }}" rel="stylesheet" />
    <link href="{{ asset('css/cssFatima.css') }}" rel="stylesheet" />

</head>

<body>

    <!--MENÚ DE NAVEGACIÓN / HEADER-->
    <nav class="navbar sticky-top bg-dark navbar-dark ">
        <a class="navbar-brand" href="#">Descubre la imprenta</a>
        <a class="" href="https://www.ceedcv.es"><img class="" width="150px"
                alt="Redireccionamiento a la página del CEEDCV" src="img/logo-ceedcv2.png"></a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="collapsibleNavbar">
            <ul class="nav-item">
                <h5 class="h5"><a class="typografy-stylo nav-link" href="#">Área Imprenta</a>
                </h5>
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link" href="#">Gutenberg</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Trabajos en el S.XV</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Difusión</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Primeros libros España</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Lugares emblemáticos Valencia</a>
                    </li>
                </ul>
                </li>
                <h5 class="h5"><a class="typografy-stylo nav-link" href="#">Área Scrabble</a>
                </h5>
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link" href="#">Cómo jugar</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Inicia Sesión</a>
                    </li>
                </ul>

            </ul>
        </div>
    </nav>


    <main class="prueba">
        @yield('content')
    </main>




    <!--FOOTER-->
    <section class="">
        <!-- Footer -->
        <footer class="text-center bg-secondary text-light">
            <!-- Grid container -->
            <div class="container p-4 pb-0">
                <!-- Section: CTA -->
                <section class="">
                    <p class="d-flex justify-content-center align-items-center">
                        <span class="me-3">Register for free</span>
                        <button type="button" class="btn btn-outline-light btn-rounded">
                            Sign up!
                        </button>
                    </p>
                </section>
                <!-- Section: CTA -->
            </div>
            <!-- Grid container -->

            <!-- Copyright -->
            <div class="text-center p-3 bg-dark">
                Fátima María Rahmatí Barberá. Diseño de Interfaces Web. 2021-2022
            </div>
            <!-- Copyright -->
        </footer>
        <!-- Footer -->
    </section>


    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}"></script>
    @foreach ($js_files as $file)
    <script src="{{ asset('js/' . $file . '.js') }}"></script>
    @endforeach

    @yield('internal_script')
</body>

</html>