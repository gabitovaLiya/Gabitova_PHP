<?php

echo "Введите количество выполнений: ";
$userNumber = (int)trim (fgets(STDIN));

if ($userNumber < 2) {

    echo "Число должно быть больше 2";
    die();
}

$first = 1;
$second = 1;

for ($i = 2; $i <= $userNumber; $i++) {

    $currentNumber = $first + $second;
    $second = $first;
    $first = $currentNumber;
}

echo $first."\n";