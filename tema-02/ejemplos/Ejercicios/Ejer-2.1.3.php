<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Ejercicio 3 - Concatenación de Cadenas</title>
</head>
<body>

    <?php
    // Creación de las dos variables de tipo string
    $texto1 = "Bienvenido al curso de ";
    $texto2 = "Desarrollo Web en Entorno Servidor.";

    // Concatenación utilizando el operador punto (.) y guardado en una nueva variable
    $resultado = $texto1 . $texto2;

    // Mostrar el resultado en pantalla
    echo "<h1>Resultado de la Concatenación</h1>";
    echo "<p>" . $resultado . "</p>";
    ?>

</body>
</html>