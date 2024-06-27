const cuenta_regresiva_dias = document.getElementById('cuenta_regresiva_dias'); 
const cuenta_regresiva_horas = document.getElementById("cuenta_regresiva_horas");
const cuenta_regresiva_minutos = document.getElementById('cuenta_regresiva_minutos');
const cuenta_regresiva_segundos = document.getElementById('cuenta_regresiva_segundos');
const fechaBoda = new Date(2025, 2, 30, 17, 0, 0);

setInterval(function() { 
    const fechaActual = new Date();
    //Obtiene la diferencia en milisegundos
    const diff = fechaBoda.getTime() - fechaActual.getTime();

    // segundos = milisegundos / 1000
    // minutos = segundos / 60
    // horas = minutos / 60
    // Días = horas / 24
    
    //Convierte la diferencia a días
    const dias = Math.floor(diff / (1000 * 60 * 60 * 24));
    //Convierte la diferencia a horas
    const horas = Math.floor(diff / (1000 * 60 * 60)) - (dias * 24);
    //Convierte la diferencia a minutos
    const minutos = Math.floor(diff / (1000 * 60)) - (dias * 24 * 60) - (horas * 60);
    //Convierte la diferencia a segundos 
    const segundos = Math.floor(diff / 1000) - (dias * 24 * 60 * 60) - (horas * 60 * 60) - (minutos * 60)

    cuenta_regresiva_dias.innerHTML = dias;
    cuenta_regresiva_horas.innerHTML = horas;
    cuenta_regresiva_minutos.innerHTML = minutos;
    cuenta_regresiva_segundos.innerHTML = segundos;

}, 1000);


 


 





