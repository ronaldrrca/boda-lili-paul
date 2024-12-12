<?php
include './controlador_confirmaciones.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="./css/movil.css">
</head>
<body>
    <table id="tabla_confirmados">
        <thead>
            <tr>
                <th>Nombres</th>
                <th>Teléfono</th>
                <th>Fecha / Hora</th>
            </tr>
        </thead>
        <tbody>
            <?php 
                foreach ($confirmados as $id => $item) {
                    echo "<tr>";
                    echo "<td>" . implode(", ", $item['nombres']) . "</td>";
                    echo "<td>{$item['telefono']}</td>";
                    echo "<td>{$item['fecha']}</td>";
                    echo "</tr>";
                }
            ?>
        </tbody>
    </table>
    
</body>
</html>