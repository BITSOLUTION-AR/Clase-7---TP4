<?php

/* Hacer un programa que nos permita introducir un numero por teclado y sobre él se permitan
realizar las siguientes operaciones: Mostrar la cantidad de divisores, hallar su factorial, comprobar si es primo e imprimir su tabla de multiplicar. */

function CantidadDisivores($n)
{
    $cantidad = 2; // todos los numeros son divisibles por uno y por si mismo
    for ($i = 2; $i <= $n / 2; $i++) {
        if ($n % $i == 0) {
            $cantidad++;
        }
    }
    return $cantidad;
}

function factorial($n)
{
    if ($n == 0) {
        return 1;
    }
    return $n * factorial($n - 1);
}

function TablaMultiplicar($nro)
{
    for ($i = 1; $i <= 10; $i++) {
        echo "$i x $nro = " . ($i * $nro) . PHP_EOL;
    }
}

do {
    echo "/----------MENU----------/ \n";
    echo "1: Mostrar la cantidad de divisores \n";
    echo "2: Hallar el factorial \n";
    echo "3: Comprobar si es primo \n";
    echo "4: Imprimir su tabla de multiplicar \n";
    echo "0: Salir del programa \n";
    $opcion = readline("Ingrese una opción: ");
    switch ($opcion) {
        case "1":
            $nro = readline("Ingrese un nro: ");
            echo "Cantidad de divisores: " . CantidadDisivores($nro) . PHP_EOL;
            break;
        case "2":
            $nro = readline("Ingrese un nro: ");
            echo "El factorial es:" . factorial($nro);
            break;
        case "3":
            $nro = readline("Ingrese un nro: ");
            if (CantidadDisivores($nro) == 2) {
                echo "El numero es primo";
            } else {
                echo "El numero NO es primo";
            }
            break;
        case "4":
            $nro = readline("Ingrese un nro: ");
            echo "Su tabla de multiplicar es: \n" . TablaMultiplicar($nro);
            break;
        case "0":
            echo "Fin del programa.";
            break;
        default:
            echo "Opcion invalida";
    }
} while ($opcion != 0);
