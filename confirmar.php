<?php

// Leer el archivo JSON de invitados
$file = 'invitados.json';
$data = json_decode(file_get_contents($file), true);

// Capturar datos del formulario
$token = isset($_POST['token']) ? $_POST['token'] : null;
$fecha = isset($_POST['fechaHora']) ? $_POST['fechaHora'] : "Sin datos"; 
$telefono = isset($_POST['telefono']) ? $_POST['telefono'] : "Sin datos"; 
$mensaje = isset($_POST['mensaje']) ? $_POST['mensaje'] : "Sin datos"; 
$nombresInvitados = isset($_POST['nombresInvitados']) ? $_POST['nombresInvitados'] : []; 
$asistencia = isset($_POST['asistencia']) ? $_POST['asistencia'] : []; 
$identificadorInvitado = isset($_POST['identificadorInvitado']) ? $_POST['identificadorInvitado'] : [];

echo $token . "<br>";
echo $fecha . "<br>";
echo $telefono . "<br>";
echo $mensaje . "<br>";
print_r($nombresInvitados);
print_r($asistencia);
print_r($identificadorInvitado);


// die();


// Inicializar variable
$invitadoEncontrado = null;

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    
    

    // Validar si el token fue enviado
    if (!$token) {
        die("Error: No se proporcionó el token.");
    }

    // Buscar el token en el array
    foreach ($data as &$objeto) { // Usar referencia (&) para modificar directamente
        if ($objeto['token'] === $token) {
            $invitadoEncontrado = &$objeto; // Guardar la referencia del objeto
            break;
        }
    }

    // Verificar si el token fue encontrado
    if ($invitadoEncontrado) {
        // Actualizar los datos del invitado encontrado
        $invitadoEncontrado['fecha_confirmacion'] = $fecha;
        $invitadoEncontrado['telefono'] = $telefono;
        $invitadoEncontrado['mensaje'] = $mensaje;

        // Buscar los invitados que coincidan con los IDs

foreach ($invitadoEncontrado['invitados'] as &$invitado) {
    if (in_array($invitado['id'], $identificadorInvitado)) {
        // echo "<pre>";
        // echo "ID: " . $invitado['id'] . "\n";
        // echo "Nombre: " . $invitado['nombre'] . "\n";
        // echo "Asistencia: " . $invitado['asistencia'] . "\n";
        // echo "</pre>";
       
        $invitado['confirmacion'] = true;
        // echo "asistencia[0]" . $asistencia[0];
        $invitado['asistencia'] = $asistencia[$invitado['id'] - 1];
        // $invitado['asistencia'] = $asistencia[$identificadorInvitado - 1];
    }
} 

// die();
        // Guardar los cambios en el archivo JSON
        file_put_contents($file, json_encode($data, JSON_PRETTY_PRINT | JSON_UNESCAPED_UNICODE | JSON_UNESCAPED_SLASHES));

        echo "Datos actualizados correctamente.";
    } else {
        echo "Error: Token no encontrado.";
    }
}
?>
