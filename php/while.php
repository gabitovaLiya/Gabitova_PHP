<?php

echo "Введите число: ";
$userNumber = (int)trim (fgets(STDIN));


for ($i = 1; $i <= 10; $i++) {
    echo "$userNumber * $i = " . $userNumber * $i . "\n";

}