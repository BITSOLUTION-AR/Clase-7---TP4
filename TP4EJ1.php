<?php
/*Escriba un programa con una función que tome como parámetro dos enteros, los sume y devuelva
como resultado la suma. El programa deberá pedir al usuario los dos números, luego llamar a la
función con los números leídos como argumentos y por último informar al usuario el valor de la
suma.*/

function suma($a,$b){
    return $a+$b;
}

$nro1 = readline("Ingrese el primer número: ");
$nro2 = readline("Ingrese el segundo número: ");
$suma = suma($nro1,$nro2);
echo "El resultado de la suma de $nro1 + $nro2 es: $suma";

?>