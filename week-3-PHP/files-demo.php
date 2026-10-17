<?php

file_put_contents(__DIR__ . '/notes.txt', 'First line' . PHP_EOL, FILE_APPEND);


$path = __DIR__ . '/notes.txt';
$path2 = __DIR__ . '/none.txt';


if (file_exists($path)) {
    echo file_get_contents($path);
} else {
    echo 'file not found.' . PHP_EOL;
}

$handle = fopen($path, 'a');
fwrite($handle, "Written but longer" . PHP_EOL);
fclose($handle);


$handle = fopen($path, 'r');

while (($line = fgets($handle)) !== false) {
    echo trim($line) . PHP_EOL;
}

fclose($handle);

$result = file_put_contents(__DIR__ . '/DOES-NOT-EXIST/folder.txt', "test");
var_dump($result);

if ($result === false) {
    echo 'Write failed.' . PHP_EOL;
}
