<?php
$title = "Home";

include('page-master/head.php');
?>
<style>
    .wrap-consultoria {
        width: 100%;
        height: 100vh;
        min-height: 750px;

        display: flex;
        justify-content: center;
        align-items: center;

        transition: var(--transition150);
    }

    .form-consultoria {
        width: 430px;
        border-radius: 20px;
        border: 1px solid black;

        padding: 0px 50px 50px 50px;

        display: flex;
        justify-content: center;
        flex-wrap: wrap;
        align-items: flex-start;
        transition: var(--transition150);
    }

    .completo {
        width: 260px;
        background-color: white;
        margin: -48px 0px 0px 0px;
        transition: var(--transition150);
        padding: 20px;
    }

    .ico-chevs {
        width: 100%;
        color: black;
        text-align: center;
        margin: 0px 0px 10px 0px;
        transition: var(--transition150);
    }

    .bt-option {
        border-radius: 10px;
        border: 1px solid black;
        width: 100%;
        padding: 10px 20px;
        color: black;
        margin: 20px 0px 0px 0px;
        transition: var(--transition150);

        display: flex;
        justify-content: space-between;
        align-items: center;
    }

    .bt-option:hover {
        border-radius: 10px;
        border: 1px solid var(--color-complement);
        color: var(--color-primario);
        background-color: var(--color-complement);
        transform: scale(1.07);
        box-shadow: 0px 12px 12px -12px rgba(0, 0, 0, 0.5);
    }
    .bt-option:hover .txt-cons, .bt-option:hover .bl-txt-contact{
        color: var(--color-primario);
    }
    .bt-option .ico-chcl {
        color: gray;
        transition: var(--transition150);
    }

    .bt-option:hover .ico-chcl {
        color: var(--color-primario);
    }

    .ico-chcl {
        font-size: 25px;
        margin: 0px 0px 5px 0px;
        transition: var(--transition150);
    }

    .txt-cons {
        color: black;
        width: 87%;
    }

    .title-consultoria {
        color: var(--color-black);
        font-size: 25px;
        text-align: center;
        font-weight: 300;
        margin: 0px 0px 20px 0px;
        width: 100%;
        transition: var(--transition150);
    }
    .agenda-txt{
        color: black;
        font-weight: 400;
    }
    .bl-title {
        color: var(--color-black);
        font-size: 25px;
        font-weight: 800;
        transition: var(--transition150);
    }

    .campo1 {
        width: 100%;
        margin: 10px 0px 10px 0px;
        transition: var(--transition150);
    }

    .campo1a {
        width: 100%;
        border: none;
        border-bottom: 1px solid black;
        outline: none;
        padding: 3px 0px;
        font-size: 17px;
        color: black;
        height: 40px;
        transition: var(--transition150);
    }

    .campo1a:focus {
        border-bottom: none;
        border: 1px solid rgba(0, 0, 0, .04);
        padding: 3px 10px;
        transform: scale(1.08);
        border-radius: 5px;
        color: black;
        box-shadow: 0px 5px 12px -5px rgba(0, 0, 0, 0.3);
        background-color: rgba(0, 0, 0, .04);
        transition: var(--transition150);
    }

    .campo1a::placeholder {
        color: #9E9E9E;
        transition: var(--transition150);
    }

    .campo1a:focus::placeholder {
        color: black;
    }

    .bt-next {
        margin: 30px 0px 0px 0px;
        display: flex;
        align-items: center;
        justify-content: space-between;
        color: black;
        transition: var(--transition150);
        padding: 6px 13px 6px 15px;
        position: relative;
        border-radius: 10px;
        background-color: var(--color-primario);

        width: 100%;
        height: 45px;
    }

    .bt-next:hover {
        transform: scale(1.02);
        box-shadow: 0px 10px 10px -6px rgba(0, 0, 0, .5);
    }

    .bt-next:active {
        transform: scale(0.9);
        border: 1px solid var(--color-primario);
        background-color: inherit;
    }

    .ico-nxt {
        margin: 0px 0px 0px 0px;
        color: white;
        font-size: 24px;
    }

    .txt-next {
        margin: 0px 0px 0px 0px;
        color: white;
    }

    .bt-next:active .ico-nxt {
        color: var(--color-primario);
    }

    .bt-next:active .txt-next {
        color: var(--color-primario);
    }


    .bl-txt-contact {
        color: black;
        font-weight: 700;
    }

    .ic-end {
        font-size: 70px;
        margin: 30px 0px 30px 0px;
        animation: check-end 1.5s ease-in-out infinite;
        color: var(--color-secundario);
        transition: var(--transition150);
    }

    @keyframes check-end {
        0% {
            transform: scale(.8);
        }

        50% {
            transform: scale(1);
            opacity: .2;
        }

        100% {
            transform: scale(.8);
        }
    }

    .video-int {
        width: 140px;
        height: 140px;
        border-radius: 100px;
        background-color: gray;
        margin: 20px auto;
    }

    .redireccion {
        font-size: 13px;
        transition: var(--transition150);
    }

    .intro {
        text-align: center;

        display: flex;
        flex-wrap: wrap;
        justify-content: center;
        transition: var(--transition150);
    }

    .encuenta {
        font-size: 16px;
        color: rgba(0, 0, 0, .5);
        line-height: 1.1;
        margin: 20px 0px 6px 0px;
        transition: var(--transition150);
    }

    .parte2 {
        width: 100%;
        display: flex;
        flex-wrap: wrap;
        justify-content: center;
        transition: var(--transition150);
    }

    .parte1 {
        width: 100%;
        transition: var(--transition150);

        flex-wrap: wrap;
    }

    .parte3 {
        width: 100%;
        flex-wrap: wrap;
        transition: var(--transition150);
    }

    .partefinal {
        display: flex;
        flex-wrap: wrap;
        justify-content: center;
        transition: var(--transition150);
    }

























    @media screen and (max-width: 550px) {


        .wrap-consultoria {
            width: 85%;
            height: inherit;
            min-height: inherit;
            margin: 90px auto 70px auto;

            display: flex;
            justify-content: center;
            align-items: center;
        }

        .title-consultoria {
            font-size: 18px;
            text-align: center;
            font-weight: 300;
            margin: 0px 0px 40px 0px;
        }

        .bl-title {
            font-size: 18px;
            font-weight: 700;
        }

        .form-consultoria {
            width: 100%;
            border-radius: 16px;
            border: 0;

            padding: 0px 0px 50px 0px;

            display: flex;
            justify-content: center;
            flex-wrap: wrap;
            align-items: flex-start;
        }


        .bt-next {
            margin: 30px 0px 0px 0px;
            display: flex;
            align-items: center;
            justify-content: space-between;
            color: white;
            background-color: var(--color-primario);
            transition: var(--transition150);
            padding: 6px 13px 6px 18px;
            position: fixed;
            border-radius: 12px;
            bottom: 25px;

            width: 290px;
            height: 55px;
        }

        .bt-next:hover {
            background-color: var(--color-primario);
        }

        .bt-next:active {
            transform: scale(0.9);
            border: 1px solid var(--color-primario);
            background-color: inherit;
        }

        .ico-nxt {
            margin: 0px 0px 0px 0px;
            color: white;
        }

        .txt-next {
            margin: 0px 0px 0px 0px;
            color: white;
        }

        .bt-next:active .ico-nxt {
            color: var(--color-primario);
        }

        .bt-next:active .txt-next {
            color: var(--color-primario);
        }



        .bt-option {
            border-radius: 10px;
            border: 1px solid black;
            width: 100%;
            padding: 10px 20px;
            color: black;
            margin: 20px 0px 0px 0px;
            transition: var(--transition150);

            display: flex;
            justify-content: space-between;
            align-items: center;
        }

        .bt-option:hover {
            border-radius: 10px;
            border: 1px solid var(--color-complement);
            color: var(--color-primario);
            background-color: var(--color-complement);
            transform: scale(1);
            box-shadow: 0px 12px 12px -12px rgba(0, 0, 0, 0.5);
        }

        .campo1a {
            width: 100%;
            border: none;
            border-bottom: 1px solid black;
            outline: none;
            padding: 3px 0px;
            font-size: 17px;
            transition: var(--transition150);
        }

        .campo1a:focus {
            border-bottom: none;
            border: 1px solid rgba(0, 0, 0, .04);
            padding: 3px 10px;
            transform: scale(1);
            border-radius: 5px;
            color: black;
            box-shadow: 0px 5px 12px -5px rgba(0, 0, 0, 0.3);
            background-color: rgba(0, 0, 0, .04);
            transition: var(--transition150);
        }



    }

    .spinner {
        text-align: center;
    }

    .spinner>.icon-loader {
        -webkit-animation: rotate-center 1.4s linear infinite both;
        animation: rotate-center 1.4s linear infinite both;
        display: inline-block;
        font-size: 2rem;
        color: var(--color-aprobado);
    }


    @-webkit-keyframes rotate-center {
        0% {
            -webkit-transform: rotate(0);
            transform: rotate(0);
        }

        100% {
            -webkit-transform: rotate(360deg);
            transform: rotate(360deg);
        }
    }

    @keyframes rotate-center {
        0% {
            -webkit-transform: rotate(0);
            transform: rotate(0);
        }

        100% {
            -webkit-transform: rotate(360deg);
            transform: rotate(360deg);
        }
    }

    .super-msteps {
        width: 100%;
        overflow: hidden;
        position: relative;

    }

    .msteps {
        width: 100%;
        display: flex;
        flex-wrap: nowrap;
        flex-direction: row;
        position: relative;
        transition: left .3s;
    }

    .mstep {
        min-width: 100%;
        padding: 0 25px 25px 25px;
        display: none;
    }

    .bt-next {
        margin: 30px auto 0px auto;
        cursor: pointer;
    }

    .ic-end {
        text-align: center;
    }

    .form-consultoria {
        padding: 0 0 0px 0;
    }

    .bt-option {
        cursor: pointer;
    }

    #descripciones,
    #modalidad,
    #opcionales {
        width: 100%;
    }

    .icon-uspo {
        padding-right: .5rem;
    }

    .item-radio-pop.active {
        background-color: #40BA5B;
    }

    .bt-vermas {
        cursor: pointer;
    }

    .view-plus>span:hover,
    .view-plus>span:active,
    .view-plus>span:focus {
        text-decoration: underline;
        cursor: pointer;
    }






    @media screen and (max-width: 550px) {


        .mstep {
            min-width: 100%;
            padding: 0px 0px 20px 0px;
            display: none;
        }




    }
