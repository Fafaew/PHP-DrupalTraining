<?php 

//1 - Escreva uma função que receba um número indeterminado de parâmetros(números) e retorne a média desses números.

    $numeros = array(10, 20, 30, 45);

    
    function media($numero) {
        $total = 0;
        foreach($numero as $numeros) {
            $total += $numeros;
        }
        $media = $total/count($numero);
        echo "Média: $media";
    }
    media($numeros);
    
?>