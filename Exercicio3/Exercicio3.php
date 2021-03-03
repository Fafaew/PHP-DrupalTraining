<?php

//3 - Escreva uma função que receba graus Celsius e converta para Farenheit.


function converter($temperatura){
    $fahrenheit = ($temperatura * (9/5)) + 32;
    echo "$temperatura graus celsius são equivalentes a $fahrenheit Fahrenheit";
}

converter(32);


?>

