<?php

/*
 controlador: sumar.php

 Proyecto: proyecto 2.1 - calculadora básica
 Descripción: Calculadora de operaciones básicas:
    - suma
    - resta
    - multiplicación
    - división
    - potencia
    - ...
 Alumno: [Nombre del alumno]
 Fecha:
 
*/

// Modelo

// definir constantes 
define("G", 9.81)

// Obtenemos los valores del formulario

$velocidad_inicial = (float) $_POST['velocidad_inicial'] ?? 0;
$angulo_lanzamiento = (float) $_POST['angulo_lanzamiento'] ?? 0;

// Convertimos el angulo de grados a radianes
$angulo_radianes = deg2rad($angulo_lanzamiento);

// Calcular la velocidad inicial horizontal y vertical
$velocidad_inicial_horizontal = $velocidad_inicial * cos($angulo_radianes);
$velocidad_inicial_vertical = $velocidad_inicial * sin($angulo_radianes);

//Calcular la altura maxima
$altura_maxima = ($velocidad_inicial_vertical ** 2) / (2 * 9.81);

//Calcular el tiempo de vuelo
$tiempo_vuelo = (2 * $velocidad_inicial_vertical) / 9.81;

//Calcular la distancia horizontal
$distancia_horizontal = $velocidad_inicial_horizontal * $tiempo_vuelo;

//Realizar la operación de suma
$resultado = $valor1 + $valor2;

$operacion = "Calculos del lanzamiento";


// Vista
include "views/calculos.view.php";