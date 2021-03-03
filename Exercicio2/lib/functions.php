<?php

function get_pets()
{
    $petsJson = file_get_contents('data/pets.json');
    $pets = json_decode($petsJson, true);

    return $pets;
}

function save_pets($petsToSave)
{
    $json = json_encode($petsToSave, JSON_PRETTY_PRINT);
    file_put_contents('data/pets.json', $json);
}

function validate_cpf($cpf): bool {
    if (strlen($cpf) != 11) {
        return false;
    }
    $first_digit = iterate_cpf($cpf, 0);
    $second_digit = iterate_cpf($first_digit['new_cpf'], 1);
    $cpf_test = implode("", $second_digit['new_cpf']);
    return $cpf_test === $cpf;    
}

function iterate_cpf($cpf, $digit):array {
    $aux = array();
    $sum = 0;
    $new_cpf = array();
    for ($i = 0; $i < 9 + $digit; $i++) {
        $iterator = $cpf[$i] * (10 -$i + $digit);
        array_push($aux, $iterator);
        array_push($new_cpf, $cpf[$i]);
    }
    $sum = array_sum($aux);
    $digit = calculate_digit($sum);
    array_push($new_cpf, (string) $digit);
    return array(
        'new_digit' => $digit,
        'new_cpf' => $new_cpf
    );

}

function calculate_digit($value) {
    $digit = 0;
    $mod = $value % 11;
    if ($mod < 2) {
        return $digit;
    }
    return 11 - $mod;
}
