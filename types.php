<?php
$str = "String";
$int = 2;
$float = 2.2;
$boolT = true;
$boolF = false;
$null = null;

$arr1 = ['ha', 'chan'];
$arr2 = ['ha' => 'chan', 'gira' => 'akuruhi'];

echo $str . PHP_EOL;
echo $int . PHP_EOL;
echo $float . PHP_EOL;
echo $boolT . PHP_EOL;
echo $boolF . PHP_EOL;
echo $null . PHP_EOL;
var_dump($arr1);
var_dump($arr2);

$numstr = "22";
$castInt = (int) $numstr;

var_dump($numstr);
var_dump($castInt);
var_dump((int) 9.99);
