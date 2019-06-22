<?php

define('SIMPLE_NUMBER', 100);
define('MAX', 1000);
$primes = [];

for ($current_pointer = 1; $current_pointer <= MAX; $current_pointer++) {

    $prime = true;

    for ($divider = 2; $divider < $current_pointer; $divider++) {

        if ($current_pointer % $divider == 0) {
            $prime = false;
        }
    }
    if ($prime == true) array_push($primes, $current_pointer);
}


function get_sum(array $arr, $n)
{
    $sum = 0;
    for ($i = 0; $i <= $n; $i++) {
        $sum += $arr[$i];
    }
    return $sum;
}

echo 'Сумма первых ' . SIMPLE_NUMBER .  ' простых чисел = ' . get_sum($primes, SIMPLE_NUMBER);