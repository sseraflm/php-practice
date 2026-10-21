<?php

$hash1 = password_hash('secret', PASSWORD_DEFAULT);
$hash2 = password_hash('secret', PASSWORD_DEFAULT);


echo $hash1 . PHP_EOL;
echo $hash2 . PHP_EOL;
var_dump($hash1 === $hash2);


var_dump(password_verify('secret1', $hash1));
