<?php

declare(strict_types=1);

function calculateBmi(float $weight, float $height): float
{
    return ($weight / ($height * $height));
}

$calcBmi = calculateBmi(70.0, 1.75);

function categorizeBmi(float $bmi): string
{
    if ($bmi < 18.5) {
        return "Underweight.";
    } elseif ($bmi < 25) {
        return "Normal weight.";
    } elseif ($bmi < 30) {
        return "Overweight.";
    } else {
        return "Obese.";
    }
}

echo categorizeBmi($calcBmi);
