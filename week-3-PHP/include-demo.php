<?php

require_once __DIR__ . '/helpers.php';

echo greet("Chae") . PHP_EOL;
require_once __DIR__ . '/helpers.php';
include __DIR__ . '/missing.php';

echo 'Still there.';
