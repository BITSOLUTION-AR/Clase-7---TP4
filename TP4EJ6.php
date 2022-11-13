<?php

// Crea una función MayorDeTres, que reciba tres números enteros y devuelva el valor del mayor de ellos. Por ejemplo, para los números 5, 7 y 5, devolvería el valor 7.

function MayorDeTres($a, $b, $c)
{
    $mayor = $a;
    if ($b > $mayor) {
        $mayor = $b;
    }
    if ($c > $mayor) {
        $mayor = $c;
    }
    return $mayor;
}

echo MayorDeTres(3, 1, 3);
