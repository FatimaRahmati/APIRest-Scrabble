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
    <style>
    @import url('https://fonts.googleapis.com/css2?family=Cardo:ital,wght@0,400;0,700;1,400&family=Urbanist:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;1,200;1,400&display=swap');
    </style>
</head>

<body>

    <!--MENÚ DE NAVEGACIÓN / HEADER-->
    <nav class="navbar navegacion">

    </nav>

    <main class="">
        @yield('content')
    </main>



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



    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}"></script>
    @foreach ($js_files as $file)
    <script src="{{ asset('js/' . $file . '.js') }}"></script>
    @endforeach

    @yield('internal_script')
</body>

</html>