<?php

/*Hacer un algoritmo que llame a la función F(X, Y)=5.6*X+Y/2.5 y que muestre los resultados para F
(3,5); F (9,2) y F (56,87)*/

function F($X,$Y){
    return 5.6 * $X + $Y / 2.5;
}

echo "F(3,5) = " . F(3,5) . PHP_EOL;
echo "F(9,2) = " . F(9,2) . PHP_EOL;
echo "F(56,87) = " . F(56,87) . PHP_EOL;