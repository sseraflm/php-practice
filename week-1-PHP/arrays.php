<?php
function calculateBmi(float $weight, float $height): float
{
    return ($weight / ($height * $height));
}
$people = [];
array_push(
    $people,
    ['weight' => 99.0, 'height' => 1.80],
    ['weight' => 75.0, 'height' => 1.72],
    ['weight' => 99.0, 'height' => 1.65]
);

$bmis = array_map(
    fn($person) => calculateBmi($person['weight'], $person['height']),
    $people
);

var_dump($bmis);

$filteredBmis = array_filter($bmis, fn($bmi) => $bmi >= 25.0);

var_dump($filteredBmis);

usort($bmis, fn($a, $b) => $a <=> $b);
var_dump($bmis);

$person = $people[0];

var_dump(array_key_exists('weight', $person));
