<?php

$users = [
    "user1" => "password1",
    "user2" => "password2",
    "user3" => "password3"
];

$path = __DIR__ . '/users.json';


$encoded = json_encode($users, JSON_PRETTY_PRINT);

file_put_contents($path, $encoded);

$loaded = json_decode(file_get_contents($path), true);
print_r($loaded);
