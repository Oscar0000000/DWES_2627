<?php
/* 
    Tabla libros:

    - id (INT, PRIMARY KEY, AUTO_INCREMENT)
    - titulo (VARCHAR(255))
    - autor (VARCHAR(255))
    - editorial (VARCHAR(255))
    - generos
    - precio
*/



// Cargar librerias

require_once 'libs/functions.php';

// Models

// Negociado
$libros = getLibros();

// Views
include 'view/index.view.php';