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
            background: url(assets/backs/bg_contact.webp);
            background-attachment: fixed;
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
            right: 6%;
            bottom: -45px;
            transition: all 0.2s;
        }

        .page-content-services-streaming {
            opacity: 1;
            transition: all .25s ease .25s;
            width: 50%;
            height: 100%;
            background-color: var(--colo-white);
            transition: all 0.2s;
        }

        .sombra-page-content {
            width: 100%;
            height: 100%;
            padding: 20px 10px 0px 210px;
            box-sizing: border-box;
            transition: all 0.2s;
            display: flex;
            flex-direction: column;
            justify-content: space-between;
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
        }

        .wrap-services-description {
            display: flex;
            justify-content: space-between;
        }

        .wrap-tabs {
            width: 100%;
            margin: 30px 0px 30px 0px;
            display: flex;
            flex-direction: column;
            align-items: center;
            transition: all 0.2s;
            position: relative;

        }

        .tabs-int {
            width: 100%;
            color: var(--color-neutro);
            text-decoration: none;
            font-size: 20px;
            font-weight: 500;
            padding: 8px 8px;
            transition: all .25s ease;
            margin: 0px 0px 10px 0px;
            transition: all 0.2s;

        }


        .cnt-plays {
            display: flex;
            gap: 6px;
            align-items: center;
        }



        .icon-ct div {
            font-size: 2rem;
            border-radius: 4px;
            padding: 8px;
        }


        .sds-serv a {
            font-size: 1.25rem;
            color: var(--color-white);
            font-weight: 400;
        }

        .page-content-logo {
            display: flex;
            justify-content: start;
            width: 100%;
            flex-direction: column;
            align-items: start;
            margin-bottom: 30px;
        }

        .page-content-logo img {
            width: 320px;
        }

        .diri_desc {
            font-weight: 800;
            color: var(--color-secundario);
            font-size: 1.5rem;
            width: 100%;
            text-align: start;
        }


        .bt-quiero {
            display: inline-block;
            background: var(--color-black);
            color: white;
            text-decoration: none;
            font-size: 22px;
            margin: 20px 0px 20px 0px;
            padding: 12px 35px 12px 35px;
            transition: var(--transition300);
            font-weight: 600;
            -webkit-box-shadow: 5px 5px 0px 0px rgba(255, 102, 0, 1);
            -moz-box-shadow: 5px 5px 0px 0px rgba(255, 102, 0, 1);
            box-shadow: 5px 5px 0px 0px rgba(255, 102, 0, 1);
        }
        .ico-che {
            color: var(--color-white);
            background: none;
        }

        .bt-quiero:active,
        .bt-quiero:active .ico-che {
            background-color: var(--color-white);
            color: var(--color-black);
        }

        .bt-quiero:hover,
        .bt-quiero:hover .ico-che {
            background-color: var(--color-primario);
            color: var(--color-white);
        }

        .wrap-redes {
            display: flex;
            flex-direction: column;
            width: 100%;
            margin-left: 3rem;
        }

        .redes-cont {
            display: flex;
            justify-content: start;
            gap: 8px;
        }

        .first-red {
            background-color: var(--color-white);
            font-size: 3rem;
            border-radius: 50%;
            padding: 12px;
            transition: var(--transition150);
        }

        .ic-f {
            color: var(--color-primario);
            transition: var(--transition300);

        }

        .first-red:hover,
        .first-red:hover .ic-f {
            background-color: var(--color-primario);
            color: var(--color-white);
        }
    </style>
    <main id="wrap" class="active">
        <div class="pag-servicios-streaming">

            <!-- <img class="img-resalt" src="assets/images/play.webp" width="100%"> -->

            <div class="page-content-services-streaming">
                <div class="sombra-page-content">

                    <div class="page-content-description">
                        <!-- <div class="titulo-int pr">NUESTROS <br> SERVICIOS</div> -->
                        <div class="wrap-tabs">
                            <div class="tabs-int active">
                                <div class="cnt-plays">
                                    <div class="icon-ct">
                                        <div class=" icon-phone"></div>
                                    </div>
                                    <div class="sds-serv">
                                        <a href="">
                                            TLF : (057)1 3008026 <br>
                                        </a>
                                        <a href="">
                                            WS : (057)3504470872

                                        </a>
                                    </div>
                                </div>
                            </div>
                            <div class="tabs-int">
                                <div class="cnt-plays">
                                    <div class="icon-ct">
                                        <div class="icon-send"></div>
                                    </div>
                                    <div class="sds-serv">
                                        <a href="">
                                            Email : comercial@diri.com.co

                                        </a>
                                        <a href="">
                                            ventas@diri.com.co

                                        </a>
                                    </div>
                                </div>
                            </div>
                            <div class="tabs-int">
                                <div class="cnt-plays">
                                    <div class="icon-ct">
                                        <div class="icon-map-pin"></div>
                                    </div>
                                    <div class="sds-serv">
                                        <a href="">
                                            Bogotá-Colombia

                                        </a>
                                    </div>
                                </div>
                            </div>
                            <div class="wrap-redes">
                                <h3>NUESTRAS REDES</h3>
                                <div class="redes-cont">
                                    <a href="https://web.facebook.com/dirisoluciones" class="first-red">
                                        <span class="icon-facebook ic-f"></span>
                                    </a>
                                    <a href="https://www.instagram.com/diri_soluciones/" class="first-red">
                                        <span class="icon-instagram ic-f"></span>
                                    </a>
                                    <!-- <a href="" class="first-red"></a> -->
                                </div>
                            </div>
                        </div>
                        <a href="./form" class=" bt-quiero">
                            COTIZAR SERVICIOS<span class=" icon-phone-incoming ico-che"></span>
                        </a>
                    </div>

                    <div class="page-content-logo">
                        <img src="./assets/logos/diri_solutions.webp" alt="Logo DiRi">
                        <p class="diri_desc">
                            www.diri.com.co
                        </p>

                    </div>

                </div>
            </div>


            <!-- <div class="img-apoyo1"></div> -->
        </div>
    </main>
    <!-- Enlace al script de Swiper -->


    <?php
    // include('page-master/services.php');
    ?>
    <?php
    // include "page-master/footer.php";
    include('page-master/js.php');
    ?>