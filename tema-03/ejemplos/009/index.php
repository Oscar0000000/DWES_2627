<?php


function sumar_uno($x)
{
    $x++;
}

$a = 2;
echo sumar_uno($a);
echo $a;


function sumar_dos($x)
{
    $x += 2;
    return $x;
}

$a = 2;
echo sumar_dos($a);
echo $a;




?>