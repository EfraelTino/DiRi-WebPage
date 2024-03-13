<?php
$title = "Home";

include('page-master/head.php');
include('page-master/header.php');
?>
<!-- Enlaces a los estilos y scripts de Swiper mediante CDN -->
<link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css" />



<body>
    <style>
        body {
            cursor: url('./assets/logos/dirioio.svg'), auto, 20px;
        }

        :root {
            --swiper-theme-color: #FF6600 !important;
        }

        #wrap {
            background: none;
            position: relative;
            z-index: 8;
        }

        #radius-shape-2 {
            position: absolute;
            border-radius: 50%;
            bottom: 143px;
            left: 100px;
            width: 300px;
            height: 300px;
            background: rgb(76, 22, 128);
            background: radial-gradient(circle, rgba(76, 22, 128, 1) 0%, rgba(255, 102, 0, 1) 100%);
            overflow: hidden;
        }

        #radius-shape-3 {
            position: absolute;
            border-radius: 50%;
            bottom: 143px;
            right: 10px;
            width: 300px;
            height: 300px;
            background: rgb(76, 22, 128);
            background: radial-gradient(circle, rgba(76, 22, 128, 1) 0%, rgba(255, 102, 0, 1) 100%);
            overflow: hidden;
        }

        #radius-shape-1 {
            position: absolute;
            border-radius: 50%;
            height: 220px;
            width: 220px;
            top: 11px;
            left: 402px;
            background: rgb(76, 22, 128);
            background: radial-gradient(circle, rgba(76, 22, 128, 1) 0%, rgba(255, 102, 0, 1) 100%);
            overflow: hidden;
        }

        .pag-servicios-streaming {
            width: 100%;
            background: rgb(76, 22, 128);
            background: linear-gradient(25deg, rgba(76, 22, 128, 1) 0%, rgba(0, 0, 0, 1) 77%);
            /* background: rgb(76,22,128); */
            /* background: linear-gradient(25deg, rgba(76,22,128,1) 62%, rgba(255,102,0,1) 100%); */
            background-attachment: fixed;
            background-position: bottom right;
            background-repeat: no-repeat;
            background-size: cover;
            display: flex;
            align-items: flex-start;
            transition: all 0.2s;
            backdrop-filter: blur(10px);
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
            width: 10%;
            height: 100%;
            background-color: var(--colo-white);
            transition: all 0.2s;
        }



        .diri-int2 {
            /* width: 90%; */
            transition: all 0.2s;
        }

        .titulo-int {
            text-transform: uppercase;
            color: var(--color-black);
            font-weight: 800;
            font-size: 30px;
            text-align: center;
            transition: all 0.2s;
            font-family: 'Polly Rounded';

        }

        .page-content-description {
            margin: 40px 0px 0px 0px;

        }

        .services-description {
            width: 90%;
            padding: 0px 0px 40px 40px;
            box-sizing: border-box;
            display: flex;
            flex-wrap: wrap;
            align-items: center;
            align-content: flex-start;
            transition: all 0.2s;
            backdrop-filter: blur(5px);
        }

        .wrap-services-description {
            display: flex;
            justify-content: space-between;
            width: 100%;
            padding-right: 4rem;

            backdrop-filter: blur(5px);
        }

        .wrap-cont {
            width: 100%;
            padding-top: 60px;
        }



        .titulo-serv-int {
            width: 100%;
            display: flex;
            justify-content: center;
            align-items: center;
            margin: 1rem 0rem;
            transition: all 0.2s;
        }

        .wrap-titu-int {
            font-family: 'Polly Rounded';
            font-weight: 800;
            color: white;
            font-size: 56px;
            text-transform: uppercase;
            font-family: var(--font-fm);
            transition: all 0.2s;
         
        }

        .subt-wrap {
            font-size: 24px;
            color: black;
            font-weight: bold;
            margin-top: 10px;
            margin-bottom: 10px;
            transition: all 0.2s;
            text-transform: none;
            margin-left: 0.5rem;
        }

        .wrap-desc-serv {
            display: flex;
            flex-wrap: wrap;
            width: 100%;
            padding: 2rem;
            justify-content: space-between;
        }

        .title-serv {
            width: 60%;
        }

        .desct-services {
            width: 40%;
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

        .wrap-tabs {
            width: 100%;
            margin: 50px 0px 30px 0px;
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

        .tabs-int:hover {
            background-color: #f79556;
            color: black;
            border-radius: 4px;
        }

        .tabs-int.active {
            background: rgb(255, 102, 0);
            background: linear-gradient(25deg, rgba(255, 102, 0, 1) 0%, rgba(247, 149, 86, 1) 100%);
            color: var(--colo-white);
            border-radius: 4px;
        }

        .tabs-int.active .sds-serv p {
            color: var(--color-black);
        }

        .wrap-cnt {
            position: relative;
            display: block;
            width: 100%;
            transition: all 0.2s;
        }

        .wrap-cnt-item.active {
            display: block;
            opacity: 1;
            visibility: visible;
            position: relative;
            transition: all 0.2s;
        }

        .wrap-cnt-item {
            display: none;
            position: absolute;
            visibility: hidden;
            opacity: 0;

            transition: all .25s ease;
        }

        .txt-description {
            margin: 2px 0px 4px 0px;
            width: 100%;
            color: var(--color-black);
            display: flex;
            align-items: start;
            transition: all 0.2s;
            font-size: 16px;
            font-weight: 600;
            text-align: justify;
        }

        .bt-quiero {
            display: inline-block;
            background: var(--color-primario);
            box-shadow: var(--shadow-general);
            color: white;
            font-family: 'Polly Rounded';
            text-decoration: none;
            font-size: 18px;
            margin: 20px 0px 20px 0px;
            padding: 10px 25px 10px 25px;
            transition: var(--transition300);
            font-weight: 400;
            -webkit-box-shadow: 5px 5px 0px 0px rgba(255, 102, 0, 1);
            -moz-box-shadow: 5px 5px 0px 0px rgba(255, 102, 0, 1);
            box-shadow: 5px 5px 0px 0px rgba(255, 102, 0, 1);
        }

        .bt-quiero span {
            color: white;
            font-size: 14px;
        }

        .bt-quiero:hover,
        .bt-quiero:hover span {
            color: var(--color-black);
        }

        .bt-quiero:hover {
            background-color: var(--color-white);
            color: var(--color-black);
        }

        /* .bt-quiero span
        {
            color: white;
            font-size: 14px;
        }
        .bt-quiero:hover{
            border: 2px solid white;
            background:none;
        } */

        .wp-cotizar-two {
            display: flex;
            align-items: center;
            justify-content: space-around;
            gap: 12px;
        }

        .bt-quiero-two {
            color: var(--color-primario);
            font-size: 22px;
            font-weight: 800;
        }

        .ico-fl {
            color: var(--color-secundario);
            font-size: 18px;
            font-weight: 800;
            margin-top: 2px;
            margin-right: 6px;
            transition: all 0.2s;
        }

        .ic-ts {
            color: var(--color-secundario);
            font-size: 22px;
            font-weight: 900;
            transition: all 0.2s;
        }

        .wrap-gen-serv {
            display: flex;
            justify-content: space-between;
        }


        .fist-title,
        .second-title {
            font-size: 4rem;
            font-weight: 800;
            font-family: 'Polly Rounded';
        }

        .fist-title {
            color: var(--color-black);
        }

        .second-title {
            color: var(--color-primario);
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

        .cnt-plays {
            display: flex;
            align-items: center;
            gap: 6px;
        }

        .sds-serv h2,
        .sds-serv p {
            margin: 0;
        }

        .icon-ct div {
            background: rgb(29, 28, 28);
            background: linear-gradient(25deg, rgba(29, 28, 28, 0.9920343137254902) 89%, rgba(255, 255, 255, 1) 100%);
            border: 2px solid var(--color-black);
            font-size: 3rem;
            border-radius: 4px;
            padding: 8px;
        }

        .sds-serv h2 {
            font-size: 1.5rem;
            color: var(--color-black);
        }

        .view-ctn {
            display: flex;
            justify-content: space-between;
            width: 100%;
            flex-wrap: wrap;
        }

        .sds-serv p {
            font-size: 14px;
            color: var(--color-neutro);
        }

        .sl-sw {
            width: 100%;
        }



        .txts {
            margin: 0;
            text-align: justify;
            margin-top: 20px;
            margin-bottom: 30px;
            display: block;
        }

        .services-container {
            display: flex;
            justify-content: center;
            align-items: center;
            flex-wrap: wrap;
        }

        .wrap-services {
            border: 1px solid rgb(190 190 190);
            padding: 20px;
            margin: 20px;
            width: 30%;
            border-radius: 6px;
            transition: transform 0.3s ease;
        }

        .inclinado {
            transform: perspective(80px) rotateX(0deg) rotateY(0deg);
        }

        .cnt-number h2 {
            font-weight: bold;
            color: transparent;
            font-size: 1.5rem;
            text-transform: uppercase;
            font-family: var(--font-fm);
            transition: all 0.2s;
            color: transparent;
            -webkit-text-stroke: 1px rgb(235, 235, 235);
            transform: skewX(-10deg);/
        }

        .title_serv {
            font-weight: 300;
        }


        swiper-container {
            width: 100%;
            height: 100%;
        }

        swiper-slide {
            text-align: center;
            width: 60%;
            background: #fff;
            display: flex;
            justify-content: center;
            align-items: center;
        }

        swiper-slide img {
            display: block;
            width: 100%;
            height: 100%;
            object-fit: cover;
        }

        swiper-container {
            width: 100%;
            height: 100%;
            height: 300px;
            margin-left: auto;
            margin-right: auto;
        }



        .mySwiper {
            width: 100%;
            object-fit: cover;
            height: 50%;
        }

        .mySwiper2 {
            height: 20%;
            box-sizing: border-box;
            padding: 10px 0;
        }

        .mySwiper2 swiper-slide {
            width: 60%;
            height: 100%;
            opacity: 0.6;
        }

        .mySwiper2 .swiper-slide-thumb-active {
            opacity: 1;
        }

        swiper-slide img {
            display: block;
            width: 100%;
            height: 100%;
            object-fit: cover;
        }

        .swiper-slide-shadow-left {
            background-image: linear-gradient(to right, rgba(76, 22, 128, .5), rgba(0, 0, 0, 0)) !important;

        }

        .swiper-slide-shadow-right {
            background-image: linear-gradient(to left, rgba(76, 22, 128, .5), rgba(0, 0, 0, 0)) !important;
        }

        .swiper-container .swiper-3d {
            color: var(--swiper-navigation-color);
        }

        .swiper-pagination-bullet-active {
            color: var(--swiper-navigation-color);
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
            width: 48%;
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

        .intro-sec ul,
        .intro-sec li {
            color: black;
            list-style: none;
        }

        .lista_principal li {
            display: flex;
            align-items: start;
            text-align: justify;
            /* font-size: 18px; */
            margin: 0.5rem 0rem;
            padding: 0;
            color: black;
        }

        .img_lista {
            width: 24px;
            margin-right: 10px;
        }

        .wrap-cont-consol {
            display: flex;
            justify-content: space-between;
            align-items: center;
            flex-wrap: wrap;
        }

        .child-cont-consol {
            width: 32%;
            margin: 0.5rem 0rem;
        }

        .imgs {
            display: flex;
            justify-content: space-between;
            width: 100%;
        }

        .img_flecha {
            width: 120px;
            position: absolute;
            z-index: 99;
            bottom: 10%;
        }

        .img_star {
            width: 100px;
            width: 100px;
            position: absolute;
            right: 0;
            bottom: 50%;
            z-index: 999;
        }

        .child-cont-consol img {
            border-radius: 4px;
        }

        .title-consola {
            color: black;
        }

        .wrap-detail-services {
            height: 100vh;
        }
        :target{
            display: block !important;
            /* transition: var(--transition300); */
        }
        .title_int {
            font-size: 46px;
            text-transform: uppercase;
            transition: all 0.2s;
            color: white;
            font-weight: 900;
            text-align: center;
            margin-bottom: 0.5rem;
        }

        .text-resaltado {
            position: absolute;
            bottom: 0;
            right: 0;
            margin: auto;
            left: 0;
            z-index: 1;
            font-family: var(--font-fm);
            color: transparent;
            font-size: 2rem;
            text-align: center;
        }
    </style>
    <main id="wrap" class="active">
        <div class="pag-servicios-streaming">

            <!-- <img class="img-resalt" src="assets/images/play.webp" width="100%"> -->

            <?php
            include("./services/detail-services3.php");
            ?>


            <!-- <div class="img-apoyo1"></div> -->
        </div>
    </main>
    <!-- Enlace al script de Swiper -->
    <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-element-bundle.min.js"></script>
    <script src="http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
    <?php
    // include('page-master/services.php');
    ?>
    <?php
    // include "page-master/footer.php";
    include('page-master/js.php');
    ?>