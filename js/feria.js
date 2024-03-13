var feriaImages = {
    "img1": {
        id: 1,
        src: "./assets/feria/cajica1.webp",
        alt: "Imagen Feria Cajica",
        desc: "Feria Cajicá 2023",

    },
    "img2": {
        id: 2,
        src: "./assets/feria/cajica2.webp",
        alt: "Imagen Feria Cajica",
        desc: "Feria Cajicá 2023",
    }
    ,
    "img3": {
        id: 3,
        src: "./assets/feria/cajica3.webp",
        alt: "Imagen Feria Cajica",
        desc: "Feria Cajicá 2023",
    }
    ,
    "img4": {
        id: 4,
        src: "./assets/feria/cajica4.webp",
        alt: "Imagen Feria Cajica",
        desc: "Feria Cajicá 2023",
    }
    ,
    "img5": {
        id: 5,
        src: "./assets/feria/cajica5.webp",
        alt: "Imagen Feria Cajica",
        desc: "Feria Cajicá 2023",
    }
    ,
    "img6": {
        id: 6,
        src: "./assets/feria/cajica6.webp",
        alt: "Imagen Feria Cajica",
        desc: "Feria Cajicá 2023",
    }
    ,
    "img7": {
        id: 7,
        src: "./assets/feria/cajica7.webp",
        alt: "Imagen Feria Cajica",
        desc: "Feria Cajicá 2023",
    }
    ,
    "img8": {
        id: 8,
        src: "./assets/feria/cajica8.webp",
        alt: "Imagen Feria Cajica",
        desc: "Feria Cajicá 2023",
    }
    ,
    "img9": {
        id: 9,
        src: "./assets/feria/cajica9.webp",
        alt: "Imagen Feria Cajica",
        desc: "Feria Cajicá 2023",
    }
    ,
    "img10": {
        id: 10,
        src: "./assets/feria/cajica10.webp",
        alt: "Imagen Feria Cajica",
        desc: "Feria Cajicá 2023",
    }
    ,
    "img11": {
        id: 11,
        src: "./assets/feria/cajica11.webp",
        alt: "Imagen Feria Cajica",
        desc: "Feria Cajicá 2023",
    }
    ,
    "img12": {
        id: 12,
        src: "./assets/feria/cajica12.webp",
        alt: "Imagen Feria Cajica",
        desc: "Feria Cajicá 2023",
    }
    ,
    "img13": {
        id: 13,
        src: "./assets/feria/cajica13.webp",
        alt: "Imagen Feria Cajica",
        desc: "Feria Cajicá 2023",
    }
    ,
    "img14": {
        id: 14,
        src: "./assets/feria/cajica14.webp",
        alt: "Imagen Feria Cajica",
        desc: "Feria Cajicá 2023",
    }
    ,
    "img15": {
        id: 15,
        src: "./assets/feria/cajica15.webp",
        alt: "Imagen Feria Cajica",
        desc: "Feria Cajicá 2023",
    }
    ,
    "img16": {
        id: 16,
        src: "./assets/feria/cajica16.webp",
        alt: "Imagen Feria Cajica",
        desc: "Feria Cajicá 2023",
    }
    ,
    "img17": {
        id: 17,
        src: "./assets/feria/cajica17.webp",
        alt: "Imagen Feria Cajica",
        desc: "Feria Cajicá 2023",
    }
}
var  equipoImages ={
    "img1":{
        id: 1,
        src: "./assets/feria/equipo1.webp",
        alt: "Imagen de Equipos",
        desc: "Set de Grabación",
    },
    "img2":{
        id: 2,
        src: "./assets/feria/equipo2.webp",
        alt: "Imagen de Equipos",
        desc: "Equipos multimedia",
    },
    "img3":{
        id: 3,
        src: "./assets/feria/equipo3.webp",
        alt: "Imagen de Equipos",
        desc: "Equipos multimedia",
    },
    "img4":{
        id: 4,
        src: "./assets/feria/equipo4.webp",
        alt: "Imagen de Equipos",
        desc: "Juegos Arcade",
    },
    "img5":{
        id: 5,
        src: "./assets/feria/equipo5.webp",
        alt: "Imagen de Equipos",
        desc: "Set de Grabación",
    }
}
window.onload = function () {
    const cnt_img = document.getElementById("galeria");
    const cnt_img2 = document.getElementById("galeria2");
    console.log("holiii")
    if(cnt_img){
        for (var key in feriaImages) {
            if (feriaImages.hasOwnProperty(key)) {
                var imagen = feriaImages[key];
                var contenedor = document.createElement("div");
                contenedor.classList.add("cont-img-feria");
                
                var imgElement = document.createElement("img");
                imgElement.src = imagen.src;
                imgElement.alt = imagen.alt;
                imgElement.loading = "lazy";
                
                var descElement = document.createElement("div");
                descElement.classList.add("desc-ft");
                var smallElement = document.createElement("small");
                smallElement.textContent = imagen.desc;
                
                descElement.appendChild(smallElement);
                contenedor.appendChild(imgElement);
                contenedor.appendChild(descElement);
                
                cnt_img.appendChild(contenedor);
            }
        }
    }

    if(cnt_img2){
        for (var key in equipoImages) {
            if (equipoImages.hasOwnProperty(key)) {
                var imagen = equipoImages[key];
                var contenedor = document.createElement("div");
                contenedor.classList.add("cont-img-feria");
                
                var imgElement = document.createElement("img");
                imgElement.src = imagen.src;
                imgElement.alt = imagen.alt;
                imgElement.loading = "lazy";
                
                var descElement = document.createElement("div");
                descElement.classList.add("desc-ft");
                var smallElement = document.createElement("small");
                smallElement.textContent = imagen.desc;
                
                descElement.appendChild(smallElement);
                contenedor.appendChild(imgElement);
                contenedor.appendChild(descElement);
                
                cnt_img2.appendChild(contenedor);
            }
        }
    }
    
}