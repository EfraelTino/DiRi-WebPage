<?php
$title = "Home";

include('page-master/head.php');
include('page-master/header.php');
?>
<!-- Enlaces a los estilos y scripts de Swiper mediante CDN -->
<link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css" />



<body>
    <style>

        .ms_2 {
        height: 100vh;
        overflow-y: scroll;
        scroll-snap-type: y mandatory;
      }

      .ms_2 > section {
        height: 100vh;
        display: flex;
  
                scroll-snap-align: start;
        scroll-snap-stop: always;
      }

      .seccion_1{
        background: url('./assets/backs/backOne.webp');
        background-repeat: no-repeat;
        background-size: cover;
    }
      .seccion_1  .header-fixed::after{
        right: 0 !important;
        
      }
      .seccion_2{
        background: url('./assets/backs/backMorado4.webp');
        background-repeat: no-repeat;
        background-size: cover;

      }
      .seccion_3
      {
        background: url('./assets/backs/backMorado.webp');
        background-repeat: no-repeat;
        background-size: cover;
      }
        .seccion_4
      {
        background: url('./assets/backs/backMorado2.webp');
        background-repeat: no-repeat;
        background-size: cover;

      }   .seccion_5
      {
        background: url('./assets/backs/backMorado3.webp');
        background-repeat: no-repeat;
        background-size: cover;

      }
      
        .sombra-page-content {
            width: 100%;
            height: 100%;
            padding: 0;
            box-sizing: border-box;
            transition: all 0.2s;
        }
        .header-fixed::after{
            background:  none !important;

        .titulo-int {
            text-transform: uppercase;
            color: var(--color-black);
            font-weight: 800;
            font-size: 30px;
            text-align: center;
            transition: all 0.2s;
        }


        .page-content-description {
            margin: 40px 0px 0px 0px;

        }

        .services-description {
            width: 70%;
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
            justify-content: space-between;
            width: 100%;
        }

        .wrap-cont {
            width: 60%;
            padding-top: 60px;
        }



        .titulo-serv-int {
            width: 100%;
            display: flex;
            justify-content: space-between;
            align-items: center;
            transition: all 0.2s;
        }

        .wrap-titu-int {
            font-weight: bold;
            color: black;
            font-size: 40px;
            text-transform: uppercase;
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
            margin: 20px 0px 30px 0px;
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
            align-items: center;
            transition: all 0.2s;
            margin-left: 1.5rem;
        }

        .txts {
            margin: 0;
            text-align: justify;
            margin-top: 20px;
            margin-bottom: 30px;
        }

        .ico-fl {
            color: var(--color-secundario);
            font-size: 15px;
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

        /* CARROUSEL */
        .wrap-slides {
            overflow: hidden;
            width: 40%;
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

        .cnt-plays {
            display: flex;
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

        .intro-sec {
            color: black;
        }

        .intro-sec ul {
            margin: 0;
            padding: 0;
            margin: 1rem 0rem;
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
        }

        .img_lista {
            width: 24px;
            margin-right: 10px;
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

        .wp-cotizar {
            width: 100%;
            display: flex;
            justify-content: center;
            align-items: center;
        }

        .wrap-web_page {
            /* display: flex; */
            flex-wrap: wrap;
            justify-content: space-between;
            align-items: center;
        }

        .page-serv {
            margin-top: 2rem;
            background-color: #fff;
            border: 1px solid #e5e7eb;
            border-radius: 8px;
            display: flex;
            flex-direction: column;
            align-items: center;
            position: relative;
        }

        .page-serv .cont-demo {
            margin-top: 2rem;
            transition: opacity 0.3s ease, transform 0.5s cubic-bezier(0.68, -0.55, 0.265, 1.55);
            /* Cambio de transición */
            /* position: absolute; */
            top: 0;
            /* Mueve el contenedor a la parte inferior */
            left: 0%;
            right: 0;
            bottom: 0;
            transform: translateX(0%) translateY(100%);
            /* Ajusta el movimiento del contenedor */
            opacity: 0;
            /* Hace que el contenedor sea visible */
            display: flex;
            justify-content: center;
            backdrop-filter: blur(3px);
            align-items: center;
            margin: 0;
            position: absolute;
            border-radius: 8px;
        }
        .cont-demo {
            visibility: hidden;
            opacity: o;
        }
        .page-serv:hover .cont-demo {
            margin-top: 2rem;
            position: absolute;
            visibility: visible;
            transform: translateX(0%) translateY(0%);
            /* Movimiento del contenedor al estar en hover */
            opacity: 1;
            /* Hace que el contenedor sea visible */
        }
        .page-serv:hover .cont-demo2{
            position: fixed;
            z-index: -1;
        }

        .page-serv img {
            border-radius: 8px 8px 0px 0px;
        }

        .page-serv:hover img {
            border-radius: 8px;
        }

        .cont-demo2 {
            margin: 1rem;
        }

        .see-demo {
            background-color: var(--color-primario);
            font-weight: 700;
            padding: 0.5rem 1rem;
            border-radius: 4px;
            transition: var(--transition300);
        }

        .see-demo:hover {
            background-color: var(--color-secundario);
            transform: scale(1.05);
        }

        .see-demo:active {
            background-color: var(--color-primario);
            transform: scale(1);
        }
        


    </style>
    <main id="wrap" class="active">
        <div class="pag-servicios-streaming">

            <!-- <img class="img-resalt" src="assets/images/play.webp" width="100%"> -->

            <?php
            include("./services/software-detail.php");
      
            ?>


            <!-- <div class="img-apoyo1"></div> -->
        </div>
    </main>
    <!-- Enlace al script de Swiper -->
    <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-element-bundle.min.js"></script>
    <script src="http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
    <script>
        $(function() {
            $('body').on('click', '.tabs-int', function(e) {
                e.preventDefault()
                var id = $(this).attr('id')
                console.log(id, 'fnfnc')
                $('.tabs-int').removeClass('active')
                $(this).addClass('active')
                $('.wrap-cnt-item').removeClass('active')
                $('.wrap-cnt-item[data-id="' + id + '"]').addClass('active')

            })

            $('body').on('click', '.bg-link', function(e) {
                e.preventDefault();
                let bg = $(this).attr('data-bg')
                $('.festa-bg').css('background-image', 'url("' + bg + '")');
                $('.bg-link').removeClass('active')
                $(this).addClass('active')
            })
        })
    </script>

    <?php
    // include('page-master/services.php');
    ?>
    <?php
    // include "page-master/footer.php";
    include('page-master/js.php');
    ?>