<?php
//6 - Escreva uma função que receba um número e exiba o dia correspondente da semana. (1-Domingo, 2- Segunda, etc.), se digitar outro valor deve aparecer valor inválido.

$diaDaSemana = diaDaSemana(5);

function diaDaSemana($value):string
{
    switch($value) {
        case 1:
            return 'Domingo';
            break;
        case 2:
            return 'Segunda';
            break;
        case 3:
            return 'Terça';
            break;
        case 4:
            return 'Quarta';
            break;
        case 5:
            return 'Quinta';
            break;
        case 6:
            return 'Sexta';
            break;
        case 7:
            return 'Sábado';
            break;
        default:
            return 'Inválido';

      }
}

echo $diaDaSemana;

?>