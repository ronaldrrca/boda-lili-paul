<?php

// Leer el archivo JSON de invitados
$json = file_get_contents('./invitados.json');
$invitados = json_decode($json, true);
$resultados = [];

// Filtrar invitados confirmados
foreach ($invitados as $invitacion) {
    $invitadosValidos = array_filter($invitacion['invitados'], function($invitado) {
        return $invitado['confirmacion'] === true;
    });

    if (!empty($invitadosValidos)) {
        $resultados[] = [
            'invitados' => $invitadosValidos,
            'telefono' => $invitacion['telefono'],
            'fecha_confirmacion' => $invitacion['fecha_confirmacion'],
            'mensaje' => $invitacion['mensaje'],
        ];
    }
}


?>