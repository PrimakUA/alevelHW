<?php


$SPECIAL = ['S', 'P','E','C','I','A','L'];


function SkillDiv($nameOfSkills, $sumOfSkills, $maxScore) {
$groupMembers   = count($nameOfSkills);
$maxSum         = $sumOfSkills;
$maxValue 		= $maxScore;

$groups 		= array();
$member         = 0;

/*
Проверяем наполняемый массив $groups. Если сумма элементов менее $sumOfSkills, разбрасываем остаток между элементами массива $groups. 
*/
while((array_sum($groups) != $maxSum)) {
    $res = rand(1, intval($maxSum/rand(intval($maxSum/$maxValue), $maxSum))); 
    $groups[$member] = $res;
	    if(++$member == $groupMembers) {
	        $member  = 0;
	    }
}
/*
Объединяем полученный массив с массивом $SPECIAL (его содержимое станет ключами) и получаем новый массив $resultArray с соответствием названиями скилов и уровней.
*/
$resultArray = array_combine($nameOfSkills, $groups);
return $resultArray;
}

/*
Вызов функции SkillDiv. В качестве параметров передаем массив с наименованием скилов, максимальное суммарное значение уровня скилов на группу и максимально-допустимое значение одного скила.
*/
print_r(SkillDiv($SPECIAL, 40, 10));
