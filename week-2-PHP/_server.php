<?php
// echo $_SERVER['REQUEST_METHOD'] . PHP_EOL . $_SERVER['HTTP_USER_AGENT'] . PHP_EOL . $_SERVER['REMOTE_ADDR'] . PHP_EOL . $_SERVER['SCRIPT_NAME'];


$file = $_FILES['uploadedFile'];
print_r($file);
