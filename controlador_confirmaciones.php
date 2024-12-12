<?php

// Leer el archivo JSON de invitados
$json = file_get_contents('./invitados.json');
$invitados = json_decode($json, true);

// Filtrar elementos con "confirmado = true"
$confirmados = array_filter($invitados, function ($item) {
    return isset($item['confirmado']) && $item['confirmado'] === true;
});

?>