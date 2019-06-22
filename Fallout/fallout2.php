<?php


$SPECIAL = ['S', 'P','E','C','I','A','L'];



$groupMembers   = count($SPECIAL);
$maxSum             = 40;
$maxValue       = 10;

$groups             = array();
$member              = 0;

/*
Проверяем наполняемый массив. Если сумма элементов менее 40, разбрасываем остаток между элементами массива $groups.
*/
while((array_sum($groups) != $maxSum)) {
    $res = rand(1, $maxSum/rand(($maxSum/$maxValue), $maxSum));
    $groups[$member] = $res;
    if(++$member == $groupMembers) {
        $member  = 0;
    }
}
/*
Объединяем полученный массив с массивом $SPECIAL (его содержимое станет ключами) и получаем новый массив $resultArray с соответствием названиями скилов и уровней.
*/
$resultArray = array_combine($SPECIAL, $groups);
print_r($resultArray);