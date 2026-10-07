<?php
    $nombre = "Jose marri";
    $edad = 30;
    $apellido = "Marri";
    $poblacion = "Madrid";
?>


<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejemplo 6</title>
</head>
<body>
    <h1>Ejemplo 6</h1>
    <p>Esta es una página HTML dentro de un archivo PHP.</p>
    <?php
        // Comillas Dobles
        echo "<b>Nombre:</b> $nombre<br>";
        // Comillas Simples
        echo '<b>Nombre:</b> $nombre<br>';
    ?>
</body>
</html>
