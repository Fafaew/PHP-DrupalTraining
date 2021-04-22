<?php

function convertMeters ($meters) {
    $centimeters = $meters*100;
    echo "$meters Meters are equivalent to $centimeters Centimeters";
}

convertMeters(3);

?>