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

        #canvasZone {
            position: fixed;
            top: 0;
            bottom: 0;
        }

        .wrap {
            opacity: 1;
            transform: translateY(0);
            transition: all 0.2s;
            overflow: hidden;
        }

        .pag-software,
        .pag-services {
            width: 100%;
            height: 100vh;
            display: none;
            transition: all 0.2s;
            align-items: flex-start;
        }

        .pag-services {
            display: none;
        }
        .pag-software{
            display: none;
        }
        .page-content-software {
            width: 25%;
            height: 100%;
            -webkit-backdrop-filter: blur(7px);
            backdrop-filter: blur(7px);
            padding: 40px 10px 0px 150px;
            box-sizing: border-box;
            transform: translateX(-500px);
            transition: all .25s ease .25s;
            transition: all 0.2s;
            transform: translateX(0);
        }


        .page-content-description {
            margin: 40px 0px 0px 0px;
            transition: all 0.2s;
        }

        .diri-int {
            width: 90%;
            /* height: 140px; */
        }

        .titulo-int {
            text-transform: uppercase;
            font-weight: 800;
            font-size: 30px;
            color: var(--colo-white);
            text-align: center;
            transition: all 0.2s;
        }

        .wrap-category {
            width: 75%;
            height: 100%;

        }

        .wrap-ser {

            width: 100%;
            height: 100%;
            display: grid;
            grid-template-columns: repeat(3, 1fr);
            grid-template-rows: 100% auto;
        }

        .bt-juegos,
        .bt-ecommerce,
        .bt-webpage,
        .bt-streaming,
        .bt-electronica,
        .bt-equipos,
        .bt-consola,
        .bt-escarapela {
            width: 25%;
            height: 100%;
            background-image: url(assets/backs/tr.webp);
            background-size: cover;
            background-position: center;
            text-decoration: none;
            display: flex;
            align-items: flex-end;
            transition: all 0.2s;
            flex-wrap: wrap;
        }

        .wrap-ser {
            width: 100%;
            height: 100%;
            display: grid;
            grid-template-columns: repeat(3, 1fr);
            grid-template-rows: repeat(2, 50%);
        }

        .bt-streaming {
            grid-row: 1 / 3;
            grid-column: 1;
            height: 100%;
            width: 100%;
        }

        .bt-electronica {
            grid-row: 1 / 2;
            grid-column: 2;
            height: 100%;
            width: 100%;
        }



        .bt-equipos {
            grid-row: 1 / 2;
            grid-column: 3;
            height: 100%;
            width: 100%;
        }

        .bt-consola {
            grid-row: 2 / 3;
            grid-column: 2;
            height: 100%;
            width: 100%;
        }

        .bt-escarapela {
            grid-row: 2 / 3;
            grid-column: 3;
            height: 100%;
            width: 100%;
        }

        .bt-ecommerce {
            background-image: url(assets/backs/ks.webp);
        }

        .bt-webpage {
            background-image: url(assets/backs/webi.webp);
        }

        .bt-sombra {
            width: 100%;
            height: 70%;
            transition: all 0.2s;
            display: flex;
            align-items: flex-end;
            justify-content: center;
            padding: 0px 0px 40px 0px;
            box-sizing: border-box;
            transition: all 0.2s;
            background-image: linear-gradient(to bottom, rgba(0, 0, 0, 0) 14%, rgba(0, 0, 0, 0.73));
        }

        .bt-juegos:hover .bt-sombra,
        .bt-ecommerce:hover .bt-sombra,
        .bt-webpage:hover .bt-sombra, .bt-streaming:hover .bt-sombra, .bt-electronica:hover .bt-sombra, .bt-equipos:hover .bt-sombra, .bt-consola:hover .bt-sombra, .bt-escarapela:hover .bt-sombra  {
            width: 100%;
            height: 100%;
            display: flex;
            align-items: center;
            justify-content: center;
            padding: 0px 0px 40px 0px;
            box-sizing: border-box;
            background-image: linear-gradient(to bottom, rgba(0, 0, 0, 0) 0%, rgba(0, 0, 0, 0));
            background-color: rgba(0, 0, 0, 0.6);
            backdrop-filter: blur(7px);
            transition: all 0.2s;
        }
        .titulo-bt {
            width: 60%;
            height: 90px;
            color: white;
            text-transform: uppercase;
            font-size: 40px;
            line-height: 1;
            text-align: center;
            font-weight: 800;
            transition: all 0.2s;
            display: flex;
            justify-content: center;
            align-items: center;
            transition: all 0.2s;
        }
    </style>
    <main id="wrap">
        <div class="pag-software">
            <div class="page-content-software">
                <img class="diri-int" src="assets/logos/diri_logo_p.webp" width="100%">
                <div class="page-content-description">
                    <div class="titulo-int">SOFTWARE E INGENIERÍA</div>
                </div>
            </div>
            <a href="" class="bt-webpage spa">
                <div class="bt-sombra">
                    <div class="titulo-bt">PÁGINAS WEB</div>
                </div>
            </a>

            <a href="" class="bt-juegos spa">
                <div class="bt-sombra">
                    <div class="titulo-bt">JUEGOS</div>
                </div>
            </a>
            <a href="" class="bt-ecommerce spa">
                <div class="bt-sombra">
                    <div class="titulo-bt">ECOMMERCE</div>
                </div>
            </a>
        </div>
        <div class="pag-services">
            <div class="page-content-software">
                <img class="diri-int" src="assets/logos/diri_logo_p.webp" width="100%">
                <div class="page-content-description">
                    <div class="titulo-int">SERVICIOS</div>
                </div>
            </div>
            <div class="wrap-category">
                <div class="wrap-ser">
                    <a href="" class="bt-streaming spa">
                        <div class="bt-sombra">
                            <div class="titulo-bt">STREAMING</div>
                        </div>
                    </a>
                    <a href="" class="bt-electronica spa">
                        <div class="bt-sombra">
                            <div class="titulo-bt">ELECTRÓNICA</div>
                        </div>
                    </a>
                    <a href="" class="bt-equipos spa">
                        <div class="bt-sombra">
                            <div class="titulo-bt">ALQUILER DE EQUIPOS</div>
                        </div>
                    </a>
                    <a href="" class="bt-consola spa">
                        <div class="bt-sombra">
                            <div class="titulo-bt">ALQUILER DE CONSOLAS</div>
                        </div>
                    </a>
                    <a href="" class="bt-escarapela spa">
                        <div class="bt-sombra">
                            <div class="titulo-bt">REGISTRO DE ESCARAPELAS</div>
                        </div>
                    </a>

                </div>
            </div>
        </div>
    </main>


    <?php
    include('page-master/services.php');
    ?>
    <div id="canvasZone"><canvas id="renderCanvas"></canvas></div>
    <script src="https://cdn.babylonjs.com/babylon.js"></script>
<script src="https://cdn.babylonjs.com/gui/babylon.gui.min.js"></script>
<script src="https://cdn.babylonjs.com/loaders/babylonjs.loaders.js"></script>
    <script src="js/index.js"></script>

    <?php
    // include "page-master/footer.php";
    include('page-master/js.php');
    ?>