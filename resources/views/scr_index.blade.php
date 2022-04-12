@extends('layouts.app',
['title' => 'Info Scrabble', 'css_files' => ['test_scr_index', 'cssScrabble'],
'js_files' => ['test_scr_index', 'jsScrabble']])

@section('content')


<div id="scrabble-page" class="container-fluid px-0 mx-auto">

    <div class="row m-0">
        <!-- Noticias del Ceed o de otro sitio-->
        <div
            class="col-sm-6 col-md-6 col-lg-2 order-lg-1 order-md-12 order-sm-12 order-12 align-self-center news m-0 p-0">
            <div class="">
                <div class=" ceednews">
                    <ul class="newslist">
                        <li>
                            <img class="newsimage" src="../img/scrabbleplayer.jpg"
                                alt="Campeón de España jugando al Scrabble" />
                            Campeona de España en Scrabble
                            <p class="m-0 p-0">Josefina Pérez es la nueva campeona de España <i
                                    class="fa-solid fa-circle-plus"></i></p>
                            <p class="pie-cdo m-0 p-0">El diario del Scrabble</p>
                        </li>

                        <li>
                            <img class="newsimage" src="../img/mariatorrijas.jpg"
                                alt="María Torrijas empezó a jugar al scrabble" />
                            Por qué empecé a jugar al Scrabble
                            <p>María Torrijas nos cuenta cómo el Scrabble cambió su vida
                                <i class="fa-solid fa-circle-plus"></i>
                            </p>
                            <p class="pie-cdo m-0 p-0">El diario del Scrabble</p>
                        </li>

                        <li>
                            <img class="newsimage" src="../img/studying.jpg"
                                alt="María Torrijas empezó a jugar al scrabble" />
                            Matricúlate en el CEED
                            <p>Encuentra toda la oferta formativa <i class="fa-solid fa-circle-plus"></i></p>
                            <p class="pie-cdo m-0 p-0">www.ceedcv.es</p>
                        </li>

                    </ul>
                </div>
            </div>
        </div>


        <div id="centralcontent"
            class="col-sm-12 col-md-12 col-lg-7 order-lg-2 order-md-1 order-sm-1 order-1 d-flex flex-column align-content-around">

            <div class="row my-5 mx-0 stepgames">
                <!-- <div class="d-flex justify-content-center"> -->
                <div class="col-sm-12 col-md-6 col-lg-3">
                    <div class="step d-flex justify-content-center" data-name="one">
                        <a href="#">
                            <p class="d-flex justify-content-center align-items-center m-0"><i
                                    class="fa-solid fa-circle-user"></i></p>
                        </a>
                    </div>
                    <div class="steptext">Únete</div>
                </div>
                <!--  </div> -->


                <!-- <div class="d-flex justify-content-center"> -->
                <div class="col-sm-12 col-md-6 col-lg-3 justify-content-center">
                    <div class="step d-flex justify-content-center" data-name="two">
                        <a href="#">
                            <p class="d-flex justify-content-center align-items-center m-0"><i
                                    class="fa-solid fa-spell-check"></i></p>
                        </a>
                    </div>
                    <div class="steptext">Selecciona un idioma</div>
                </div>
                <!--  </div> -->



                <!--  <div class="d-flex justify-content-center"> -->
                <div class="col-sm-12 col-md-6 col-lg-3">
                    <div class="step d-flex justify-content-center" data-name="three">
                        <a href="#">
                            <p class="d-flex justify-content-center align-items-center m-0"><i
                                    class="fa-solid fa-users"></i></p>
                        </a>
                    </div>
                    <div class="steptext">Selecciona un amigo</div>
                </div>
                <!--   </div> -->

                <!--  <div class="d-flex justify-content-center"> -->
                <div class="col-sm-12 col-md-6 col-lg-3">
                    <div class="step d-flex justify-content-center" data-name="four">
                        <a href="#">
                            <p class="d-flex justify-content-center align-items-center m-0"><i
                                    class="fa-solid fa-chess-board"></i></p>
                        </a>
                    </div>
                    <div class="steptext">Empieza la partida</div>
                </div>
                <!--    </div> -->

            </div>



            <div class="container boton my-5">
                <div class="row">
                    <a class="botonlink" href="{{ route('register') }}">REGÍSTRATE</a>
                </div>
            </div>




            <!-- Carousel inferior con los beneficios de jugar al Scrabble. -->
            <div class="container carousel-benefits my-5">
                <div class="row">
                    <div id="benefits" class="carousel slide" data-ride="carousel">
                        <ol class="carousel-indicators">
                            <li data-target="#benefits" data-slide-to="0" class="active"></li>
                            <li data-target="#benefits" data-slide-to="1"></li>
                            <li data-target="#benefits" data-slide-to="2"></li>
                            <li data-target="#benefits" data-slide-to="3"></li>
                        </ol>

                        <!--   <h5>¿Por qué jugar al Scrabble? </h5> -->
                        <div class="carousel-inner mx-auto">
                            <div class="carousel-item text-center active">
                                <h6>Jugando al Scrabble mejorarás tu vocabulario y ortografía</h6>
                                <p>Si juega Scrabble va a mejorar su vocabulario. Con más de 180.000 palabras en
                                    el
                                    diccionario oficial de Scrabble estará obligado a aprender una nueva definición
                                    o
                                    dos
                                    por
                                    partida, así como la ortografía.
                                </p>
                            </div>

                            <div class="carousel-item">
                                <h6>Jugando al Scrabble estimularás el pensamiento estratégico</h6>
                                <p>Scrabble es un juego de estrategia. Debes pensar cómo jugar tus fichas, cómo
                                    aprovechar
                                    las
                                    palabras de tu constrincante y cuándo puede beneficiarte más utilizar una
                                    palabra.
                                </p>
                            </div>

                            <div class="carousel-item">
                                <h6>Jugando al Scrabble aumentarás la función cognitiva</h6>
                                <p>Un estudio reciente muestra que el jugar el Scrabble regularmente puede mejorar
                                    algunas habilidades cognitivas, como la capacidad de lectura y comprensión de la
                                    ortografía vertical.</p>
                            </div>

                            <div class="carousel-item">
                                <h6>Jugando al Scrabble desarrollarás más tus capacidades matemáticas</h6>
                                <p>La necesidad de sumar los puntos que acumulas con cada palabra construida,
                                    estimula
                                    las
                                    habilidades matemáticas en cuanto a cálculos mentales rápidos.</p>
                            </div>
                        </div>
                        <a class="carousel-control-prev" href="#benefits" data-slide="prev">
                            <span class="carousel-control-prev-icon"><i class="fa-solid fa-angle-left"></i></span>
                        </a>
                        <a class="carousel-control-next" href="#benefits" data-slide="next">
                            <span class="carousel-control-next-icon"><i class="fa-solid fa-angle-right"></i></span>
                        </a>
                    </div>
                </div>
            </div>

        </div>



        <!--  Barra lateral derecha con la información actualizada del juego.  -->
        <div class="gameinfo col-sm-6 col-md-6 col-lg-3 order-lg-3 order-md-2 order-sm-2 order-2 p-0 m-0">
            <div class="text-center py-3">Información del juego</div>

            <ul class="">
                <li><i class="fa-solid fa-user-group gameicons"></i>{{$connectedUsers}} / {{$numberUsers}}
                </li>
                <li class="d-flex flex-wrap">
                    <i class="fa-solid fa-trophy gameicons"></i>
                    <div>
                        <div class="rankinggames" data-ranking="0">
                            <h5 class="m-0">Partida 1</h5>
                            <p class=" p-0 m-0" data-player="0">Jugador 1: 50 puntos</p>
                            <p class="p-0 m-0" data-player="0-0">Jugador 2: 300 puntos</p>
                        </div>
                        <div class="rankinggames" data-ranking="1">
                            <h5>Partida 2</h5>
                            <p class="p-0 m-0" data-player="1">Jugador 1: 50 puntos</p>
                            <p class="p-0 m-0" data-player="1-1">Jugador 2: 300 puntos</p>
                        </div>
                        <div class="rankinggames" data-ranking="2">
                            <h5>Partida 3</h5>
                            <p class="p-0 m-0" data-player="2">Jugador 1: 50 puntos</p>
                            <p class="p-0 m-0" data-player="2-2">Jugador 2: 300 puntos</p>
                        </div>
                    </div>
                </li>
                <li><i class="fa-solid fa-chess-board gameicons"></i>{{$playingGames}} partidas en juego
                </li>
                <li><i class="fa-solid fa-earth-africa gameicons"></i>{{$nacionalities}} nacionalidades
                </li>
                <li class="d-flex"><i class="fa-solid fa-spell-check gameicons"></i>
                    @foreach ($languages as $lang)
                    {{$lang->name}},
                    @endforeach

                </li>
            </ul>
        </div>

    </div>
</div>

@endsection