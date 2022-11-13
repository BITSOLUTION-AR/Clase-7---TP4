<?php

/* Diseñar un algoritmo que ordene tres números A, B, C en forma ascendente utilizando un
procedimiento denominado menorMayor que tiene dos parámetros pasados por referencia que
devuelve en el primer parámetro el valor menor y en el segundo el valor mayor de los parámetros
respectivamente. */

function menorMayor(&$menor, &$mayor)
{
    if ($mayor < $menor) {
        $aux = $mayor;
        $mayor = $menor;
        $menor = $aux;
    }
}

$a = 3;
$b = 2;
$c = 1;
menorMayor($b, $c);
menorMayor($a, $b);
menorMayor($b, $c);
echo "Los numeros ordenados de menor a mayor son: $a, $b, $c";


// [3,2,1] --> [2,3,1] --> [2,1,3] --> [1,2,3] 
// [3,2,1] --> [3,1,2] --> [1,3,2] --> [1,2,3]