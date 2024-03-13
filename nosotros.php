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

        .pag-servicios-streaming {
            width: 100%;
            height: 100vh;
            background: url(assets/backs/white_orange.webp);
            background-attachment: fixed;
            background-position: bottom right;
            background-repeat: no-repeat;
            background-size: cover;
            display: flex;
            align-items: flex-start;
            transition: all 0.2s;
            flex-wrap: wrap;
        }

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
            height: 100%;
            background-color: var(--colo-white);
            transition: all 0.2s;
            display: flex;
        }

        .sombra-page-content {
            height: 100%;
            padding: 50px 10px 0px 0px;
            box-sizing: border-box;
            transition: all 0.2s;
        }

        .diri-int2 {
            width: 90%;
            transition: all 0.2s;
        }

        .titulo-int {
            color: var(--color-black);
            font-weight: 400;
            font-size: 4.5rem;
            text-align: start;
            transition: all 0.2s;
            display: flex;
            align-items: center;
        }

        .titulo-int strong {
            color: var(--color-black);
            font-weight: 900;
        }

        .page-content-description .desc_p {
            color: var(--color-black);
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
        .img-as {
            width: 60%;
            box-shadow: var(--shadow-general);
        }

        .img-as img {
            border-radius: 12px;
        }

        .title-bout {
            display: flex;
            flex-wrap: wrap;
            align-items: center;
        }

        .is-cl {
            font-size: 2rem;
            margin-right: 6px;
        }

        .title-bout h4 {
            font-size: 1.5rem;
            margin: 0.5rem;
        }

        .cnt-abot {
            width: 40%;
            display: flex;
            align-items: end;
            transition: var(--transition300);
            z-index: 2;

        }

        .cnt-abs {
            background-color: black;
            border-radius: 16px;
            box-shadow: var(--shadow-general);
            padding: 1.5rem;
            margin-left: -4rem;
            margin-bottom: -2rem;
            margin-right: 2rem;
            transition: var(--transition300);

        }

        .cnt-abs {
            text-align: justify;
        }

        .about-imgs {
            width: 100%;
            display: flex;
            justify-content: space-between;
            align-items: start;
            margin-bottom: 1rem;
            z-index: 1;
        }

        .img-abt-prs {
            display: flex;
            width: 33%;
            justify-content: center;
 
        }

        .abt-img-ct {
            border-radius: 50%;
            border: 8px solid var(--color-primario);
        }

        .abt-img-ct img {
            width: 200px;
            border-radius: 50%;
            border: 4px solid var(--color-secundario);
            margin: 2px;
        }

        .prs-two {
            width: 33%;
            display: flex;
            justify-content: center;
        }

        .abt-ct-two {
            border: none;
            background-color: var(--color-black);
            border-radius: 50%;
            padding: .8rem;
        }

        .abt-ct-two span {
            font-size: 2.5rem;

        }

        .about-line {
            height: 4px;
            background-color: var(--color-secundario);
            border-radius: 4px;
            display: flex;
            justify-content: space-between;
            position: relative;
            transition: var(--transition300);
        }

        .line-about {
            flex-direction: column;
            transition: var(--transition300);
            position: relative;

        }

        .circle1,
        .circle2 {
            width: 18px;
            height: 20px;
            border-radius: 50%;
            background-color: var(--color-secundario);
            top: -50%;
            position: absolute;
            top: -8px;
            transition: var(--transition300);

        }

        .cnt-line {
            position: absolute;
            width: 100%;
            top: 50%;
            transform: translateY(-50%);
        }

        .circle2 {
            right: 0;
        }

        .text-about {
            padding: 1rem;
            background-color: #fff;
            border: 1px solid   #e5e7eb;border-radius: 8px;
        }

        .text-about h2 {
            color: var(--color-primario);
            text-align: center;
            font-weight: 800;
        }

        .text-about p {
            color: black;
        }

        .text-about p {
            text-align: justify;
            font-size: 1rem;
        }

        .text-about h4 {
            text-align: center;

        }

        .text-about h4 strong {
            color: #404040;
            /* font-weight: 600; */
        }

        .abt-text {
            gap: 1;
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
        .bt-services:hover{
            transform: scale(1.02);
        }
        .bt-services:active{
            transform: scale(1);
        }

        .ico-che{
            color: var(--color-white);
        }
        .bt-services:hover,
        .bt-services:hover .ico-che {
            color: var(--color-white);
            background: var(--color-primario);
        }
        .bt-services:active,
        .bt-services:active .ico-che{
            background-color: var(--color-black);
            color: var(--color-white);
        }
        .swiper-button-next svg,
        .swiper-button-prev svg {
            display: none !important;
        }
    </style>
    <main id="wrap" class="active">
        <div class="pag-servicios-streaming">

            <div class="page-content-services-streaming">
                <div class="sombra-page-content cl-normal">

                    <div class="page-content-description">
                        <div class="titulo-int pr">
                            <span class="icon-chevrons-right ic-ts"></span>
                            Sobre <strong> Nosotros</strong>
                        </div>
                        <div class="page-content-description">
                            <p class="desc_p">
                                En <strong>DiRi Soluciones</strong>, nos destacamos como pioneros en el fortalecimiento del poder web multiplataforma, ofreciendo una amplia gama de servicios tecnológicos innovadores para satisfacer las demandas cambiantes del mundo digital actual.
                                <br>
                                Con <strong>más de dos décadas de experiencia</strong> en el desarrollo de juegos, experiencias interactivas y soluciones tecnológicas aplicadas, nuestro equipo de profesionales altamente capacitados se ha ganado una reputación por ofrecer experiencias únicas y exclusivas en todas nuestras interacciones con los clientes.
                                <br>
                                Nos especializamos en la creación de <strong>
                                experiencias inmersivas</strong>, <strong>juegos en línea</strong>, <strong>desarrollos de Apps</strong>, <strong>desarrollos de hardware</strong>
                                , <strong>diseño y creación de juegos</strong>, <strong>alquiler de equipos multi-media</strong>, <strong>alquiler y venta de productos ​multi-media</strong>
                                , aplicaciones por video y voz hasta <strong>catálogos en línea</strong> y <strong>paseos virtuales 360</strong>. Nuestro enfoque centrado en el cliente nos impulsa a brindar un soporte excepcional, garantizando que cada proyecto sea completamente operativo y optimizado para ofrecer la mejor experiencia posible a los usuarios finales.
                            </p>
                        </div>
                        <div class="page-content-description addc">

                            <div class="img-as">
                                <swiper-container class="mySwiper" pagination="true" pagination-clickable="true" space-between="30" effect="fade" autoplay-delay="2000" autoplay-disable-on-interaction="false" loop="true">
                                    <swiper-slide><img src="./assets/backs/bg_contact.webp" alt="DiRi Nosotros"></swiper-slide>
                                    <swiper-slide><img src="./assets/backs/yet1.webp" alt="DiRi Nosotros"></swiper-slide>
                                    <swiper-slide><img src="./assets/backs/jet2.webp" alt="DiRi Nosotros"></swiper-slide>
                                </swiper-container>
                            </div>
                            <div class="cnt-abot">
                                <div class="cnt-abs">
                                    <div class="title-bout">
                                        <span class="icon-clock is-cl"></span>
                                        <h4>
                                            Somos más que innovación
                                        </h4>
                                    </div>
                                    <p>
                                    Además, nuestra capacidad para desarrollar soluciones personalizadas va más allá de los juegos. También nos destacamos en el diseño y desarrollo de software especializado, control sistematizado, base de datos y mucho más. Nuestro compromiso es resolver tecnológicamente cualquier desafío que enfrenten nuestros clientes, ya sea en Miami, Puerto Rico, Costa Rica, Argentina, Chile y el mundo entero.
                                    <br>
                                    Siempre estamos listos para abordar nuevos desafíos y estamos aquí para ayudarlo a llevar sus ideas al siguiente nivel. <strong style="color: white;">
                                    ¡Contáctenos hoy mismo y déjenos ser su socio tecnológico de confianza!
                                    </strong>
                                    </p>
                                </div>
                            </div>

                        </div>
                        <div class="page-content-description addc">
                            <div class="titulo-int pr">
                                <span class="icon-chevrons-right ic-ts"></span>
                                Nuestro <strong> Equipo</strong>
                            </div>

                        </div>
                        <div class="page-content-description addc">
                            <div class="about-imgs">
                                <div class="img-abt-prs">
                                    <div class="abt-img-ct">
                                        <img src="./assets/peoples/ricardo.webp" alt="Imagen de persona">
                                    </div>
                                </div>
                                <div class="img-abt-prs">
                                    <div class="abt-img-ct">
                                        <img src="./assets/peoples/sonia.webp" alt="Imagen de persona">
                                    </div>
                                </div>
                                <div class="img-abt-prs">
                                    <div class="abt-img-ct">
                                        <img src="./assets/peoples/efra.webp" alt="Imagen de persona">
                                    </div>
                                </div>

                            </div>
                        </div>
                        <div class="page-content-description addc line-about">
                            <div class="about-imgs">
                                <div class="img-abt-prs prs-two">
                                    <div class="abt-ct-two">
                                        <span class="icon-user-check"></span>
                                    </div>
                                </div>
                                <div class="img-abt-prs prs-two">
                                    <div class="abt-ct-two">
                                        <span class="icon-user-plus"></span>
                                    </div>
                                </div>
                                <div class="img-abt-prs prs-two">
                                    <div class="abt-ct-two">
                                        <span class="icon-user-check"></span>
                                    </div>
                                </div>

                            </div>
                            <div class="cnt-line">
                                <div class="about-line">
                                    <div class="circle1"></div>
                                    <div class="circle2"></div>
                                </div>
                            </div>
                        </div>
                        <div class="page-content-description addc adx">
                            <div class="about-imgs abt-text">
                                <div class="img-abt-prs text-about">
                                    <div class="">
                                        <h2>
                                            Ricardo Niño
                                        </h2>
                                        <h4><strong>CEO y Director de Ingeniería de DiRi</strong></h4>
                                        <p>
                                        Guía a nuestro equipo hacia la excelencia en el desarrollo de soluciones tecnológicas creativas y únicas. Con más de dos décadas de experiencia en ingeniería aplicada, Ricardo impulsa a DiRi hacia nuevos horizontes, transformando la forma en que interactuamos en el mundo digital.
                                        </p>
                                    </div>
                                </div>
                                <div class="img-abt-prs text-about">
                                    <div class="">
                                        <h2>
                                            Sonia Duarte
                                        </h2>
                                        <h4><strong>Directora comercial y creactiva</strong></h4>
                                        <p>
                                        Lidera nuestra estrategia comercial con creatividad y pasión. Fusiona habilidades comerciales con una perspectiva innovadora para ofrecer soluciones únicas y satisfacer las necesidades de nuestros clientes. Su liderazgo inspirador impulsa a DiRi Soluciones hacia el éxito en el mundo digital.
                                        </p>
                                    </div>
                                </div>
                                <div class="img-abt-prs text-about">
                                    <div class="">
                                        <h2>
                                            Efrael Villanueva
                                            </hh23>
                                            <h4><strong>Líder Técnico de Software</strong></h4>
                                            <p>
                                            Con su experiencia y conocimientos, lidera la creación e implementación de soluciones innovadoras. Su compromiso con la excelencia técnica garantiza resultados de calidad en cada proyecto.
                                            </p>
                                    </div>
                                </div>

                            </div>
                        </div>
                        <?php include('./page-master/footer.php') ?>
                    </div>
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