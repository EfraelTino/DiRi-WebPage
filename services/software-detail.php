<style>
  swiper-container {
    width: 100%;
    height: 100%;
    position: fixed;
    top: 0;
    left: 0;
    right: 0;
    bottom: 0;
    z-index: -2;
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
</style>

<div class="page-content-services-streaming">
  <div class="sombra-page-content">
    <main class="ms_2">

      <section class="seccion_1">
        <swiper-container class="mySwiper" space-between="30" effect="fade" autoplay-delay="2500"
          autoplay-disable-on-interaction="false">
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
        <div>
          <!-- <h1>Section 1</h1>
          <p>Lorem ipsum howdy</p> -->
        </div>
      </section>
      <section class="seccion_2">
        <div>
          <h2>Section 2</h2>
          <p>Lorem ipsum howdy</p>
        </div>
      </section>
      <section class="seccion_3">
        <div>
          <h2>Section 3</h2>
          <p>Lorem ipsum howdy</p>
        </div>
      </section>
      <section class="seccion_4">
        <div>
          <h2>Section 4</h2>
          <p>Lorem ipsum howdy</p>
        </div>
      </section>
      <section class="seccion_5">
        <div>
          <h2>Section 5</h2>
          <p>Lorem ipsum howdy</p>
        </div>
      </section>
    </main>
  </div>
</div>