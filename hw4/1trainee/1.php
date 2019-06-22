<?php
$array = [1, 2, 3, 4, 5, 44, 7, 3, 6, 5, 8, 88, 6, 5, 4, 91, 6];



function getMaxNumberFromArray(array $arr)
{
    for ($i = 0; $i < count($arr); $i++){
        for ($j = $i + 1; $j < count($arr); $j++) {
            if ($arr[$i] > $arr[$j]) {
                $temp = $arr[$j];
                $arr[$j] = $arr[$i];
                $arr[$i] = $temp;
            }
        }
    }

    return end($arr);
}

echo 'Максимальное значение - ' . getMaxNumberFromArray($array);