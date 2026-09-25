<?php
echo date("Y-m-d") . PHP_EOL;
echo date("d/m/Y") . PHP_EOL;
echo date("l, F j, Y") . PHP_EOL;

$timestamp = strtotime("17-11-2004");
$formatted = date("d.m.Y", $timestamp);
echo $formatted . PHP_EOL;

$day = date("l");
$dayNumber = date("j");
$monthNumber = date("m");
$year = date("Y");
echo sprintf("Today is %s, day %d of the month (month %s of %d).", $day, $dayNumber, $monthNumber, $year) . PHP_EOL;

echo date("D, j M Y @ H:i");