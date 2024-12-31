<?php
include './controlador_confirmaciones.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <title>Boda Lilibeth y Paul</title>
    <link rel="shortcut icon" href="./assets/favicon.ico" type="image/x-icon">
    <link rel="stylesheet" href="./css/movil.css" media="screen and (min-width: 320px)">
    <link rel="stylesheet" href="./css/tablet.css" media="screen and (min-width: 768px)">
    <link rel="stylesheet" href="./css/portatil.css" media="screen and (min-width: 1200px)">
</head>
<body>
    <main id="main_confirmaciones">
        <h1>Invitados confirmados</h1>
        
        <div id="estadisticasAsistencia">
            <span>Confirmaciones: <?php echo count($resultados); ?></span> 
            <span>Asistencias: <?php echo $invitadosAsistentes; ?></span>
            <span>Inasistencias: <?php echo $invitadosInasistentes; ?></span>
            <table id="tabla_confirmados">
            <thead>
                <tr>
                    <th></th>
                    <th>Nombres</th>
                    <th>Asistencia</th>
                    <th>Fecha / Hora</th>
                    <th class="thTelefono">Teléfono</th>
                    <th class="thMensaje">Mensaje</th>
                </tr>
            </thead>
            <tbody>
            <?php 
                $grupoNumero = 1; // Iniciar número de grupo
                foreach ($resultados as $resultado) {
                    $numInvitados = count($resultado['invitados']); // Número de filas en el grupo
                    $mensajeMostrado = false; // Variable para controlar la impresión del mensaje
                    $fechaMostrada = false; // Variable para controlar la impresión de la fecha
                    $telefonoMostrado = false; // Variable para controlar la impresión del teléfono
                    $grupoMostrado = false; // Variable para controlar la impresión del número de grupo
                    $grupoClase = ($grupoNumero % 2 == 0) ? 'grupoPar' : 'grupoImpar'; // Alternar clases de grupo
                    
                    foreach ($resultado['invitados'] as $index => $invitado) { ?>
                        <tr class="<?php echo $grupoClase; ?>">
                            <?php 
                            if (!$grupoMostrado) {
                                $grupoMostrado = true; ?>
                                <td class="confirmadosGrupo" rowspan="<?php echo $numInvitados; ?>">
                                    <?php echo htmlspecialchars($grupoNumero); ?>
                                </td>
                            <?php } ?>
                            <td class="confirmadosNombre"><?php echo htmlspecialchars($invitado['nombre']); ?></td>
                            <td class="confirmadosAsistencia"><?php echo htmlspecialchars($invitado['asistencia']); ?></td>
                            <?php 
                            if (!$fechaMostrada) { 
                                $fechaMostrada = true; ?>
                                <td class="confirmadosFecha" rowspan="<?php echo $numInvitados; ?>">
                                    <?php echo htmlspecialchars($resultado['fecha_confirmacion']); ?>
                                </td>
                            <?php } ?>
                            <?php 
                            if (!$telefonoMostrado) { 
                                $telefonoMostrado = true; ?>
                                <td class="confirmadosTelefono" rowspan="<?php echo $numInvitados; ?>">
                                    <?php echo htmlspecialchars($resultado['telefono']); ?>
                                </td>
                            <?php } ?>
                            <?php 
                            if (!$mensajeMostrado) { 
                                $mensajeMostrado = true; ?>
                                <td class="confirmadosMensaje" rowspan="<?php echo $numInvitados; ?>">
                                    <?php echo htmlspecialchars($resultado['mensaje']); ?>
                                </td>
                            <?php } ?>
                        </tr>
                    <?php }
                    $grupoNumero++; // Incrementar el número de grupo para el siguiente grupo
                    
                } ?>
            </tbody>
            
        </table>        
        </div>
            
        
    </main>
</body>
</html>