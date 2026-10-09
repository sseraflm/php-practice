<?php

$emails = [
    "green@gmail.com",
    "red",
    "no-domain@",
    "spaces in@gmail.com",
    "user@localhost",
];

foreach ($emails as $email) {
    echo $email . " => ";
    var_dump(filter_var($email, FILTER_VALIDATE_EMAIL));
}


$values = ["5", "10", "11", "0", "-1", "abc", "5.5", "007", " 7 "];

foreach ($values as $value) {
    $result = filter_var(
        $value,
        FILTER_VALIDATE_INT,
        ['options' => ['min_range' => 0, 'max_range' => 10]]
    );

    if ($result !== false) {
        echo $value . " => valid" . PHP_EOL;
    } else {
        echo $value . " => invalid" . PHP_EOL;
    }
}
