
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
    let informacion__tituloTarjeta = document.getElementById("informacion__tituloTarjeta");
    let informacion__mensaje__tituloTarjeta = document.getElementById("informacion__mensaje__tituloTarjeta");    
    let fechaLimiteConfirmacion = new Date("Sat Feb 22 2025 23:59:59 GMT-0500"); 
    let fechaActual = new Date();

    if (infoInvitado) {
      informacion__mensaje__tituloTarjeta.innerHTML = "Hemos preparado todo para que nuestra boda sea inolvidable y estás invitado a celebrar con nosotros.";
      informacion__tituloTarjeta.innerHTML = infoInvitado.nombreInvitacion;
    } else {
      informacion__mensaje__tituloTarjeta.style.marginBottom = 0;
      informacion__mensaje__tituloTarjeta.innerHTML = "Nos complace participarte de nuestra boda.";
    }
            
    // Escuchar el botón de confirmación
    document.getElementById("confirmButtom").addEventListener("click", () => {
      // Validar si infoInvitado es undefined antes de acceder a sus propiedades
      if (!infoInvitado) {
        document.getElementById("informacion__contenedor__agradecimiento").style.display = "flex";
        document.getElementById("informacion__asistencia__respuesta").innerHTML = 
        "Has recibido este enlace como participación a nuestra boda, razón por la cual no es posible confirmar tu asistencia.";
        throw new Error(`El token "${token}" no existe.`);
      }

      // Validar si la invitación ya ha sido confirmada
      if (infoInvitado.confirmacion) {
        document.getElementById("informacion__contenedor__agradecimiento").style.display = "flex";
        document.getElementById("informacion__asistencia__respuesta").innerHTML = "Ya habías confirmado.";
        return;
      }

      // Controlar la fecha de confirmación a la fiesta
      if (fechaActual.getTime() > fechaLimiteConfirmacion.getTime()) {
        document.getElementById("informacion__contenedor__agradecimiento").style.display = "flex";
        document.getElementById("informacion__asistencia__respuesta").innerHTML = 
        "La fecha límite para confirmar tu asistencia a la fiesta era el 22 de febrero. Lamentamos no poder reservar un espacio para ti, pero si lo deseas puedes acompañarnos en la ceremonia religiosa.";
        return;
      }

      const link_fotos = document.getElementById("link_fotos");
      link_fotos.style.display = "none";

      // Mostrar los invitados
      infoInvitado.invitados.forEach((element, index) => {
        let asistencia__datos = document.getElementById("asistencia__datos");
        const invitado = document.createElement("div");
        invitado.setAttribute("id", `invitado_${index + 1}`);
        invitado.innerHTML = `${index + 1}.&nbsp;`;
        invitado.classList.add(`invitados`);
        const asistencia = document.createElement("input");
        asistencia.classList.add("asistencia");
        asistencia.setAttribute("id", `asistencia_${index + 1}`);
        asistencia.setAttribute("name", "asistencia[]");
        asistencia.value = "no";
        asistencia.type = "hidden";
        const checkInvitado = document.createElement("input");
        checkInvitado.type = "checkbox";
        checkInvitado.setAttribute("id", `checkInvitado_${index + 1}`);
        checkInvitado.setAttribute("data-id", index + 1);
        checkInvitado.value = "si";
        checkInvitado.setAttribute("name", "asistencia[]");

        const nombreInvitado = document.createElement("input");
        nombreInvitado.classList.add("nombreInvitado");
        nombreInvitado.setAttribute("name", "nombresInvitados[]");
        nombreInvitado.setAttribute("readonly", true);
        nombreInvitado.setAttribute("data-id", index + 1);
        const identificadorInvitado = document.createElement("input");
        identificadorInvitado.setAttribute("name", "identificadorInvitado[]");
        identificadorInvitado.value = `${element.id}`;
        identificadorInvitado.type = "hidden";

        asistencia__datos.appendChild(invitado);
        invitado.appendChild(nombreInvitado);
        invitado.appendChild(asistencia);
        invitado.appendChild(checkInvitado);
        invitado.appendChild(identificadorInvitado);
        nombreInvitado.value = `${element.nombre}`;

        // Controlar que solo se envíe el valor "no" cuando el checkbox no está marcado
        function verificarCheckInvitado(event) {
          let check = event.target; // El checkbox que disparó el evento
          check.checked ? asistencia.disabled = true : asistencia.disabled = false;
        }

        // Asignar el evento change al checkbox
        checkInvitado.addEventListener("change", verificarCheckInvitado);
      });

      document.getElementById("informacion__asistencia").style.display = "flex";
      document.body.style.overflow = 'hidden';
    });
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
  



//----------------------------------------------------------------------------------------------------------------

const form = document.getElementById('myForm');

form.addEventListener('submit', e => {
  e.preventDefault();

  const formData = new FormData(form); // Captura los datos del formulario

  //Maneja el envío de los datos al backend
  fetch('confirmar.php', { 
    method: 'POST',
    body: formData
  })
  .then(response => response.text()) // Maneja la respuesta como texto
  .then(data => {
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
        document.getElementById("informacion__asistencia").style.display = "none";
        document.getElementById('informacion__contenedor__agradecimiento').style.display = "flex";//Se muestra un mensaje de agradecimiento
        
        const checkboxes = document.querySelectorAll('input[name="asistencia[]"]');
        const nombres = document.querySelectorAll('input[name="nombresInvitados[]"]');
        
    // Verificar si al menos uno está marcado
    const algunoMarcado = Array.from(checkboxes).some(checkbox => checkbox.checked);
    if (algunoMarcado) {
      // Filtrar los checkboxes que están marcados
        const seleccionados = Array.from(checkboxes)
        .filter(checkbox => checkbox.checked) // Dejar solo los marcados

        // Obtener el nombre relacionado usando el data-id
        .map(checkbox => {
          const id = checkbox.getAttribute('data-id');
          const nombreInput = Array.from(nombres).find(nombre => nombre.getAttribute('data-id') === id);
          return { checkbox, nombre: nombreInput ? nombreInput.value : null };
        });

      // Mostrar los resultados
      seleccionados.forEach((item, index) => {
        document.getElementById("informacion__asistencia__respuesta").innerHTML += `${index + 1}.&nbsp; ${item.nombre} <br>`;
      });
      document.getElementById("informacion__asistencia__respuesta").innerHTML += "<br>¡Gracias por confirmar tu asistencia! <br> Estamos emocionados de verte en la boda. <br>";
      document.getElementById("informacion__asistencia__respuesta").innerHTML 
        += `Cuentas con <b>${seleccionados.length}</b> ${seleccionados.length == 1 ? "<b>cupo</b> confirmado" : "<b>cupos</b> confirmados"}`;
    } else {
        document.getElementById("informacion__asistencia__respuesta").innerHTML = "Lamentamos que no puedas asistir. <br> ¡Gracias por hacérnoslo saber!" 
    }
      
       
});


//------------------------------------------------------------------------------------------
//Manejar el comportamiento de los botones de confirmar y submit

document.getElementById("acceptButton").addEventListener("click", ()=>{
  document.getElementById("informacion__contenedor__agradecimiento").style.display = "none";
  window.location.reload();
  window.scrollTo(0, 0);

})


document.getElementById("cancelarEnvio").addEventListener("click", ()=>{
  document.getElementById("informacion__asistencia").style.display = "none";  
  document.body.style.overflow = 'auto';
  location.href = location.href;

})





