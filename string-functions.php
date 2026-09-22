<?php
$standard = "blue";
$polishChar = "KRAKÓW";
$emoji = "🚀";
$empty = "";
$spaces = "    hello world    ";
$mixed = "   \n some input\t  ";

var_dump(strlen($standard));
var_dump(strlen($polishChar));
var_dump(strlen($emoji));
var_dump(strlen($empty));

var_dump(mb_strlen($standard));
var_dump(mb_strlen($polishChar));
var_dump(mb_strlen($emoji));
var_dump(mb_strlen($empty));

var_dump(strtolower($polishChar));
var_dump(strtoupper($standard));

var_dump(mb_strtolower($polishChar));

var_dump(trim($spaces));
var_dump(trim($mixed));


// Clean and normalize input.

$email = " pSMiu@gmaiL.coM   ";
$pass = "  tŵO";

$fixEmail = trim(mb_strtolower($email));
$fixPass = trim($pass);

$emailLength = mb_strlen($fixEmail);
$passLength = mb_strlen($fixPass);

echo "The length of the email is: {$emailLength} and the length of the password is: {$passLength}";
