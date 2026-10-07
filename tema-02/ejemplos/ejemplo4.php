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
    <title>Ejemplo HTML</title>
</head>
<body>
    <h1>Hola, mundo</h1>
    <!-- Muestra los detalles del alumno -->
    Nombre: <?php echo $nombre; ?> <br>
    Edad: <?php echo $edad; ?> <br>
    Apellido: <?php echo $apellido; ?> <br>
    Población: <?php echo $poblacion; ?> <br>

</body>
</html>
