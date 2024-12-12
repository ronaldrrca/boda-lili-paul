<?php

// Leer el archivo JSON de invitados
$file = 'invitados.json';
$data = json_decode(file_get_contents($file), true);
$token = isset($_POST['token']) ? $_POST['token'] : null;
$asistencia = isset($_POST['asistencia']) ? $_POST['asistencia'] : false;
$fecha = isset($_POST['FechaHora']) ? $_POST['FechaHora'] : "Sin datos"; 
$telefono = isset($_POST['Telefono']) ? $_POST['Telefono'] : "Sin datos"; 

// Capturar datos del formulario
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Verificar si el token es válido
    if (isset($data[$token])) {
        
                // Actualizar el estado de confirmación
                $data[$token]['confirmado'] = true;
                $data[$token]['telefono'] = $telefono;
                $data[$token]['fecha'] = $fecha;
                file_put_contents($file, json_encode($data, JSON_PRETTY_PRINT | JSON_UNESCAPED_UNICODE));
    }else{
        echo'Error de token';
    }
}



?>
