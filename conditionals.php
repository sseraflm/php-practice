<?php
$score = 22;
if ($score >= 30) {
    echo "Passed with {$score}/60 points." . PHP_EOL;
} else {
    echo "Failed with {$score}/60 points." . PHP_EOL;
}

$bmi = 25;

if ($bmi < 18.5) {
    echo "Underweight." . PHP_EOL;
} elseif ($bmi < 25) {
    echo "Normal weight." . PHP_EOL;
} elseif ($bmi < 30) {
    echo "Overweight." . PHP_EOL;
} else {
    echo "Obese." . PHP_EOL;
}

$category = match (true) {
    $bmi < 18.5 => "Underweight.",
    $bmi < 25   => "Normal weight.",
    $bmi < 30   => "Overweight.",
    $bmi >= 30  => "Obese.",
    default     => "Invalid value.",
};

echo $category . PHP_EOL;
