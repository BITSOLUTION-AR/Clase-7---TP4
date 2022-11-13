<?php
//Hacer un módulo denominado Fact que tiene un parámetro X de tipo entero, en el cuál recibe un valor entero positivo y devuelve P que es la productoria de X.

/* 
5! = 5*4*3*2*1 = 5*4!
4! =   4*3*2*1 = 4*3!
3! =     3*2*1 = 3*2!

CASO BASE : 0! = 1

n! = n*(n-1)!

*/

function factorial($n)
{
    if ($n == 0) {
        return 1;
    }
    return $n * factorial($n - 1);
}

function fact($X)
{
    $P = 1;
    for ($i = 1; $i <= $X; $i++) {
        $P *= $i;
    }
    return $P;
}

/* $nro = readline("Ingrese el valor a calcular: ");
echo "El factorial de $nro es: " . fact($nro) . PHP_EOL;
$nro = readline("Ingrese el valor a calcular: ");
echo "El factorial de $nro es: " . fact($nro) . PHP_EOL; */

$nro = readline("Ingrese el valor a calcular: ");
echo "El factorial de $nro es: " . factorial($nro) . PHP_EOL;
$nro = readline("Ingrese el valor a calcular: ");
echo "El factorial de $nro es: " . factorial($nro) . PHP_EOL;

function CambioDeValor(&$X) // & parametro pasado por referencia sino es pasado por valor
{
    $X = 0;
    echo $X;
}

$nro = 1;
CambioDeValor($nro);
echo $nro; // muestra 1 sin el & y muestra 0 con el &
