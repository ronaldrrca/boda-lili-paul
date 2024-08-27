# boda-lili-paul
Invitación web para boda

function doPost(e) {
  var sheet = SpreadsheetApp.getActiveSpreadsheet().getActiveSheet();
  var data = JSON.parse(e.postData.contents);
  
  sheet.appendRow([data.nombres, data.telefono, data.asistencia, data.mensaje]);
  
  return ContentService.createTextOutput(JSON.stringify({ "result": "success" })).setMimeType(ContentService.MimeType.JSON);
}


document.getElementById('myForm').addEventListener('submit', function(e) {
    e.preventDefault();
    
    var data = {
      nombres: document.getElementById('nombres').value,
      telefono: document.getElementById('telefono').value,
      asistencia: document.getElementById('asistencia').value,
      mensaje: document.getElementById('mensaje').value
    };
    
    fetch('https://script.google.com/macros/s/AKfycbxXN7HggEA31IFAxapJ1dbl-Uqw21QKS3oCB_1BGl75DkNi7qwBgIfOYlF-0Yfu3Eo8/exec', {
      method: 'POST',
      body: JSON.stringify(data)
    })
    .then(response => response.json())
    .then(data => {
      if (data.result === 'success') {
        alert('Data saved successfully!');
      }
    })
    .catch(error => console.error('Error:', error));
  });

  <form id="myForm" class="informacion__asistencia__formulario" action="#" method="POST">
                    <div class="asistencia__datos">
                        <input type="text" id="nombres" name="nombres" placeholder="Nombres de los asistentes">
                        <input type="tel" id="telefono" name="telefono" placeholder="Teléfono">
                    </div>
                    <select name="asistencia" id="asistencia">
                        <option value="" selected disabled>Confirmación</option>
                        <option value="si">Sí, allí estaré</option>
                        <option value="no">No</option>
                    </select>
                    <textarea id="mensaje" maxlength="300" cols="6" name="mensaje" placeholder="Mensaje para los novios"></textarea>
                    <input type="submit" value="Enviar confirmación">
                </form>
