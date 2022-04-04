@extends('layouts.app',
['title' => 'Info Imprenta', 'css_files' => ['test_welcome'],
'js_files' => []])

@section('content')


<div class="content">
    <div class="barra">

        <!--GUTENBERG-->
        <div class="container mt-5">
            <h1 id="gutenberg" class="py-2">GUTENBERG</h1>
            <div class="">
                <div class="imagen-Gutenberg float-left"></div>
                <p class="">Gutenberg nació en Maguncia, Alemania alrededor de 1400 en la casa
                    paterna llamada
                    zum Gutenberg. Su apellido
                    verdadero es Gensfleisch (en dialecto alemán renano este apellido tiene semejanza, si es que no
                    significa,
                    «carne de ganso», por lo que el inventor de la imprenta en Occidente prefirió usar el apellido por
                    el cual es conocido).</p>
                <p>Hijo del comerciante Federico Gensfleisch, que adoptaría posteriormente hacia 1410 el
                    apellido zum Gutenberg, y de Else Wyrich, hija de un tendero. Conocedor del arte de la fundición del
                    oro, se
                    destacó como
                    herrero para el obispado de su ciudad.</p>
                <p>La familia se trasladó a Eltville am Rhein, ahora en el Estado de Hesse, donde Else había heredado
                    una
                    finca.
                    Debió haber
                    estudiado en la Universidad de Erfurt, en donde está registrado en 1419 el nombre de Johannes de
                    Alta
                    Villa
                    (Eltvilla). </p>
                <div id="leermas" class="collapse">
                    <p>Ese año murió su padre. Nada más se conoce de Gutenberg, hasta que en 1434 residió como
                        platero
                        en
                        Estrasburgo, donde cinco años después se vio envuelto en un proceso, que demuestra de forma
                        indudable,
                        que
                        Gutenberg había formado una sociedad con Hanz Riffe para desarrollar ciertos procedimientos
                        secretos. En
                        1438
                        entraron como asociados Andrés Heilman y Andreas Dritzehen (sus
                        herederos fueron los reclamantes) y en el expediente judicial se mencionan los términos de
                        prensa,
                        formas e
                        impresión.</p>

                    <p>De regreso a Maguncia, formó una nueva sociedad con Johann Fust, quien le da un préstamo con el
                        que,
                        en 1449, publicó el Misal de Constanza, primer libro tipográfico del mundo occidental.
                        Recientes publicaciones, en cambio, aseguran que este misal no pudo imprimirse antes de 1473
                        debido
                        a la
                        confección de
                        su papel, por lo que no debió ser obra de Gutenberg.
                    </p>
                    <p>En 1452, Gutenberg da comienzo a la edición de la Biblia de 42 líneas (también conocida como
                        Biblia
                        de
                        Gutenberg). En 1455, Gutenberg carecía de solvencia económica para devolver el
                        préstamo que le había concedido Fust, por lo que se disolvió la unión y Gutenberg se vio en la
                        penuria
                        (incluso
                        tuvo que difundir el secreto de montar imprentas para poder subsistir).</p>
                    <p>Johannes Gutenberg murió arruinado en Magnucia, Alemania el 3 de febrero de 1468. A pesar de la
                        oscuridad
                        de
                        sus
                        últimos años de vida, siempre será reconocido como el inventor de la imprenta moderna.</p>
                </div>
            </div>
            <div class="text-center mb-3"><a id="botonLeer" class="pie-cdo" data-toggle="collapse"
                    href="#leermas"><span>............. Leer más .............</span></a>
            </div>


            <!-- Buscar el evento onlick para ver si lo puedo modificar con el "leer más / leer menos" -->

            <!-- Podríamos utilizar un checkbox para determinar que un elemento esté o no seleccionado. Y con ello controlar
            el estado del div. Posteriormente, en función de su está o no seleccionado, podríamos aplicar una transición
            a una imagen o icono, para que pueda estar hacia arriba o hacia abajo. -->

            <!-- <div class="colapsar text-center mb-3"><a id="botonLeer" class="pie-cdo" data-toggle="collapse"
                    href="#leermas">.............
                    Leer
                    menos .............</a></div> -->
            <div>
                <p class="pie-cdo text-right float-right">Fuente Wikipedia</p>
                <div>
                    <a class="iconos" href="#barraNav">
                        <i class="fa-solid fa-circle-up"></i></a>
                </div>
            </div>

            <h2 id="invento" class="py-2 mt-5">¿Qué es lo que inventó?</h2>
            <div class="">
                <p>El nombre de Gutenberg lo asociamos a la invención de la imprenta, pero mucho antes que él ya se
                    imprimía
                    sobre pergamino papel. Un breve recorrido histórico nos indica que: 2000 años antes de
                    Gutenberg, en
                    Roma se
                    imprimían carteles con signos grabados en arcilla. 1400 años antes de Gutenberg, en China se
                    imprimían
                    carteles utilizando signos grabados en madera. Así en el año 686 se imprimió una publicación que
                    se
                    llamó
                    “El sutra del diamante”, con signos grabados en una única madera.</p>

                <div class="d-flex flex-wrap justify-content-around mt-4">
                    <div class="">

                        <div class="imagen-invento" data-toggle="modal" data-target="#img1">
                            <img src="../img/02Sutradeldiamante.png">
                        </div>

                        <div class="modal fade" id="img1">
                            <div class="modal-dialog">
                                <div class="modal-content">
                                    <div class="modal-body"><button type="button" class="close"
                                            data-dismiss="modal">&times;</button>

                                        <img src="../img/02Sutradeldiamante.png">
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="pie-cdo text-center pt-2">El Sutra del Diamante British Library</div>
                    </div>
                    <div>

                        <div class="imagen-invento" data-toggle="modal" data-target="#img2">
                            <img src="../img/03 Tipos chinos en madera.jpg">
                        </div>

                        <div class="modal fade" id="img2">
                            <div class="modal-dialog">
                                <div class="modal-content">
                                    <div class="modal-body"><button type="button" class="close"
                                            data-dismiss="modal">&times;</button>

                                        <img src="../img/03 Tipos chinos en madera.jpg">
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!--  <a href="../img/03 Tipos chinos en madera.jpg">
                            <div class="imagen-invento">
                                <img src="../img/03 Tipos chinos en madera.jpg">
                            </div>
                        </a> -->
                        <div class="pie-cdo text-center pt-2">Tipos chinos en madera</div>
                    </div>
                </div>

                <div class="d-flex flex-wrap justify-content-around mt-4">
                    <div class="">

                        <div class="imagen-invento" data-toggle="modal" data-target="#img3">
                            <img src="../img/04 Fundidor de tipos de Gutenberg.png">
                        </div>

                        <div class="modal fade" id="img3">
                            <div class="modal-dialog">
                                <div class="modal-content">
                                    <div class="modal-body"><button type="button" class="close"
                                            data-dismiss="modal">&times;</button>
                                        <img src="../img/04 Fundidor de tipos de Gutenberg.png">
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="pie-cdo text-center pt-2">Fundidor de tipos de Gutenberg</div>
                    </div>
                    <div>

                        <div class="imagen-invento" data-toggle="modal" data-target="#img4">
                            <img src="../img/05 tipos moviles metal gutenberg.jpeg">
                        </div>

                        <div class="modal fade" id="img4">
                            <div class="modal-dialog">
                                <div class="modal-content">
                                    <div class="modal-body"><button type="button" class="close"
                                            data-dismiss="modal">&times;</button>
                                        <div class="imagen-invento"><img
                                                src="../img/05 tipos moviles metal gutenberg.jpeg"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="pie-cdo text-center pt-2">Tipos móviles metal Gutenberg</div>
                    </div>
                </div>


                <div class="mt-4">
                    <p>Pero los moldes de madera tenían un problema: pronto se desgastaban y se echaban a
                        perder. La gran idea de
                        Gutenberg fue moldear piezas de metal para cada letra, creando de tipos de letras de
                        metal
                        individuales
                        para
                        la imprenta.</p>

                    <p>Después sólo quedaba componer en una cajita, letra a letra, el texto que se quería
                        imprimir,
                        cajita que se manchaba con unos tampones entintados.</p>
                </div>


                <div class="d-flex flex-wrap justify-content-around mt-4">
                    <div>
                        <a href="../img/06 tipos moviles metal gutenberg.jpg">
                            <div class="imagen-invento">
                                <img src="../img/06 tipos moviles metal gutenberg.jpg">
                            </div>
                        </a>
                        <div class="pie-cdo text-center pt-2">Tipos móviles de metal de Gutenberg</div>
                    </div>
                </div>


                <div class="mt-4">
                    <p>Finalmente, sobre las letras metálicas entintadas se colocaba el papel y se
                        presionaba con un
                        aparato así:
                    </p>
                </div>

                <div class="d-flex flex-wrap justify-content-around mt-4">
                    <div>
                        <a href="../img/07 Prensa_de_Gutenberg Replica.png">
                            <div class="imagen-invento">
                                <img id="imgPrensa" src="../img/07 Prensa_de_Gutenberg Replica.png">
                            </div>
                        </a>
                        <div class="pie-cdo text-center pt-2">Réplica de la prensa de Gutenberg</div>
                    </div>
                </div>
                <div class="mt-4">
                    <p>En resumen, Gutenberg confeccionó un abecedario con letras y signos de plomo. Su idea
                        fue
                        eficaz
                        porque
                        la
                        perfeccionó con:
                    </p>
                    <ol id="lista" class="mt-5">
                        <li>Letras móviles</li>
                        <li>Molde de metal</li>
                        <li>Fundidor de tipos o aparato de fundición manual</li>
                        <li>Aleación especial de metales para fabricar los ḿoviles (plomo, antimonio y
                            bismuto)</li>
                        <li>Prensa de madera anclada al suelo y al techo</li>
                        <li>Tinta de imprimir en un determinado papel</li>
                    </ol>

                </div>
                <div>
                    <a class="iconos" href="#barraNav">
                        <i class="fa-solid fa-circle-up"></i></a>
                </div>

            </div>
        </div>



        <!--TRABAJOS EN EL SIGLO XV-->
        <div class="container mt-5 mx-auto">
            <h1 id="trabajos" class="primary-text-color py-2">LOS TRABAJOS EN UNA IMPRENTA DEL SIGLO XV</h1>
            <div>
                <p>Por eso, en una imprenta se necesitaban fundamentalmente 3 personas: </p>
            </div>


            <div id="jobs">
                <!-- COMPONEDOR -->
                <div id="componedor" class="container collapse show bloque my-4 mx-auto">
                    <div class="d-flex justify-content-center">
                        <div class="boton"><a class="botonlink" data-toggle="collapse"
                                href="#subcomponedor, #componedorimg">¿Cómo
                                empezamos?</a>
                        </div>
                    </div>

                    <div id="subcomponedor" class="container collapse mx-auto">
                        <div class="row">
                            <div class="col-lg-5 col-md-5 col-sm-12 px-0">
                                <div id="componedorimg" class="collapse">
                                    <a data-toggle="collapse" data-target="#paragraph1">
                                        <div class="back-layer1"></div>
                                    </a>
                                </div>
                            </div>
                            <div id="paragraph1" class="collapse col-lg-7 col-md-7 col-sm-12 px-0">
                                <div class="d-flex">
                                    <div class="trabajostext">
                                        <div class="text-center">
                                            <h4 class="container pb-3">Componedor</h4>
                                        </div>
                                        <div class=" text-center">
                                            Realiza el trabajo más delicado. A medida que lee el
                                            manuscrito
                                            coloca en una cajita, una a una, todas las piezas de metal con letras y
                                            espacios
                                            que
                                            forman una línea. Debe hacerlo en orden inverso. Y cajita a cajita,
                                            confecciona
                                            toda
                                            una
                                            página.
                                        </div>
                                    </div>
                                    <div id="forward-composer" class="forward-button"><a data-toggle="collapse"
                                            class="botonlink" href=" #yahora, #returncomposer, #entintador"> >> </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>


                <!-- ENTINTADOR -->
                <div id="entintador" class="container collapse bloque my-4 mx-auto">
                    <div class="container">
                        <div class="row">
                            <div id="returncomposer" class="col-lg-1 col-md-1 col-sm-1 collapse boton"><a
                                    class="botonlink" data-toggle="collapse" href="#componedor">
                                    << </a>
                            </div>

                            <div id="yahora" class="col-lg-11 col-md-11 col-sm-11 collapse boton"><a class="botonlink"
                                    data-toggle="collapse" href="#subentintador, #entintadorimg">¿Y
                                    ahora qué?</a>
                            </div>
                        </div>
                    </div>


                    <div id="subentintador" class="container collapse mx-auto">
                        <div class="row">
                            <div class="col-lg-5 col-md-5 col-sm-12 px-0">
                                <div id="entintadorimg" class="collapse">
                                    <a data-toggle="collapse" data-target="#paragraph2">
                                        <div class="back-layer2"></div>
                                    </a>
                                </div>
                            </div>
                            <div id="paragraph2" class="collapse col-lg-7 col-md-7 col-sm-12 px-0">
                                <div class="d-flex">
                                    <div class="trabajostext">
                                        <div class="text-center">
                                            <h4 class="container pb-3">Entintador</h4>
                                        </div>
                                        <div class=" text-center">
                                            Encargado de entintar la superficie de letras que ha elaborado
                                            el componedor. Para ello utiliza dos tampones semiesféricos impregnados de
                                            tinta, uno en cada mano.
                                        </div>
                                    </div>
                                    <div id="forward-finally" class="forward-button"><a data-toggle="collapse"
                                            class="botonlink" href="#finally, #returntirador, #tirador">>></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>



                <!-- TIRADOR -->

                <div id="tirador" class="container collapse bloque my-4 mx-auto">

                    <div class="container">
                        <div class="row">
                            <div id="returntirador" class="col-lg-1 col-md-1 col-sm-1 collapse boton"><a
                                    class="botonlink" data-toggle="collapse" href="#entintador">
                                    << </a>
                            </div>

                            <div id="finally" class="col-lg-11 col-md-11 col-sm-11 collapse boton"><a class="botonlink"
                                    data-toggle="collapse" href="#subtirador, #tiradorimg">Finalmente...</a>
                            </div>
                        </div>
                    </div>

                    <div id="subtirador" class="container collapse mx-auto">
                        <div class="row">
                            <div class="col-lg-5 col-md-5 col-sm-12 px-0">
                                <div id="tiradorimg" class="collapse">
                                    <a data-toggle="collapse" data-target="#paragraph3">
                                        <div class="back-layer3"></div>
                                    </a>
                                </div>
                            </div>
                            <div id="paragraph3" class="collapse col-lg-7 col-md-7 col-sm-12 px-0">
                                <div class="d-flex">
                                    <div class="trabajostext">
                                        <div class="text-center">
                                            <h4 class="container pb-3">Tirador</h4>
                                        </div>
                                        <div class=" text-center">
                                            Coloca papel sobre la superficie de letras entintadas y acciona
                                            la palanca que hace bajar la prensa sobre los tipos metálicos que colocó el
                                            componedor, de manera que quedan marcadas en el papel.
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="mt-4">
                    <p>Se puede ver más información del proceso en estos videos </p>

                    <!-- Introducimos VIDEOS -->
                </div>
                <div>
                    <a class="iconos" href="#barraNav">
                        <i class="fa-solid fa-circle-up"></i></a>
                </div>
            </div>






            <!--DIFUSIÓN-->
            <div class="container mt-5">
                <h1 id="difusion" class="primary-text-color py-2">DIFUSIÓN DE LA IDEA</h1>

                <div>
                    <h4>Busca en el mapa las ciudades y ordénalas según se fueron implantando por Europa</h4>
                    <h5>Pista: La implantación comienza en Mainz (Alemania) en 1450.</h5>
                </div>

                <div class="container d-flex pt-5">

                    <div>
                        <table>
                            <tr>
                                <th>Año</th>
                                <th>Ubicación</th>
                            </tr>
                            <tr>
                                <td>1450</td>
                                <td id="tablaMainz" class="collapse">Mainz (Alemania)</td>
                            </tr>
                            <tr>
                                <td>1469</td>
                                <td id="tablaVenecia" class="collapse">Venecia (Italia)</td>
                            </tr>
                            <tr>
                                <td>1470</td>
                                <td id="tablaParis" class="collapse">París (Francia)</td>
                            </tr>
                            <tr>
                                <td>1471</td>
                                <td id="tablaBrujas" class="collapse">Brujas (Holanda)</td>
                            </tr>
                            <tr>
                                <td>1472</td>
                                <td id="tablaSegovia" class="collapse">Segovia (España)</td>
                            </tr>
                            <tr>
                                <td>1474</td>
                                <td id="tablaValencia" class="collapse">Valencia (España)</td>
                            </tr>
                            <tr>
                                <td>1476</td>
                                <td id="tablaWestminster" class="collapse">Westminster (Gran Bretaña)</td>
                            </tr>
                        </table>
                    </div>
                    <!--   <div class="container-fluid xl-12 lg-12 md-12 sm-2 contEurope">
                    <!-- <img class="europeMap" src="../img/11 Europa e imprenta.png" alt="Europe"
                        usemap="#europemap">


                <div class="contEurope bordeado"
                    <img class="europeMap" src="../img/11 Europa e imprenta.png" alt=""> 
                </div>

                Ubicaciones de los sitios en el mapa
                <div class="positionMainz pretooltip tooltip">
                    <a data-toggle="collapse" href="#tablaMainz">O</a>
                    <span class="tooltiptext">Mainz (Alemania)</span>
                </div>
                <div class="positionVenecia pretooltip tooltip">
                    <a data-toggle="collapse" href="#tablaVenencia">O</a>
                    <span class="tooltiptext">Venecia (Italia)</span>
                </div>
                <div class="positionParis pretooltip tooltip">
                    <a data-toggle="collapse" href="#tablaParis">O</a>
                    <span class="tooltiptext">París (Francia)</span>
                </div>
                <div class="positionBrujas pretooltip tooltip">
                    <a data-toggle="collapse" href="#tablaBrujas">O</a>
                    <span class="tooltiptext">Brujas (Holanda)</span>
                </div>
                <div class="positionSegovia pretooltip tooltip">
                    <a data-toggle="collapse" href="#tablaSegovia">O</a>
                    <span class="tooltiptext">Segovia (España)</span>
                </div>
                <div class="positionValencia pretooltip tooltip">
                    <a data-toggle="collapse" href="#tablaValencia">O</a>
                    <span class="tooltiptext">Valencia (España)</span>
                </div>
                <div class="positionWestminster pretooltip tooltip">
                    <a data-toggle="collapse" href="#tablaWestminster">O</a>
                    <span class="tooltiptext">Westminster (Gran Bretaña)</span>
                </div>

            </div> -->


                    <!--  </div> -->

                    <div>
                        <div><a href="#">Solución</a></div>
                    </div>

                    <div>
                        <a class="iconos" href="#barraNav">
                            <i class="fa-solid fa-circle-up"></i></a>
                    </div>
                    <!-- Introducimos mapa y hay que meterle cosas chulis para sacar los nombres de los sitios -->
                </div>


                <!--PRIMEROS LIBROS EN ESPAÑA-->
                <div class="container mt-5">
                    <h1 id="españa" class="primary-text-color py-2">LOS PRIMEROS LIBROS EN ESPAÑA</h1>
                    <div>El primer libro impreso en España fue el El sinodal de Aguilafuente en 1472 en
                        Segovia.
                        Por su parte, los tres primeros impresos en València con el procedimiento de Gutenberg
                        fueron:</div>
                    <div id="spainbooks" class="container d-flex carousel-container">
                        <div id="obres" class="carousel-position centro-izquierda" data-slideshow="left">
                            <div class="img-position trobes"></div>
                            <p class="pie-cdo text-center">Trobes en laors Verge Maria - 1474</p>
                        </div>
                        <div id="comprensorium" class="carousel-position set-center" data-slideshow="center">
                            <div class="img-position compre"></div>
                            <p class="pie-cdo text-center">Comprehensorium - 1475</p>
                        </div>
                        <div id="valencian" class="carousel-position centro-derecha" data-slideshow="right">
                            <div class="img-position bible"></div>
                            <p class="pie-cdo text-center">Biblia Valenciana - 1478</p>
                        </div>
                    </div>

                    <div>
                        <a class="iconos" href="#barraNav">
                            <i class="fa-solid fa-circle-up"></i></a>
                    </div>
                </div>


                <!--LUGARES EMBLEMÁTICOS EN VALENCIA-->

                <div id="lugares-valencia" class="container mt-5">
                    <h1 id="valencia" class="primary-text-color py-2">LUGARES EMBLEMÁTICOS DE LA IMPRENTA VALENCIANA
                    </h1>
                    <div>
                        Lugares emblemáticos de las primeras imprentas en València con el procedimiento de
                        Gutenberg.

                        <div class="container-fluid">
                            <div class="row">
                                <div class="column">
                                    <div><img src="../img/15 Valencia.Mercado_Central.jpg" >
                                        <div class="img-gallery-content">Molí de rovella</div>
                                    </div>
                                    <img src="../img/16 El Puig Monasterio.jpg" >

                                </div>
                                <div class="column">
                                    <img src="../img/17 portal valldigna 1.jpg">
                                    <img src="../img/17 portal valldigna 2.jpg">

                                </div>
                                <div class="column">
                                    <img src="../img/19b calle san vicente Patricio May.png" >
                                    <img src="../img/19 calle san vicente patricio mey 2.jpg" >

                                </div>
                            </div>
                        </div>






                        <h4>El Molí de Rovella</h4>
                        <p>
                            En la confluencia de las actuales calles Barón de Cárcer y Pie de la Cruz estuvo ubicada
                            la
                            primera
                            imprenta en València.</p>
                        <!-- <div><img src="../img/15 Valencia.Mercado_Central.jpg"></div> -->
                        <h4> Monasterio de Santa María del Puig</h4>
                        <p> Alberga el Museo de la Imprenta y contiene una réplica exacta de
                            la imprenta utilizada Gutenberg y que se conserva en Maguncia (Alemania).</p>
                        <!--  <div><img src="../img/16 El Puig Monasterio.jpg"></div> -->
                        <h4> Imprenta de Palmart</h4>
                        <p> Junto al Portal de la Valladigna se situaron los talleres de imprenta de donde salieron:
                            “Trobes
                            en
                            laors de la Verge María”, “Comprehensorium”, “Biblia valenciana” .</p>
                        <!--  <div><img src="../img/17 portal valldigna 1.jpg"></div>
                <div><img src="../img/17 portal valldigna 2.jpg"></div> -->
                        <h4>Imprenta Patricio Mey</h4>
                        <p>
                            En el número 3 de la calle San Vicente se imprimió la segunda edición de "Don Quijote de
                            la
                            Mancha".
                        </p>
                        <!--  <div><img src="../img/19b calle san vicente Patricio May.png"></div>
                <div><img src="../img/19 calle san vicente patricio mey 2.jpg"></div> -->
                    </div>
                    <div>
                        <a class="iconos" href="#barraNav">
                            <i class="fa-solid fa-circle-up"></i></a>
                    </div>
                </div>
            </div>
        </div>


        @endsection