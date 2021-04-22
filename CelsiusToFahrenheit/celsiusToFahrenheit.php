<?php

function convert($temperature){
    $fahrenheit = ($temperature * (9/5)) + 32;
    echo "$temperature Celsius are equivalent to $fahrenheit Fahrenheit";
}

convert(32);

?>

