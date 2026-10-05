<?php

declare(strict_types=1);

$formUser = $_POST['user'] ?? '';
$formScore = $_POST['score'] ?? '';

echo htmlspecialchars($formUser) . PHP_EOL;
echo htmlspecialchars($formScore) . PHP_EOL;