</style>

<div class="wrap-consultoria">
    <form class="form-consultoria">
        <img src="./assets/logos/diri_logo_p.webp" class="completo">
        <div class="icon-chevrons-down ico-chevs"></div>

        <div class="super-msteps">
            <div class="msteps" style="left: 0px;">
                <!-- INTRO -->
                <div class="intro mstep" style="display: flex;">
                    <div class="video-int">
                    <img src="./assets/peoples/ricardo.webp" style="border-radius: 50%;">

                    </div>

                    <div class="title-consultoria"><span class="bl-title">Hola!</span> soy Ricardo Niño <br> director del
                        estudio DiRi </div>

                    <div class="agenda-txt">
                        Agenda una consultoría gratuita con nosotros para conocer a fondo tus necesidades y objetivos.
                        Así podremos armar una propuesta personalizada.

                        <div class="encuenta">Ten encuenta que, <br> de no ajustarnos a tus requerimientos, te
                            recomendaremos lo mejor que podrías implementar.</div>
                    </div>



                    <span class="bt-next" onclick="moveMstep()">
                        <div class="txt-next">Continuar</div>
                        <span class="icon-chevrons-right ico-nxt"></span>
                    </span>
                </div>


                <!-- PARTE 1 -->
                <div class="parte1 mstep">
                    <div class="title-consultoria"><span class="bl-title">¿Cómo te ayudamos?</span></div>
                    <a class="bt-option" onclick="moveFormaServicio('Quiero dar a conocer mi propuesta de valor')">
                        <span class="icon-check-circle ico-chcl"></span>
                        <div class="txt-cons"> Quiero <span class="bl-txt-contact">cotizar</span> uno de sus servicios</div>
                    </a>

                    <a class="bt-option" onclick="moveFormaServicio('Quiero vender online las 24 horas del día')">
                        <span class="icon-check-circle ico-chcl"></span>
                        <div class="txt-cons"> Quiero  <span class="bl-txt-contact"> cotizar </span> un proyecto de Software e Ingeniería Electrónica </div>
                    </a>

                    <a class="bt-option" onclick="moveFormaServicio('Quiero administrar y tener a un clic toda mi información')">
                        <span class="icon-check-circle ico-chcl"></span>
                        <div class="txt-cons"> Quiero trabajar con ustedes en una <span class="bl-txt-contact">feria tecnológica</span> </div>
                    </a>

                    <a class="bt-option" onclick="moveFormaServicio('Quiero impactar y mostrarme en las redes sociales')">
                        <span class="icon-check-circle ico-chcl"></span>
                        <div class="txt-cons"> Quiero implementar mi<span class="bl-txt-contact"> página web</span> </div>
                    </a>
                </div>


                <!-- PARTE 2 -->
                <div class="parte2 mstep">
                    <div class="title-consultoria">
                        <span class="bl-title">Genial!</span> déjanos tus datos
                    </div>

                    <div class="campo1">
                        <input class="campo1a" id="f-nombre" placeholder="Nombre completo" type="" name="">
                    </div>

                    <div class="campo1">
                        <input class="campo1a" id="f-email" type="email" placeholder="Correo" name="">
                    </div>

                    <div class="campo1">
                        <input class="campo1a" id="f-cell" type="number" placeholder="Telefono" name="">
                    </div>
                    <div class="campo1">
                        <input class="campo1a" id="f-cell" type="number" placeholder="Si eres empresa: RUT" name="">
                    </div>
                    <div class="campo1">
                        <input class="campo1a" id="f-cell" type="number" placeholder="Cámara y comercio" name="">
                    </div>
                    <div class="campo1">
                        <input class="campo1a" id="f-cell" type="number" placeholder="Contacto de área comercial" name="">
                    </div>
                    <div class="campo1">
                        <input class="campo1a" id="f-empresa" placeholder="Empresa" type="" name="">
                    </div>

                    <div class="campo1">
                        <textarea rows="4" placeholder="Puedes detallarnos tu duda o proyecto" class="campo1a" id="f-text"></textarea>
                    </div>

                    <a class="bt-next" onclick="nextFromForm()">
                        <div class="txt-next">Continuar</div>
                        <span class="icon-chevrons-right ico-nxt"></span>
                    </a>
                </div>


                <!-- PARTE 3 -->
                <div class="parte3 mstep">
                    <div class="title-consultoria"><span class="bl-title">Bien!</span> y cómo prefieres que te
                        contactemos?</div>
                    <a class="bt-option" onclick="methodContact('Reunión')">
                        <span class="icon-coffee ico-chcl"></span>
                        <div class="txt-cons"> <span class="bl-txt-contact"> Reunión</span>, vernos en un café o vamos a
                            tus oficinas. </div>
                    </a>

                    <a class="bt-option" onclick="methodContact('Llamada')">
                        <span class="icon-headphones ico-chcl"></span>
                        <div class="txt-cons"> <span class="bl-txt-contact"> Llamada</span>, por teléfono o una
                            videollamada zoom. </div>
                    </a>

                    <a class="bt-option" onclick="methodContact('Correo')">
                        <span class="icon-mail ico-chcl"></span>
                        <div class="txt-cons"> <span class="bl-txt-contact"> Correo</span>, respondemos tu consulta al
                            correo registrado. </div>
                    </a>
                </div>


                <!-- PARTE 4 -->
                <div class="parte3 mstep">
                    <div class="title-consultoria">¿Cómo te enteraste de nosotros?</div>
                    <a class="bt-option" onclick="enterarse('Redes sociales')">
                        <span class="icon-thumbs-up ico-chcl"></span>
                        <div class="txt-cons"> <span class="bl-txt-contact"> Redes sociales</span>, instagram, facebook
                        </div>
                    </a>

                    <a class="bt-option" onclick="enterarse('Google')">
                        <span class="icon-search ico-chcl"></span>
                        <div class="txt-cons"> <span class="bl-txt-contact"> Google</span>, salimos en tu búsqueda
                        </div>
                    </a>

                    <a class="bt-option" onclick="enterarse('Recomendación')">
                        <span class="icon-smile ico-chcl"></span>
                        <div class="txt-cons"> <span class="bl-txt-contact"> Recomendación</span>, Vi sus trabajos, me
                            dieron referencias </div>
                    </a>

                    <a class="bt-option" onclick="enterarse('E-mail')">
                        <span class="icon-mail ico-chcl"></span>
                        <div class="txt-cons"> <span class="bl-txt-contact"> E-mail</span>, Me enviaron un correo
                            informativo</div>
                    </a>
                </div>

                <!-- PARTE FINAL -->
                <div class="partefinal mstep">
                    <div class="icon-check-circle ic-end"></div>
                    <div class="title-consultoria"><span class="bl-title">Consulta enviada!</span> Estamos revisándola y
                        te contactaremos a la brevedad posible.</div>

                    <div class="redireccion" style="text-align: center;">Serás redireccionado para ver nuestros trabajos
                    </div>
                </div>
            </div>
        </div>


    </form>
