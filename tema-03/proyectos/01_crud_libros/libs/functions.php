```php
<?php

function getlibros() {
    $libros = [
        [
            "id" => 1,
            "titulo" => "El Quijote",
            "autor" => "Miguel de Cervantes",
            "editorial" => "Editorial Planeta",
            "generos" => ["Novela", "Aventura"],
            "precio" => 19.99
        ],
        [
            "id" => 2,
            "titulo" => "Cien Años de Soledad",
            "autor" => "Gabriel García Márquez",
            "editorial" => "Editorial Sudamericana",
            "generos" => ["Realismo Mágico", "Novela"],
            "precio" => 14.99
        ],
        [
            "id" => 3,
            "titulo" => "1984",
            "autor" => "George Orwell",
            "editorial" => "Secker & Warburg",
            "generos" => ["Distopía", "Ciencia Ficción"],
            "precio" => 12.99
        ]
    ];

    return $libros;
}
