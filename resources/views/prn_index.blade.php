@extends('layouts.app',
['title' => 'Info Imprenta', 'css_files' => ['test_welcome'],
'js_files' => []])

@section('content')

<!--MAIN MENÚ-->
<div class="container-fluid">
    <div class="row p-0" id="gradient-header">
        <div class="col-12 text-center mx-auto p-5">
            <div class="f-prime large thirds">
                ¿Quieres conocer uno de los mayores avances de la humanidad?
            </div>
            <div class="f-second text-light">
                Navega por nuestra web y conoce todo sobre cómo se originó la imprenta.
                <!-- Designed by <a href="https://bootsnipp.com/sarwal" target="_blank" class="text-light">sarwal</a>.
                Inspired by <a href="https://bootsnipp.com/YvesWassersleben" target="_blank"
                    class="text-light">YvesWassersleben</a>.
                Images referenced from <a href="https://pixabay.com/" target="_blank" class="text-light">pixabay</a>. -->
            </div>
        </div>
    </div>
    <div class="row bg-dark p-0">
        <div class="col-12 p-0">
            <div class="row mx-auto p-5">
                <div class="col-xl-2 col-lg-6 col-md-6 col-sm-12 col-12 p-2 card">
                    <div class="thumbnail">
                        <img src="img/01 Gutenberg.jpg">
                        <div class="caption">
                            <div class="f-prime sml primes">
                                Gutenberg
                            </div>
                            <div class="f-third text-light">
                                Creador de la imprenta contemporánea.
                            </div>
                            <hr>
                            <p>
                                Gutenberg nació en Magnucia, Alemania, alrededor del 1400 en la casa paterna llamada
                                zum Gutenberg. Su apellido verdadero es Genfleisch (en dialecto alemán renano este
                                apellido tiene semejanza, si es que no significa, "carne de ganso", por lo que el
                                inventor prefierió usar el apellido por el cual es conocido)...
                            </p>
                            <div class="mb-0">
                                <a href="/gutenberg" class="btn btn-card">Sigue leyendo</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-2 col-lg-6 col-md-6 col-sm-12 col-12 p-2 card">
                    <div class="thumbnail">
                        <img src="img/08 Trabajadores imprenta 2.png">
                        <div class="caption">
                            <div class="f-prime sml primes">
                                Trabajos
                            </div>
                            <div class="f-third text-light">
                                Los primeros trabajos creados.
                            </div>
                            <hr>
                            <p>
                                Por eso, en una imprenta del siglo XV se necesitaban fundamentalmente 3 personas:
                                El componedor: Realiza el trabajo más delicado. A medida que lee el manuscrito coloca
                                en una cajita, una a una, todas las piezas de metal con letras y espacios que forman
                                una línea. Debe hacerlo en orden...
                            </p>
                            <div class="mb-0">
                                <a href="/gutenberg" class="btn btn-card">Sigue leyendo</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-2 col-lg-6 col-md-6 col-sm-12 col-12 p-2 card">
                    <div class="thumbnail">
                        <img src="img/mapa2.jpg">
                        <div class="caption">
                            <div class="f-prime sml primes">
                                Difusión
                            </div>
                            <div class="f-third text-light">
                                La idea Gutenberg viaja por Europa.
                            </div>
                            <hr>
                            <p>
                                La idea de Gutenberg de las letras individuales grabadas en metal se difunde por Europa.
                                Comienza en Mainz (hacia 1450), y a continuación, van surgiendo las primeras imprentas
                                en las principales ciudades europeas, como Venecia, París, Brujas, Segovia, Valencia,
                                Westminster, entre los años 1450 y 1476...
                            </p>
                            <div class="mb-0">
                                <a href="/gutenberg" class="btn btn-card">Sigue leyendo</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-2 col-lg-6 col-md-6 col-sm-12 col-12 p-2 card">
                    <div class="thumbnail">
                        <img src="img/14 valencian bible3.jpg">
                        <div class="caption">
                            <div class="f-prime sml primes">
                                Libros
                            </div>
                            <div class="f-third text-light">
                                El sinodal de Aguilafuente en 1472.
                            </div>
                            <hr>
                            <p>
                                El primer libro impreso en España fue El Sinodal de Aguila Fuente en 1472 en Segovia.
                                Por su parte, los tres primeros impresos en Valencia con el procedimiento de Gutenberg
                                fueron: Obres o trobes en laors de la Verge Maria, Comprehensorium, la Biblia
                                Valenciana. Todos ellos impresos entre...
                            </p>
                            <div class="mb-0">
                                <a href="/gutenberg" class="btn btn-card">Sigue leyendo</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-2 col-lg-6 col-md-6 col-sm-12 col-12 p-2 card">
                    <div class="thumbnail">
                        <img src="img/17 portal valldigna 3.jpg">
                        <div class="caption">
                            <div class="f-prime sml primes">
                                En Valencia
                            </div>
                            <div class="f-third text-light">
                                Lugares emblemáticos de la imprenta en Valencia.
                            </div>
                            <hr>
                            <p>
                                Lugares emblemáticos de las primeras imprentas en Valencia con el procedimiento
                                de Gutenberg. El Molí de Rovella: En la confluencia de las actuales calles Barón
                                de Carcer y Pie de la Creu estuvo ubicada la primera imprenta en Valencia. Monasterio
                                de Santa María del Puig, Imprenta de...
                            </p>
                            <div class="mb-0">
                                <a href="/gutenberg" class="btn btn-card">Sigue leyendo</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>







@endsection