</div>

<script>
    const mstepsContainer = document.querySelector('.msteps');
    const msteps = document.querySelectorAll('.mstep');
    const maxStep = msteps.length - 1;
    const widthStep = 100; // percents
    let currentStep = 0;
    const dataFromSteps = {};


    msteps[0].style.display = 'flex'; // Para que el primer elemento se muestre
    mstepsContainer.style.left = 0; // Para tener un movimiento suave al principio


    const moveMstep = (action) => {
        if (!(currentStep < maxStep)) {
            return;
        };

        currentStep++;

        mstepsContainer.style.left = '-' + (widthStep * currentStep) + '%';

        if (
            action &&
            action.hasOwnProperty("callback") &&
            action.hasOwnProperty("step") &&
            action.step == currentStep
        ) {
            action.callback();
        }


        msteps[currentStep - 1].style.height = '1px';
        msteps[currentStep].style.display = 'flex';

    }

    /**
     *  ¿Cómo te ayudamos?  
     */
    const moveFormaServicio = (valor) => {
        dataFromSteps.servicio = valor;
        moveMstep();
    }

    /**
     *  Genial! déjanos tus datos
     */
    const validateEmail = (email) => {
        if (/^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/.test(email)) {
            return (true)
        }
        return (false)
    }

    const nextFromForm = () => {
        const nombre = document.querySelector('#f-nombre').value;
        const email = document.querySelector('#f-email').value;
        const cell = document.querySelector('#f-cell').value;
        const empresa = document.querySelector('#f-empresa').value;
        const text = document.querySelector('#f-text').value;

        // if (nombre.length < 4) return alert('Escriba su nombre completo');
        // if (!validateEmail(email)) return alert('Debe ser un correo valido');
        // if (cell.length < 6) return alert('Debe ser un número celular valido');
        // if (empresa.length < 4) return alert('Escriba el nombre de la empresa');
        // if (text.length < 4) return alert('Por favor detallar el proyecto');

        dataFromSteps.nombre = nombre;
        dataFromSteps.email = email;
        dataFromSteps.celular = cell;
        dataFromSteps.empresa = empresa;
        dataFromSteps.detalles = text;

        validateEmail(email);
        moveMstep();
    }

    /**
     *  Bien! y cómo prefieres que te contactemos?
     */
    const methodContact = (medio) => {
        dataFromSteps.comunicacion = medio;
        moveMstep();
    }

    /**
     * ¿Cómo te enteraste de nosotros?
     */

    const enviarForm = () => {
        // const url = "insertart urp";
        // fetch(url, {
        //         method: "POST",
        //         headers: {
        //             "Content-Type": "application/json"
        //         },
        //         body: JSON.stringify(dataFromSteps)
        //     })
        //     .then(res => res.json())
        //     .then(data => {
        //         console.log(data.message)
        //         // Redirección ya que termino
        //         setTimeout(function() {
        //             location.href = 'https://diri.com.co';
        //         }, 3000);
        //     })
        //     .catch(err => console.log(err.message));
    }

    const enterarse = (oir) => {
        dataFromSteps.canal = oir;
        moveMstep({
            step: 5,
            callback: enviarForm
        });
    }
</script>