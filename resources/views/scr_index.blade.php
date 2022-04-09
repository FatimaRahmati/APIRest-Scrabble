@extends('layouts.app',
['title' => 'Info Scrabble', 'css_files' => ['test_scr_index', 'cssScrabble'],
'js_files' => ['test_scr_index']])

@section('content')


<div id="scrabble-page" class="container-fluid px-0 mx-auto">

    <div class="row">
        <!-- Noticias del Ceed o de otro sitio-->
        <div id="gamenews" class="col-sm-6 col-md-6 col-lg-2 align-self-center">
            <div class="news">
                <div class="ceednews">
                    <ul class="newslist">
                        <li>Primera noticia</li>
                        <li>Segunda noticia</li>
                        <li>Tercera noticia</li>
                        <li>Cuarta noticia</li>
                        <li>Quinta noticia</li>
                    </ul>
                </div>
                <div class="scrabblenews">
                    <ul class="newslist">
                        <li>Primera noticia</li>
                        <li>Segunda noticia</li>
                        <li>Tercera noticia</li>
                        <li>Cuarta noticia</li>
                        <li>Quinta noticia</li>
                    </ul>
                </div>
            </div>
        </div>


        <div id="centralcontent" class="col-sm-12 col-md-12 col-lg-7 align-self-center">
            <!-- Pasos para jugar -->
            <div class="container p-0 m-0">
                <div class="row gamesteps my-4">

                    <div class="col-sm-12 col-md-6 col-lg-3">
                        <div class="step d-flex justify-content-center" data-name="one">
                            <a href="#">
                                <p class="d-flex justify-content-center align-items-center m-0"><i
                                        class="fa-solid fa-circle-user"></i></p>
                            </a>
                        </div>
                    </div>

                    <div class="col-sm-12 col-md-6 col-lg-3">
                        <div class="step d-flex justify-content-center" data-name="two">
                            <a href="#">
                                <p class="d-flex justify-content-center align-items-center m-0"><i
                                        class="fa-solid fa-spell-check"></i></p>
                            </a>
                        </div>
                    </div>

                    <div class="col-sm-12 col-md-6 col-lg-3">
                        <div class="step d-flex justify-content-center" data-name="three">
                            <a href="#">
                                <p class="d-flex justify-content-center align-items-center m-0"><i
                                        class="fa-solid fa-users"></i></p>
                            </a>
                        </div>
                    </div>

                    <div class="col-sm-12 col-md-6 col-lg-3">
                        <div class="step d-flex justify-content-center" data-name="four">
                            <a href="#">
                                <p class="d-flex justify-content-center align-items-center m-0"><i
                                        class="fa-solid fa-chess-board"></i></p>
                            </a>
                        </div>
                    </div>

                </div>
                <!--   <div class="text-center">¡Únete a nosotros, selecciona la idioma para jugar, elige a un amigo y
                    comienza
                    tu
                    partida!</div> -->
            </div>

            <div class="container boton mt-4">
                <a class="botonlink" href="#login">REGÍSTRATE</a>
            </div>




            <!-- Carousel inferior con los beneficios de jugar al Scrabble. -->
            <div class="container carousel-benefits mt-5">
                <div id="benefits" class="carousel slide" data-ride="carousel">
                    <ol class="carousel-indicators">
                        <li data-target="#benefits" data-slide-to="0" class="active"></li>
                        <li data-target="#benefits" data-slide-to="1"></li>
                        <li data-target="#benefits" data-slide-to="2"></li>
                        <li data-target="#benefits" data-slide-to="2"></li>
                    </ol>

                    <h5>¿Por qué jugar al Scrabble? </h5>
                    <div class="carousel-inner">
                        <div class="carousel-item active benefits-content">
                            <h6>Mejora el vocabulario y la ortografía</h6>
                            <p>Si juega Scrabble va a mejorar su vocabulario. Con más de 180.000 palabras en
                                el
                                diccionario oficial de Scrabble estará obligado a aprender una nueva definición o dos
                                por
                                partida, así como la ortografía.
                            </p>
                        </div>

                        <div class="carousel-item benefits-content">
                            <h5>Estimula el pensamiento estratégico</h5>
                            <p>Scrabble es un juego de estrategia. Debes pensar cómo jugar tus fichas, cómo aprovechar
                                las
                                palabras de tu constrincante y cuándo puede beneficiarte más utilizar una palabra.
                            </p>
                        </div>

                        <div class="carousel-item benefits-content">
                            <h5>Mejora la función cognitiva</h5>
                            <p>Un estudio reciente muestra que el jugar el Scrabble regularmente puede mejorar
                                algunas habilidades cognitivas, como la capacidad de lectura y comprensión de la
                                ortografía vertical.</p>
                        </div>

                        <div class="carousel-item benefits-content">
                            <h5>Desarrolla las capacidades matemáticas</h5>
                            <p>La necesidad de sumar los puntos que acumulas con cada palabra construida, estimula las
                                habilidades matemáticas en cuanto a cálculos mentales rápidos.</p>
                        </div>
                    </div>
                    <a class="carousel-control-prev" href="#benefits" data-slide="prev">
                        <span class="carousel-control-prev-icon"></span>
                    </a>
                    <a class="carousel-control-next" href="#benefits" data-slide="next">
                        <span class="carousel-control-next-icon"></span>
                    </a>
                </div>
            </div>

        </div>




        <!--  Barra lateral derecha con la información actualizada del juego.  -->
        <div class="col-sm-6 col-md-6 col-lg-3">
            <ul class="pt-4">
                <li><i class="fa-solid fa-user-check gameicons"></i><a v-on:click.prevent="ranking" href="#">18</a>
                </li>
                <li><i class="fa-solid fa-user-group gameicons"></i></li>
                <li class="d-flex">
                    <div><i class="fa-solid fa-trophy gameicons"></i></div>
                    <div class="pl-3">Aquí pondremos la </div>
                </li>
                <li><i class="fa-solid fa-chess-board gameicons"></i></li>
                <li><i class="fa-solid fa-earth-africa gameicons"></i></li>
            </ul>
        </div>

    </div>
</div>


<!-- <aside class="sidebar">
    <ul>
        <li class="input-menu"><a href="{{ route('register') }}">Registro</a></li>
        <li class="input-menu upper-margin"><a href="{{ route('login') }}">Login</a><li>
        <li class="input-menu upper-margin"><a v-on:click.prevent="ranking" href="#">Ranking usuarios</a></li>
        <li class="input-menu"><a v-on:click.prevent="currentGames" href="#">Últimas partidas en juego</a></li>
        <li class="input-menu"><a v-on:click.prevent="generalInfo" href="#">Información sobre el sistema</a></li>
    </ul>
</aside>
<card-container-component :cards="c_cards"></card-container-component>-->


@endsection