
<?php

/*
    Libreria: functions.php
    Funciones auxiliares para el proyecto CRUD de libros.

    Funciones incluidas:
    - getLibros(): Devuelve un array con todos los libros de la base de datos.
*/

// Funcion getLibros: Devuelve un array con todos los libros.
function getLibros() {

    // Array de libros (simulando una base de datos).
    $libros = [
        [
            'id' => 1,
            'titulo' => 'El Quijote',
            'autor' => 'Miguel de Cervantes',
            'editorial' => 'Editorial Planeta',
            'generos' => ['Novela', 'Aventura'],
            'precio' => 19.99
        ],
        [
            'id' => 2,
            'titulo' => 'Cien años de soledad',
            'autor' => 'Gabriel García Márquez',
            'editorial' => 'Editorial Sudamericana',
            'generos' => ['Novela', 'Realismo mágico'],
            'precio' => 14.99
        ],
        [
            'id' => 3,
            'titulo' => '1984',
            'autor' => 'George Orwell',
            'editorial' => 'Secker & Warburg',
            'generos' => ['Distopía', 'Ciencia ficción'],
            'precio' => 12.99
        ]
    ];

    return $libros;
}
