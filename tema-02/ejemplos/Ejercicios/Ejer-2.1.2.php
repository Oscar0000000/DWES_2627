<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Ejercicio 2 - Noticia con Imagen</title>
</head>
<body>

    <?php
    echo "<h1>Noticias de Actualidad</h1>";

    echo "<p>
        El desarrollo web en el entorno servidor permite la creación de aplicaciones 
        dinámicas e interactivas. A través de lenguajes como PHP, los desarrolladores 
        pueden procesar datos, gestionar bases de datos y personalizar la respuesta 
        que recibe el usuario final en su navegador.
    </p>";

    // Imagen relacionada con la noticia
    echo '<p><img src="https://images.unsplash.com/photo-1504711434969-e33886168f5c?w=500" alt="Noticias e información" width="500"></p>';

    print '<p><a href="http://www.elpais.es" target="_blank">Visitar El País</a></p>';
    ?>

</body>
</html>