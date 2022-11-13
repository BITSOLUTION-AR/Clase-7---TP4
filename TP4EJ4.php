<?php

// Escribir un algoritmo que utilice un módulo procedimiento denominado mM que tiene un parámetro formal X de tipo carácter, si el carácter que recibe es una letra en minúscula modifica el parámetro con carácter en mayúscula.

function mM($X)
{
    /* switch ($X) {
        case 'a':
            return 'A';
        case 'b':
            return 'B';
        case 'c':
            return 'C';
        case 'd':
            return 'D';
        case 'e':
            return 'E';
        case 'f':
            return 'F';
        case 'g':
            return 'G';
    } */

    /* if ($X == 'a') {
        return 'A';
    } elseif ($X == 'b') {
        return 'B';
    } elseif ($X == 'c') {
        return 'C';
    } elseif ($X == 'd') {
        return 'D';
    } elseif ($X == 'e') {
        return 'E';
    } elseif ($X == 'f') {
        return 'F';
    } */

    echo 'A';
    echo 'B';
    echo 'C';
    return 'E';
    echo 'F';
    echo 'G';
    echo 'H';
}

function minaMay($cadena)
{
    $cadenaMayuscula = "";
    for ($i = 0; $i < strlen($cadena); $i++) {
        $cadenaMayuscula .= mM($cadena[$i]);
    }
    return $cadenaMayuscula;
}

/*
$cadenaMayuscula .= mM($cadena[0]); // "" .= "A" = "A"
$cadenaMayuscula .= mM($cadena[1]); // "A" .= "B" = "AB"
$cadenaMayuscula .= mM($cadena[2]); // "AB" .= "E" = "ABE" 
$cadenaMayuscula .= mM($cadena[3]); // "ABE" .= "D" = "ABED" 
*/

/* echo minamay('abecdc'); */

$salida = mM('a');
echo $salida;
