<?php
/*Escriba un programa con una función que tome como parámetro dos enteros, los sume y devuelva
como resultado la suma. El programa deberá pedir al usuario los dos números, luego llamar a la
función con los números leídos como argumentos y por último informar al usuario el valor de la
suma.*/

function suma2($a,$b){
    return $a+$b;
}

function suma3($a,$b,$c){
    return suma2($a,$b)+$c;
}

$nro1 = readline("Ingrese el primer número: ");
$nro2 = readline("Ingrese el segundo número: ");
$nro3 = readline("Ingrese el tercer número: ");
$resultado = suma2($nro1,$nro2);
echo "El resultado de la suma de $nro1 + $nro2 es: $resultado";
$resultado = suma3($nro1,$nro2,$nro3);
echo "El resultado de la suma de $nro1 + $nro2 + $nro3 es: $resultado";

?>