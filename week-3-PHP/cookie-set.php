<?php

setcookie('theme', 'dark', time() + 86400);
echo "set";

setcookie('theme2', 'light', [
    'expires' => time() + 86400,
    'httponly' => true,
    'samesite' => 'Lax',
]);
