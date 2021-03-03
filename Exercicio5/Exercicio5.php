<?php

//5 - Escreva uma função que receba um número indeterminado de parâmetro e imprima o maior e o menor deles.




function minMax(...$values)
{      
    
        $max = max($values);
        $min =  min($values);
    
        echo "O maior número é $max".PHP_EOL;        
        echo "O menor número é $min"; 
}

$numeros = minMax(40, 23, 31, 42, 55, 6, 71);



