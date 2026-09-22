<?php

var_dump((2 ** 8));

$num = 2;

$num += 5;

var_dump($num);

$num *= 2;

var_dump($num);

$num /= 3;

var_dump($num);

$msg = "Hello ";
$msg .= "World!";

echo $msg . PHP_EOL;

var_dump(0 == "0");
var_dump(0 === "0");

var_dump(0 == "");
var_dump(0 === "");

var_dump(false == "");
var_dump(false === "");

var_dump(null == "");
var_dump(null === "");

var_dump(null == false);
var_dump(null === false);


var_dump(2 <=> 4);
var_dump(2 <=> 2);
var_dump(2 <=> 1);
