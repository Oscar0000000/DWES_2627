<?php
    $nombre = "Jose marri";
    $edad = 30;

?>




<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejemplo HTML</title>
</head>
<body>
    <h1>Hola, mundo</h1>
    <p>Este es un ejemplo de documento HTML.</p>
    <?php
        echo "<p>Hola mundo desde php</p>";
        // Comentario en php

        echo "<p>Nombre: $nombre</p>";
    ?>
</body>
</html>
