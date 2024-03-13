<?php
$title = "Home";

include('page-master/head.php');
include('page-master/header.php');
?>

<body>
    <style>
        #wrap {
            background: none;
            position: relative;
            z-index: 8;
        }

        .pag-servicios-streaming {
            width: 100%;
            height: 100vh;
            background: url(assets/backs/white_orange.webp);
            background-position: bottom right;
            background-repeat: no-repeat;
            background-size: cover;
            display: flex;
            align-items: flex-start;
            transition: all 0.2s;
        }

        .img-resalt {
            width: 450px;
            position: fixed;
            z-index: 11;
            right: 10%;
            bottom: -45px;
            transition: all 0.2s;
        }

        .diri-int2 {
            width: 90%;
            transition: all 0.2s;
        }

        .titulo-int {
            text-transform: uppercase;
            color: var(--color-black);
            font-weight: 800;
            font-size: 30px;
            text-align: center;
            transition: all 0.2s;
        }



        .services-description {
            width: 100%;

            box-sizing: border-box;
            display: flex;
            flex-wrap: wrap;
            align-items: center;
            align-content: flex-start;
            transition: all 0.2s;
            height: 100%;
        }

        .wrap-services-description {
            width: 100%;
            display: flex;
            justify-content: space-between;
        }

        .wrap-cont {
            width: 100%;
            padding-top: 20px;
        }



        .titulo-serv-int {
            width: 100%;
            padding: 20px 40px 0px 180px;
            display: flex;
            justify-content: space-between;
            align-items: flex-start;
            transition: all 0.2s;
        }

        .wrap-titu-int {
            z-index: 2;
            font-weight: bold;
            transition: all 0.2s;
            background: rgb(247, 149, 86);
            background: linear-gradient(25deg, rgba(247, 149, 86, 1) 0%, rgba(255, 102, 0, 1) 100%);
            border-radius: 10px;
            display: flex;
            flex-direction: column;
            align-items: center;
            padding: 20px 40px;
        }

        .nuevos {
            font-size: 2.5rem;
        }

        .avance {
            font-size: 3rem;
            color: var(--color-primario);
        }

        .bt-back {
            background-color: var(--color-black);
            width: 45px;
            height: 45px;
            border-radius: 7px;
            color: white;
            text-decoration: none;
            font-size: 25px;
            transition: all 0.2s;
            display: flex;
            justify-content: center;
            align-items: center;
        }


        .wrap-cnt-serv {
            margin-top: -3.5rem;
            padding: 0px 40px 0px 180px;
            background: url(assets/backs/bg_serv.webp);
            background-attachment: fixed;
            background-position: center;
            background-size: cover;
            position: relative;
            display: block;
            width: 100%;
            transition: all 0.2s;
        }

        .cont-srv,
        .wrap-cons-srv {
            padding: 0px 0px 0px 180px;
        }

        .wrap-cons-srv {
            margin-right: 40px;
        }

        .wrap-cons-srv h2 {
            font-weight: 800;
            font-size: 4.5rem;
            margin-top: .8rem;
            margin-bottom: .5rem;
        }

        .cont-srv {
            background: rgb(76, 22, 128);
            background: linear-gradient(25deg, rgba(76, 22, 128, 1) 0%, rgba(255, 102, 0, 1) 100%);
            transition: all 0.2s;
        }

        .cont-srv h3 {
            margin: 0;
            font-size: 2.8rem;
            padding: 1rem 0rem;
            text-align: center;
        }

        .text-pr {
            width: 40%;
            padding: 15rem 2rem 2rem 2rem;
            font-weight: 500;
            margin: 0;
        }

        .nuestros {
            color: var(--color-secundario);
        }

        .servics {
            color: var(--color-primario);
        }

        .bt-lo-quiero {
            display: inline-block;
            background: var(--color-black);
            color: white;
            text-decoration: none;
            font-size: 21px;
            border-radius: 5px;
            margin: 40px 0px 0px 0px;
            padding: 7px 20px 10px 20px;
            transition: all 0.2s;
            font-weight: 800;
        }

        .detail-svr {
            display: flex;
            justify-content: space-between;
            flex-wrap: wrap;
        }

        .js-sev-int {
            height: 100%;
            width: 100%;
            background: #545454b3;
            display: flex;
            justify-content: center;
            align-items: center;
        }

        .js-sev {
            width: 33.33%;
            background: url(assets/backs/bg_serv.webp);
            background-size: cover;
            background-position: center;

        }

        .js-bg-color {
            background: var(--color-secundario);
            padding: 1rem;
        }

        .js-bg-color hr {
            border: none;
            color: var(--color-white);
            width: 3rem;
            height: 4px;
            background-color: var(--color-white);
            float: left;
        }

        .js-bg-color p {
            font-size: 2rem;
            text-align: justify;
            float: none;
        }

        .js-sev-int h4 {
            width: 100%;
            text-align: center;
            margin: 0 .5rem;
            font-size: 2rem;
            font-weight: 700;
            padding: 1rem .5rem;
            background-color: var(--color-secundario);
        }

        .bg-pr {
            background-color: var(--color-primario);
        }

        .bg-blue {
            background-color: var(--color-light1);
        }

        .foot-serv {
            display: flex;
            flex-wrap: wrap;
            justify-content: space-between;
            margin-top: 2rem;
        }

        .first-footer{
            width: 65%;
        }
        .two-footer {
            width: 35%;
            display: flex;
            flex-direction: column;
            justify-content: center;
        }

        .ft-img {
            width: 100%;
            display: flex;
            justify-content: space-between;
            flex-wrap: wrap;
       
        }
        .ft-img-f{
            border: 4px solid   var(--color-secundario);
            padding:  .8rem;
            border-radius: 50%;
            
        }
        .img-ft{
            background-color: var(--color-primario);
            padding: 2rem 1rem;
            border-radius: 50%;
            height: 100%;
            width: 200px;
        }
        .cnt-ft{
            width: 74%;
            padding-left: 1rem;
            margin-left: .5rem;
            border-left: 3px solid var(--color-primario);
            display: flex;flex-direction: column;
            justify-content: center;
        }
        .cnt-ft a ,.two-footer a{
            color: var(--color-black);
            padding-top: 0.5rem;
            font-size: 1.2rem;
            font-weight: 500;
        }
        .two-footer a{
            color: var(--color-primario);
            font-weight: 600;
            font-size: 1.5rem;
            text-align: right;
            margin-right: 4rem;
            padding-bottom: .5rem;
        }
        .ico-ft{
            color: var(--color-primario);
            font-size: 20px;
            margin-right: .3rem;
        }
        .dt-ft{
            color: var(--color-secundario);
            font-size: 1.2rem;
        }
    </style>
    <main id="wrap" class="active">
        <div class="pag-servicios-streaming">

            <!-- <img class="img-resalt" src="assets/images/streaming.webp" width="100%"> -->


            <div class="services-description">
                <div class="wrap-services-description">
                    <div class="wrap-cont">
                        <div class="titulo-serv-int">
                            <div class="wrap-titu-int">
                                <span class="nuevos">
                                    Nuevos
                                </span>
                                <span class="avance">
                                    Avances
                                </span>
                            </div>
                            <img src="./assets/logos/diri_logo_p.webp" alt="Logo DiRi Solutionss" style="width: 200px;">
                        </div>
                        <div class="wrap-cnt-serv">
                            <h3 class="text-pr">
                                PODEMOS REALIZAR SU PROYECTO, NUESTRO EQUIPO DE TRABAJO CUENTA CON MÁS DE 15 AÑOS DE EXPERIENCIA EN EL DESARROLLO DE SOLUCIONES QUE IMPLIQUEN DE CREATIVIDAD Y TECNOLOGÍA.
                            </h3>

                        </div>

                        <div class="cont-srv">
                            <h3>
                                Experiencia en 3D
                            </h3>

                        </div>
                        <div class="wrap-cons-srv">
                            <h2>
                                <span class="nuestros">Nuestros</span>
                                <span class="servics">servicios</span>
                            </h2>

                            <div class="detail-svr">
                                <div class="js-sev">
                                    <div class="js-sev-int">
                                        <h4>
                                            Juegos simuladores
                                        </h4>
                                    </div>
                                </div>
                                <div class="js-sev js-bg-color">
                                    <hr>
                                    <p>Simulador patineta, patineta TRIVIA, Simulador vicicletas, Simulador vehículo, Simulador moto, Simulador fútbol,LinkFV, Simulador de mini Golf, AdverGames, dados, concéntrese, escalera, endlesRunner, plataformasTrivia</p>
                                </div>
                                <div class="js-sev">
                                    <div class="js-sev-int">
                                        <h4>
                                            Experiencias Hit
                                        </h4>
                                    </div>
                                </div>
                                <div class="js-sev js-bg-color bg-pr">
                                    <hr>
                                    <p>Simulador patineta, patineta TRIVIA, Simulador vicicletas, Simulador vehículo, Simulador moto, Simulador fútbol,LinkFV, Simulador de mini Golf, AdverGames, dados, concéntrese, escalera, endlesRunner, plataformasTrivia</p>
                                </div>
                                <div class="js-sev">
                                    <div class="js-sev-int">
                                        <h4>
                                            Experiencias Hit
                                        </h4>
                                    </div>
                                </div>
                                <div class="js-sev js-bg-color bg-blue">
                                    <hr>
                                    <p>Simulador patineta, patineta TRIVIA, Simulador vicicletas, Simulador vehículo, Simulador moto, Simulador fútbol,LinkFV, Simulador de mini Golf, AdverGames, dados, concéntrese, escalera, endlesRunner, plataformasTrivia</p>
                                </div>
                            </div>

                            <div class="foot-serv">
                                <div class="first-footer">
                                    <div class="ft-img">
                                        <div class="ft-img-f">
                                        <img src="./assets/logos/diri.webp" alt="Logo DiRi" class="img-ft">
                                        </div>
                                        <div class="cnt-ft">
                                            <a href="mailto:comercial@diri.com.co">
                                                <span class="icon-mail ico-ft"></span>comercial@diri.com.co
                                            </a>
                                            <a href="mailto:ventas@diri.com.co">
                                                <span></span>
                                            </a><a href="tel:0573024684089">
                                                <span class=" icon-phone-call ico-ft"></span> <span class="dt-ft">Móvil:</span>(057)3024684089
                                            </a><a href="">
                                                <span class="icon-whatsapp ico-ft"></span>WhatsApp: (057)3504470872
                                            </a>
                                            <a href="">
                                                <span class=" icon-phone-call ico-ft"></span> <span class="dt-ft">Fijo:</span>(057)3008026
                                            </a>
                                            <a href="">
                                                <span class=" icon-map-pin ico-ft"></span>Bogotá, Colombia
                                            </a>
                                        </div>
                                    </div>
                                </div>
                                <div class="two-footer">
                                    <a href="">wwww.diri.com.pe</a>
                                    <img src="./assets/images/dots.webp" alt="Points DiRi">
                                </div>
                            </div>
                            <!-- <a href="https://api.whatsapp.com/send?phone=51994189894&amp;text=Hola,%20quisiera%20informaci%C3%B3n%20" target="_blank" class="bt-lo-quiero">COTIZAR SERVICIOS</a> -->
                        </div>

                    </div>

                </div>



            </div>


            <!-- <div class="img-apoyo1"></div> -->
        </div>
    </main>
    <script src="http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
    <script>
        $(document).ready(function() {
            var $carouselContainer = $('.wra-img-serv');
            var $images = $carouselContainer.find('img');
            var imageWidth = $images.first().width();

            var animationInterval = setInterval(function() {
                var $activeImage = $carouselContainer.find('.active');
                var nextIndex = ($activeImage.index() + 1) % $images.length;

                $activeImage.fadeOut(500, function() {
                    $(this).removeClass('active');
                    $images.eq(nextIndex).fadeIn(500).addClass('active');
                });

            }, 3000);

            $carouselContainer.on('mouseenter', function() {
                clearInterval(animationInterval);
            });

            $carouselContainer.on('mouseleave', function() {
                animationInterval = setInterval(function() {
                    var $activeImage = $carouselContainer.find('.active');
                    var nextIndex = ($activeImage.index() + 1) % $images.length;

                    $activeImage.fadeOut(500, function() {
                        $(this).removeClass('active');
                        $images.eq(nextIndex).fadeIn(500).addClass('active');
                    });

                }, 3000);
            });
        });
    </script>

    <?php
    // include('page-master/services.php');
    ?>
    <?php
    // include "page-master/footer.php";
    include('page-master/js.php');
    ?>