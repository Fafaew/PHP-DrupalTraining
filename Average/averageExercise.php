<?php 
    $numbers = array(10, 20, 30, 45);

    function average($number) {
        $total = 0;
        foreach($number as $numbers) {
            $total += $numbers;
        }
        $average = $total/count($number);
        echo "Average: $average";
    }
    average($numbers); 
?>