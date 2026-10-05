<?php
$amountEUR = 150.5;
$rates = [ // Rate per 1 euro.
    "USD" => 1.14,
    "CZK" => 24.36,
    "KRW" => 1542.94,
    "JPY" => 179.16,
];

if (!is_numeric($amountEUR) || $amountEUR < 0) {
    die("Invalid euro amount." . PHP_EOL);
};

foreach ($rates as $currency => $rate) {
    if (!is_numeric($rate) || $rate <= 0) {
        echo "Invalid exchange rate for {$currency}" . PHP_EOL;
        continue;
    }
    $converted = $amountEUR * $rate;
    echo sprintf("%.2f EUR = %.2f %s" . PHP_EOL, $amountEUR, $converted, $currency);
};
