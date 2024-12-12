//Manejar el comportamiento de los botones de confirmar y submit

document.getElementById("acceptButton").addEventListener("click", ()=>{
    document.getElementById("informacion__contenedor__agradecimiento").style.display = "none";
    window.location.reload();
    window.scrollTo(0, 0);

})


document.getElementById("cancelarEnvio").addEventListener("click", ()=>{
    document.getElementById("informacion__asistencia").style.display = "none";  
    document.body.style.overflow = 'auto';
})

function limpiarFormulario() {
  // document.getElementById("Nombres").value = "";
  // document.getElementById("Nombres").setAttribute("disabled", "true");
  document.getElementById("Telefono").value = "";
  // document.getElementById("Telefono").setAttribute("disabled", "true");
  document.getElementById("Asistencia").value = "";
  // document.getElementById("Asistencia").setAttribute("disabled", "true");
  document.getElementById("Mensaje").value = "";
  // document.getElementById("Mensaje").setAttribute("disabled", "true");
}


//------------------------------------------------------------------------------------------


// Obtener la URL completa
const url = window.location.href;

// Crear un objeto URL para analizarla
const urlParams = new URLSearchParams(window.location.search);

// Obtener el valor del parámetro 'key'
let token = urlParams.get('token');

//Asigno el valor en el formulario para enviarlo al backend
document.getElementById("token").value = token;


//--------------------------------------------------------------------------------------------

//Validando el estado del token en el archivo .json

// Ubicación del archivo JSON
const invitados = './invitados.json';

// Usar fetch para obtener los datos del archivo JSON
fetch(invitados)
  .then(response => {
    if (!response.ok) {
      
      throw new Error(`Error al obtener el archivo JSON: ${response.statusText}`);
    }
    return response.json(); // Convertir la respuesta a JSON
  })
  .then(data => {
    let infoInvitado = data.find(item => item.token === token);
    
    
       
    //Validando el token
    document.getElementById("confirmButtom").addEventListener("click", ()=>{
      // Filtrar los invitados que tienen confirmación === true
      let invitadosConfirmados = infoInvitado.invitados.filter(invitado => invitado.confirmacion === false);

      if (!infoInvitado) {
        document.getElementById("informacion__contenedor__agradecimiento").style.display = "flex";
        document.getElementById("informacion__asistencia__respuesta").innerHTML = "Token inválido, póngase en contacto con los novios";
        throw new Error(`El token "${token}" no existe en el JSON.`);
      }else if (invitadosConfirmados.length === 0) {
        document.getElementById("informacion__contenedor__agradecimiento").style.display = "flex";
        document.getElementById("informacion__asistencia__respuesta").innerHTML = "Ya habías confirmado";
      }else if(invitadosConfirmados.length > 0){
        //Validando y mostrando los invitados
        console.log(invitadosConfirmados);
        
        invitadosConfirmados.forEach((element, index) => {
          console.log(element.nombre);

          let asistencia__datos = document.getElementById("asistencia__datos");
          const invitado = document.createElement("div");
          invitado.setAttribute("id", `invitado_${index + 1}`);
          const checkInvitado = document.createElement("input");
          checkInvitado.type = "checkbox";
          checkInvitado.setAttribute("name", `${element.nombre}`);
          const nombreInvitado = document.createElement("span");
          nombreInvitado.classList.add("nombreInvitado")
          
          asistencia__datos.appendChild(invitado);
          invitado.appendChild(nombreInvitado);
          invitado.appendChild(checkInvitado);
          nombreInvitado.innerHTML = `${index + 1}. ${element.nombre}`;
          
        });
        
        
        document.getElementById("informacion__asistencia").style.display = "flex";  
        document.body.style.overflow = 'hidden';
    }
        
    })
    
  })
  .catch(error => {
    console.error('Error al procesar el JSON:', error);
});


//---------------------------------------------------------------------------------------------
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
  console.log(formattedTimestamp);



//----------------------------------------------------------------------------------------------------------------

const form = document.getElementById('myForm');

form.addEventListener('submit', e => {
  e.preventDefault();

  document.getElementById("loader").style.display = "block"; 
  const formData = new FormData(form); // Captura los datos del formulario

  fetch('confirmar.php', { 
    method: 'POST',
    body: formData
  })
  .then(response => response.text()) // Maneja la respuesta como texto
  .then(data => {
    console.log("ok"); 
    
    
  })
  .catch(error => {
    // document.getElementById("informacion__asistencia").style.display = "none";
    console.error('Error:', error); // Maneja errores en la solicitud
    console.log("Error al enviar los datos.");
     
  });


  //Se cierra el mensaje de agradecimiento después de enviar el formulario de confirmación
  document.getElementById("acceptButton").addEventListener("click", ()=>{
      document.getElementById('informacion__contenedor__agradecimiento').style.display = "none";
  })

  document.getElementById("loader").style.display = "none"; 
        document.getElementById("informacion__asistencia").style.display = "none";
        document.getElementById('informacion__contenedor__agradecimiento').style.display = "flex";//Se muestra un mensaje de agradecimiento
        document.getElementById("asistencia").value === "si" ? document.getElementById("informacion__asistencia__respuesta").innerHTML = 
          "¡Gracias por confirmar tu asistencia! <br> Estamos emocionados de verte en la boda." : document.getElementById("informacion__asistencia__respuesta").innerHTML = 
          "Lamentamos que no puedas asistir. <br> ¡Gracias por hacérnoslo saber!" 
        limpiarFormulario();   
});

