<?php

function triangle($L1, $L2, $L3): string
{
    if (empty($L1) || empty($L2) || empty($L3) || !validTriangle($L1, $L2, $L3)) {
        return 'Invalid parameters, please fill again';
    }

    if ($L1 == $L2 && $L2 == $L3) {
        return 'Equilateral Triangle';
    }

    if ($L1 == $L2 || $L1 == $L3 || $L2 == $L3 ) {
        return 'Isosceles Triangle';
    }

    if ($L1 != $L2 && $L2 != $L3) {
        return 'Scalene Triangle';
    }

}

function validTriangle($L1, $L2, $L3): bool
{
      return $L1 + $L2 > $L3 &&
             $L1 + $L3 > $L2 &&
             $L2 + $L3 > $L1;
}

echo triangle(10, 10, 12);

?>