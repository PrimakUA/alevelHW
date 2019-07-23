<?php

require_once 'task.php';

const LEN = 5;

$randomArray = range(1, LEN);

shuffle($randomArray);
shuffle($randomArray);
shuffle($randomArray);

$itNum = 0;

$sortedArray = sortArray($randomArray, $itNum);

sort($randomArray);

if ($randomArray === $sortedArray) {
    $message = ':-)) SORT SUCCESSFUL! To sort an array of ' . LEN . ' in length you needed ' . $itNum . ' iterations';
} else {
    $message = ':-(( SORT FAILED';
}

echo $message;