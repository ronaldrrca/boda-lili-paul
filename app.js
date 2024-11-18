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
const fechaBoda = new Date(2025, 2, 15, 17, 0, 0);// Fecha de la boda


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





//formulario

  const scriptURL = 'https://script.google.com/macros/s/AKfycbxqzfZqkFGN0YMyfq32A7wt4fVQMmLx3P2lqngt-E0X09cK9hAfDGzKYhxjvEr6T3dw/exec'; 

  const form = document.getElementById('myForm');

  form.addEventListener('submit', e => {
    e.preventDefault();

    document.getElementById("loader").style.display = "block";

    // Obtener la fecha y hora actuales
    const now = new Date();
    
    // Formatear la fecha y hora a "DD/MM/YYYY HH:MM:SS"
    const day = String(now.getDate()).padStart(2, '0');
    const month = String(now.getMonth() + 1).padStart(2, '0'); // Enero es 0
    const year = now.getFullYear();
    const hours = String(now.getHours()).padStart(2, '0');
    const minutes = String(now.getMinutes()).padStart(2, '0');
    const seconds = String(now.getSeconds()).padStart(2, '0');
    const formattedTimestamp = `${day}/${month}/${year} ${hours}:${minutes}:${seconds}`;

    // Establecer el valor del campo oculto
    document.getElementById('timestamp').value = formattedTimestamp;

    function limpiarFormulario() {
        document.getElementById("Nombres").value = "";
        // document.getElementById("Nombres").setAttribute("disabled", "true");
        document.getElementById("Telefono").value = "";
        // document.getElementById("Telefono").setAttribute("disabled", "true");
        document.getElementById("Asistencia").value = "";
        // document.getElementById("Asistencia").setAttribute("disabled", "true");
        document.getElementById("Mensaje").value = "";
        // document.getElementById("Mensaje").setAttribute("disabled", "true");
    }

    //Se cierra el mensaje de agradecimiento después de enviar el formulario de confirmación
    document.getElementById("acceptButton").addEventListener("click", ()=>{
        document.getElementById('informacion__contenedor__agradecimiento').style.display = "none";
    })

    //Enviar formulario 
    fetch(scriptURL, { method: 'POST', body: new FormData(form)})
      .then(response => response.json())
      .then(result => 
        {
            console.log('Éxito:', result)
            document.getElementById('informacion__contenedor__agradecimiento').style.display = "flex";//Se muestra un mensaje de agradecimiento
            document.getElementById("Asistencia").value === "si" ? document.getElementById("informacion__asistencia__respuesta").innerHTML = "¡Gracias por confirmar tu asistencia! <br> Estamos emocionados de verte en la boda." : document.getElementById("informacion__asistencia__respuesta").innerHTML = "Lamentamos que no puedas asistir. <br> ¡Gracias por hacérnoslo saber!" 
            limpiarFormulario();   
            document.getElementById("loader").style.display = "none";        
        }
        
      )
      .catch(error => {
        console.error('Error:', error.message);
        document.getElementById("loader").style.display = "none";  
        limpiarFormulario();
        document.getElementById('informacion__contenedor__agradecimiento').style.display = "flex";
        document.getElementById("informacion__asistencia__respuesta").innerHTML = "Ocurrió un error, póngase en contacto con el propietario de la página";
      })
  });







