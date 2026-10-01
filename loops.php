<?php
$multiplier = 7;

for ($i = 1; $i <= 10; $i++) {
    echo ($multiplier * $i) . PHP_EOL;
}

$bmiList = [17.2, 21.5, 24.9, 28.3, 33.0];

foreach ($bmiList as $bmi) {
    if ($bmi < 18.5) {
        echo "Underweight." . PHP_EOL;
    } elseif ($bmi < 25) {
        echo "Normal weight." . PHP_EOL;
    } elseif ($bmi < 30) {
        echo "Overweight." . PHP_EOL;
    } else {
        echo "Obese." . PHP_EOL;
    }
}


$rolls = 0;
$currentRoll = 0;

while ($currentRoll !== 6) {
    $currentRoll = rand(1, 6);
    $rolls++;
    echo "Attempt {$rolls}: rolled {$currentRoll}" . PHP_EOL;
}
echo "Got a 6 after {$rolls} rolls!" . PHP_EOL;
