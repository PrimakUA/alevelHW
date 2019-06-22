<?php
// считаем сумму чисел кратных 5
define("LOOP_LIMIT", 100);
define("LOOP_START", 0);
define('INTERVAL', 5);
define("MESSAGE", 'Sum');

$arr = range(LOOP_START, LOOP_LIMIT, INTERVAL);

echo 'Sum of multiples ' . INTERVAL . ' is: ' . array_sum($arr) . '<br>';

//Считаем колличество чисел кратных 5

$arr2 = range(LOOP_START, LOOP_LIMIT, INTERVAL);
unset($arr2[0]);

echo 'Number of numbers ' . INTERVAL . ' is: ' . count($arr2) . '<br>';

//считаем сумму чисел кратных 5 (как по мне более правильный вариант чем без форыча)

$array3 = range(LOOP_START, LOOP_LIMIT);
foreach ($array3 as $value) {
    if ($value > 0 && $value % INTERVAL == 0) {
        $arrayy3[] = $value;
    }
}
echo 'Sum of multiples  ' . INTERVAL . ' is: ' . array_sum($arrayy3) . '<br>';

//Считаем колличество чисел кратных 5(как по мне более правильный вариант чем без форыча)

$array4 = range(LOOP_START, LOOP_LIMIT);
foreach ($array4 as $value) {
    if ($value > 0 && $value % INTERVAL == 0) {
        $arrayy4[] = $value;
    }
}
echo 'Number of numbers ' . INTERVAL . ' is: ' . count($arrayy4) . '<br>';