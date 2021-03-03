<?php

/*
7 - Faça um Programa que peça os 3 lados de um triângulo. O programa deverá informar se os valores podem ser um triângulo. Indique, caso os lados formem um triângulo, se o mesmo é: equilátero, isósceles ou escaleno.
- Dicas:
- Três lados formam um triângulo quando a soma de quaisquer dois lados for maior que o terceiro;
- Triângulo Equilátero: três lados iguais;
- Triângulo Isósceles: quaisquer dois lados iguais;
- Triângulo Escaleno: três lados diferentes;
*/


function triangulo($L1, $L2, $L3): string
{
    if (empty($L1) || empty($L2) || empty($L3) || !validaTriangulo($L1, $L2, $L3)) {
        return 'Variáveis Inválidas.';
    }

    if ($L1 == $L2 && $L2 == $L3) {
        return 'Triângulo Equilátero';
    }

    if ($L1 == $L2 || $L1 == $L3 || $L2 == $L3 ) {
        return 'Triângulo Isosceles';
    }

    if ($L1 != $L2 && $L2 != $L3) {
        return 'Triângulo Escaleno';
    }

}


function validaTriangulo($L1, $L2, $L3): bool
{
      return $L1 + $L2 > $L3 &&
             $L1 + $L3 > $L2 &&
             $L2 + $L3 > $L1;
}

echo triangulo(10, 10, 12);




?>