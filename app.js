//Variables del slider de imágenes
let foto_slider = ['foto2.webp', 'foto3.webp', 'foto4.webp', 'foto5.webp', 'foto6.webp'];
let indice_actual = 2;
let detalles__slider__flechaAvanzar = document.getElementById('detalles__slider__flechaAvanzar');
let detalles__slider__flechaRetroceder = document.getElementById('detalles__slider__flechaRetroceder'); 

// Variables de la cuenta regresiva
let detalles__cuentaRegresiva__dias = document.getElementById("detalles__cuentaRegresiva__dias");
let detalles__cuentaRegresiva__horas = document.getElementById("detalles__cuentaRegresiva__horas");
let detalles__cuentaRegresiva__minutos = document.getElementById("detalles__cuentaRegresiva__minutos");
let detalles__cuentaRegresiva__segundos = document.getElementById("detalles__cuentaRegresiva__segundos");
const fechaBoda = new Date(2025, 2, 15, 19, 0, 0);// Fecha de la boda


//________________Código del slider de imágenes______________________________________________________________

//Paso automático de las imágenes
setInterval(function() {
    while (indice_actual == 5) {
            indice_actual = 0   
    }
    document.getElementById('detalles__slider__foto').setAttribute('src', `./assets/${foto_slider[indice_actual]}`);
    indice_actual++;
}, 5000)


//Paso de las imágenes con las flechas de desplazamiento
detalles__slider__flechaAvanzar.addEventListener('click', function(){
    while (indice_actual == 5) {
        indice_actual = 0   
    }
    document.getElementById('detalles__slider__foto').setAttribute('src', `./assets/${foto_slider[indice_actual]}`);
    indice_actual++;
})

detalles__slider__flechaRetroceder.addEventListener('click', ()=>{
    while (indice_actual == -1) {
        indice_actual = 4;
    } 
    document.getElementById('detalles__slider__foto').setAttribute('src', `./assets/${foto_slider[indice_actual]}`);
    indice_actual--;
})


//________________Código de la cuenta regresiva______________________________________________________________
setInterval(function() { 
    const fechaActual = new Date();
    //Obtiene la diferencia en milisegundos
    const diff = fechaBoda.getTime() - fechaActual.getTime();

    //Convierte la diferencia a días
    let dias = Math.floor(diff / (1000 * 60 * 60 * 24));
    //Ajustando a doble dígito en caso de que el valor sea menor a 10
    dias < 10 ? dias = '0' + dias : null;
   
    //Convierte la diferencia a horas
    let horas = Math.floor(diff / (1000 * 60 * 60)) - (dias * 24);
    //Ajustando a doble dígito en caso de que el valor sea menor a 10
    horas < 10 ? horas = '0' + horas : null;
    
    //Convierte la diferencia a minutos
    let minutos = Math.floor(diff / (1000 * 60)) - (dias * 24 * 60) - (horas * 60);
    //Ajustando a doble dígito en caso de que el valor sea menor a 10
    minutos < 10 ? minutos = '0' + minutos : null;
    
    //Convierte la diferencia a segundos 
    let segundos = Math.floor(diff / 1000) - (dias * 24 * 60 * 60) - (horas * 60 * 60) - (minutos * 60);
    //Ajustando a doble dígito en caso de que el valor sea menor a 10
    segundos < 10 ? segundos = '0' + segundos : null;
    
    detalles__cuentaRegresiva__dias.innerHTML = dias;
    detalles__cuentaRegresiva__horas.innerHTML = horas;
    detalles__cuentaRegresiva__minutos.innerHTML = minutos;
    detalles__cuentaRegresiva__segundos.innerHTML = segundos;

}, 1000);


//________________Código link para fotos______________________________________________________________

// Fecha y hora específica en formato 'AAAA-MM-DDTHH:mm:ss
const targetDate = new Date('2025-03-15T21:00:00');

// Función para verificar si es hora de mostrar el elemento
function checkDate() {
    const now = new Date();//Fecha y hora actual
    const element = document.getElementById("link_fotos");

    if (now >= targetDate) {
        element.style.display = "inline-flex";

        //Ajustar el tamaño del footer al mostrar el link fijo para subir las fotos
        function adjustFooterMargin() {
            if (window.innerWidth >= 1200) {
                document.getElementById("footer").style.padding = "2rem 0 10rem 0";
            }else{
                document.getElementById("footer").style.paddingBottom = "16rem";
            }
        }

        // Llama a la función al cargar la página
        adjustFooterMargin();

        // Escucha cambios en el tamaño de la ventana
        window.addEventListener('resize', adjustFooterMargin);
        }
}

//Descomentar este setInterval y ocultar el elemento cuando se haya definido el formato del elemento para que se ejecute en su momento la función checkDate
setInterval(checkDate, 1000); //Ejecutar la función cuando la fecha indicada se cumpla 







