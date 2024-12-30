<?php

// Leer el archivo JSON de invitados
$json = file_get_contents('./invitados.json');
$invitados = json_decode($json, true);
$resultados = [];
$invitadosAsistentes = 0;
$invitadosInasistentes = 0;

// Filtrar invitaciones confirmadas y contar asistencias
foreach ($invitados as $invitacion) {
    if (isset($invitacion['confirmacion']) && $invitacion['confirmacion'] === true) {
        $resultados[] = [
            'invitados' => $invitacion['invitados'], // Lista completa de invitados
            'telefono' => $invitacion['telefono'],
            'fecha_confirmacion' => $invitacion['fecha_confirmacion'],
            'mensaje' => $invitacion['mensaje'],
        ];

        // Contar asistentes e inasistentes en cada invitación
        foreach ($invitacion['invitados'] as $invitado) {
            if ($invitado['asistencia'] === "si") {
                $invitadosAsistentes++;
            } else {
                $invitadosInasistentes++;
            }
        }
    }
}
?>
