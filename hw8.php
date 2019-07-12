<?php
//Сздаем рандомный массив рандомной размерности до 30 элементов и перемешиваем его
$randomEndValue = rand(10, 37);
$arr = range(7, $randomEndValue);
shuffle($arr);
//Создаем функцию которая сортирует входящий массив методом вставки
function arrayInsertSort($array)
{
    $sumElements = count($array);
    for ($i = 0; $i < $sumElements; $i++) {
        $rightNumber = $array[$i];
        $leftNumber = $i - 1;

        while ($leftNumber >= 0 && $array[$leftNumber] > $rightNumber) {
            $array[$leftNumber + 1] = $array[$leftNumber];
            $leftNumber--;
        }

        $array[++$leftNumber] = $rightNumber;
    }
    return $array;
}
//выводим на экран колличество элементов входящего массива, его первоначальный вид, и отсортированый результат
echo "Number of elements in array - " . count($arr) . ".". PHP_EOL;
echo "Entrance array is: " . PHP_EOL;
for ($m = 0; $m < count($arr); $m++) {
    echo $arr[$m] . PHP_EOL;
}

echo "Sorted array is: " . PHP_EOL;
for ($m = 0; $m < count(arrayInsertSort($arr)); $m++) {
    echo arrayInsertSort($arr)[$m] . PHP_EOL;
}


