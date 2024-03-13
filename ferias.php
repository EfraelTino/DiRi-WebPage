<?php
$title = "Home";

include('page-master/head.php');
include('page-master/header.php');
?>
<!-- Enlaces a los estilos y scripts de Swiper mediante CDN -->
<link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css" />



<body>
    <style>
        #wrap {
            background: none;
            position: relative;
            z-index: 8;
        }

        .header-fixed::after {
            background: none !important;
        }

        /* .pag-servicios-streaming {
            width: 100%;
            h
            flex-wrap: wrap;eight: 100vh;
            background: url(assets/backs/white_orange.webp);
            background-attachment: fixed;
            background-position: bottom right;
            background-repeat: no-repeat;
            background-size: cover;
            display: flex;
            align-items: flex-start;
            transition: all 0.2s;
        } */

        .img-resalt {
            width: 450px;
            position: fixed;
            z-index: 11;
            right: 6%;
            bottom: -45px;
            transition: all 0.2s;
        }

        .page-content-services-streaming {
            opacity: 1;
            transition: all .25s ease .25s;
            width: 100%;
            min-height: 100vh;
            background: url('./assets/backs/backMorado.webp');
            background-size: cover;
            background-repeat: no-repeat;
            background-attachment: fixed;
            transition: all 0.2s;
            display: flex;
        }

        .sombra-page-content {
            height: 100%;
            padding: 50px 10px 0px 0px;
            box-sizing: border-box;
            transition: all 0.2s;
        }

        .page-content-description {
            max-width: 50rem;
        }

        .sombra-servicios {
            margin-left: 220px;
        }

        .diri-int2 {
            width: 90%;
            transition: all 0.2s;
        }

        .titulo-int {
            color: var(--color-white);
            font-weight: 400;
            font-size: 4.5rem;
            text-align: start;
            transition: all 0.2s;

        }

        .titulo-int strong {
            color: var(--color-white);
            font-weight: 900;
        }

        .page-content-description .desc_p {
            color: var(--color-white);
            text-align: justify;
            font-size: 1.2rem;
        }

        .services-description {
            width: 30%;
            padding: 0px 0px 40px 40px;
            box-sizing: border-box;
            display: flex;
            flex-wrap: wrap;
            align-items: center;
            align-content: flex-start;
            transition: all 0.2s;
        }

        .wrap-services-description {
            display: flex;
            justify-content: end;
        }

        .ic-ts {
            color: var(--color-secundario);
            font-size: 32px;
            font-weight: 900;
            transition: all 0.2s;
        }

        /* CARROUSEL */
        .wrap-slides {
            overflow: hidden;
            width: 100%;
            /* Ajusta el ancho según sea necesario */
        }

        .wra-img-serv {
            align-items: start;
            width: 100%;
            display: flex;
            transition: transform 1s ease-in-out;
        }

        .wra-img-serv img {
            flex: 0 0 auto;
            width: 100%;
            object-fit: contain;
            opacity: 0;
            transition: opacity 1s ease-in-out;
        }

        .wra-img-serv img.active {
            opacity: 1;
        }

        .addc {
            width: 100%;
            display: flex;
            justify-content: space-between;
            margin: 2rem 0rem 2rem 0rem;
            gap: 12px;
            transition: var(--transition300);

        }

        .bt-services {
            display: inline-block;
            background: var(--color-black);
            color: white;
            text-decoration: none;

            margin: 20px 0px 20px 0px;
            transition: var(--transition300);
            font-weight: 600;
            -webkit-box-shadow: 5px 5px 0px 0px rgba(255, 102, 0, 1);
            -moz-box-shadow: 5px 5px 0px 0px rgba(255, 102, 0, 1);
            box-shadow: 5px 5px 0px 0px rgba(255, 102, 0, 1);
        }

        .bt-services:hover {
            transform: scale(1.02);
        }

        .bt-services:active {
            transform: scale(1);
        }

        .ico-che {
            color: var(--color-white);
        }

        .bt-services:hover,
        .bt-services:hover .ico-che {
            color: var(--color-white);
            background: var(--color-primario);
        }

        .bt-services:active,
        .bt-services:active .ico-che {
            background-color: var(--color-black);
            color: var(--color-white);
        }

        .intro-sec ul,
        .intro-sec li {
            color: black;
            list-style: none;
        }
        .lista_principal{
            margin: 0;
            padding: 0;
        }
        .lista_principal li {
            display: flex;
            align-items: start;
            text-align: justify;
            /* font-size: 18px; */
            margin: 0.5rem 0rem;
            padding: 0;
        }

        .img_lista {
            width: 24px;
            margin-right: 10px;
        }

        .wrap-titu-int {
            color: black;
            font-size: 20px;
            font-weight: 700;
            transition: all 0.2s;
        }

        .wrap-galeria {
            display: flex;
            width: 100%;
            flex-wrap: wrap;
            align-items: center;
            justify-content: space-between;
            gap: 0.5rem;
        }

        .cont-img-feria {
            width: 32%;
        }

        .cont-img-feria img {
            border-radius: 4px;
        }

        .desc-ft {
            width: 100%;
            text-align: center;
        }

        .desc-ft small {
            color: var(--color-neutro);
        }

        swiper-container {
            width: 100%;
            height: 100%;
            position: fixed;
            top: 0;
            left: 0;
            right: 0;
            bottom: 0;
            z-index: -1;
        }

        swiper-slide {
            text-align: center;
            font-size: 18px;
            background: #fff;
            display: flex;
            justify-content: end;
            align-items: center;
        }

        swiper-slide img {
            display: block;
            width: 60%;
            height: 100%;
            object-fit: cover;
        }

        .intro-sec {
            max-width: 38rem;
            background-color: var(--color-white);
            border-radius: 6px;
            padding: 1rem;
            display: flex;
            align-items: start;
            column-gap: 10px;
        }
    </style>
    <main id="wrap" class="active">
        <div class="pag-servicios-streaming">
            <swiper-container class="mySwiper" space-between="30" effect="fade" autoplay-delay="2500" autoplay-disable-on-interaction="false">
                <swiper-slide>
                    <img src="./assets/feria/equipo4-1.webp" />
                </swiper-slide>
                <swiper-slide>
                    <img src="./assets/feria/equipo2-1.webp" />
                </swiper-slide>
                <swiper-slide>
                    <img src="./assets/feria/equipo3-1.webp" />
                </swiper-slide>

                <swiper-slide>
                    <img src="./assets/feria/equipo1-2.webp" />
                </swiper-slide>
            </swiper-container>
            <div class="page-content-services-streaming">
                <div class="sombra-page-content sombra-servicios">

                    <div class="page-content-description">
                        <div class="titulo-int pr">
                            Ferias <strong> <br> Tecnológicas</strong>
                        </div>
                        <div class="page-content-description">
                            <p class="desc_p">
                                ¡Descubre el futuro en nuestras ferias tecnológicas! En DiRi Soluciones, nos enorgullece ser pioneros en la organización de eventos tecnológicos innovadores que inspiran, educan y conectan a personas de todas partes. Desde presentaciones de vanguardia hasta exhibiciones interactivas, nuestras ferias son el escenario perfecto para descubrir las últimas tendencias y avances en tecnología. ¡Únete a nosotros y sé parte de la revolución tecnológica!
                            </p>
                        </div>
                        <div class="page-content-description addc">
                            <div class="titulo-int pr">
                                Última<strong> Feria</strong>
                            </div>
                        </div>
                        <div class="cont-feria">
                            <div class="intro-sec">
                                <div class="logo-ciudad">
                                    <img src="./assets/logos/logoCajica.png" alt="Logo Municipio" style="width: 80px; background:var(--color-primario); padding:0.2rem; border-radius:6px">
                                </div>
                                <div class="cont-descripcion">
                                    <div class="wrap-titu-int ">
                                        Feria Tecnológica de Cajicá
                                    </div>
                                    <ul class="lista_principal">
                                        <li>
                                            <img src="./assets/logos/dirioio.webp" class="img_lista" alt="Logo DiRi">
                                            Moto la Cumbre
                                        </li>
                                        <li>
                                            <img src="./assets/logos/dirioio.webp" class="img_lista" alt="Logo DiRi">
                                            Simulador de Boxeo
                                        </li>
                                        <li>
                                            <img src="./assets/logos/dirioio.webp" class="img_lista" alt="Logo DiRi">
                                            Taller de Robótica
                                        </li>
                                        <li>
                                            <img src="./assets/logos/dirioio.webp" class="img_lista" alt="Logo DiRi">
                                            Estimulación sensorial
                                        </li>
                                        <li>
                                            <img src="./assets/logos/dirioio.webp" class="img_lista" alt="Logo DiRi">
                                            Reciclemos
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>

                        <!-- <div class="wrap-galeria" id="galeria">
                        </div> -->
                    </div>
                    <?php
                    // include ("./page-master/footer.php")
                    ?>
                </div>
            </div>
            <a href="./form" class="bt-services">
                COTIZAR SERVICIOS<span class=" icon-phone-incoming ico-che"></span>
            </a>
    </main>
    <!-- Enlace al script de Swiper -->
    <script src="http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-element-bundle.min.js"></script>

    <?php
    // include('page-master/services.php');
    ?>
    <?php
    // include "page-master/footer.php";
    include('page-master/js.php');
    ?>