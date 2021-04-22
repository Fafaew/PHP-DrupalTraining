<?php

function minMax(...$values)
{
        $max = max($values);
        $min =  min($values);
    
        echo "The biggest numbet is $max".PHP_EOL;
        echo "The smallest number is $min";
}

$numeros = minMax(40, 23, 31, 42, 55, 6, 71);
