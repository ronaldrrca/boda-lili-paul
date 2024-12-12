<?php

// Leer el archivo JSON de invitados
$file = 'invitados.json';
$data = json_decode(file_get_contents($file), true);

// Capturar datos del formulario
$token = isset($_POST['token']) ? $_POST['token'] : null;
$asistencia = isset($_POST['asistencia']) ? $_POST['asistencia'] : false;
$fecha = isset($_POST['fechaHora']) ? $_POST['fechaHora'] : "Sin datos"; 
$telefono = isset($_POST['telefono']) ? $_POST['telefono'] : "Sin datos"; 
$mensaje = isset($_POST['mensaje']) ? $_POST['mensaje'] : "Sin datos"; 

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

        // Guardar los cambios en el archivo JSON
        file_put_contents($file, json_encode($data, JSON_PRETTY_PRINT | JSON_UNESCAPED_UNICODE | JSON_UNESCAPED_SLASHES));

        echo "Datos actualizados correctamente.";
    } else {
        echo "Error: Token no encontrado.";
    }
}
?>
