<?php

$hello = "Hello world!!!"; // Это переменная типа "Строка"

$a = 2;
$b = 2; # Это переменная типа "Число"
$c = $a + $b;
/*
 Разбираемся с комментариями и переменными
первое - строка
второе - целое число
*/

$half = 0.2; // Переменная типа "Дробное число"

$moreThan = $a > $half; // Переменная типа "Boolean" (может быть либо true, либо false

echo "Введите первое число: ";
$userNumber1 = (int)trim (fgets(STDIN));

echo "Введите второе число: ";
$userNumber2 = (int)trim (fgets(STDIN));

echo "Введите оператор: ";
$userOperator = trim (fgets(STDIN));

if ($userOperator == "+") {
    echo $userNumber1 + $userNumber2;
    die ();
}

if ($userOperator == "-") {
    echo $userNumber1 - $userNumber2;
    die ();
}

if ($userOperator == "*") {
    echo $userNumber1 * $userNumber2;
    die ();
}

if ($userOperator == "/") {
    echo $userNumber1 / $userNumber2;
    die ();
}
echo "Некорректно введен оператор";