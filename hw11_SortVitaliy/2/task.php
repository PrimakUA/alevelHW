<?php

/**
 * @param array $someRandomArray
 * @param $itNum
 * @return array
 */
function advancedSortArray(array $someRandomArray, &$itNum): array
{
//    $flag = 0;
//
//    do {
//        $isSorted = false;
//
//        for ($i = 0; $i < count($someRandomArray) - 1; $i++) {
//
//            $prev = $someRandomArray[$i];
//            $next = $someRandomArray[$i + 1];
//
//            if ($prev > $next) {
//
//                $someRandomArray[$i] = $next;
//                $someRandomArray[$i + 1] = $prev;
//                $flag = $i;
//
//                if (!$isSorted) {
//                    $isSorted = true;
//                }
//            }
//
//            $itNum++;
//        }
//
//        for ($i = $flag; $i > 0; $i--) {
//
//            $prev = $someRandomArray[$i];
//            $next = $someRandomArray[$i - 1];
//
//            if ($prev < $next) {
//
//                $someRandomArray[$i] = $next;
//                $someRandomArray[$i - 1] = $prev;
//                $flag = $i;
//
//                if (!$isSorted) {
//                    $isSorted = true;
//                }
//            }
//
//            $itNum++;
//        }
//
//    } while ($isSorted);

    for ($i = 0; $i < count($someRandomArray); $i++){
    for ($j = $i + 1; $j < count($someRandomArray); $j++) {
        if ($someRandomArray[$i] > $someRandomArray[$j]) {
            $temp = $someRandomArray[$j];
            $someRandomArray[$j] = $someRandomArray[$i];
            $someRandomArray[$i] = $temp;
            $itNum++;
        }
    }
}

    return $someRandomArray;

}

;

//for ($i = 0; $i < count($someRandomArray); $i++){
//    for ($j = $i + 1; $j < count($someRandomArray); $j++) {
//        if ($someRandomArray[$i] > $someRandomArray[$j]) {
//            $temp = $someRandomArray[$j];
//            $someRandomArray[$j] = $someRandomArray[$i];
//            $someRandomArray[$i] = $temp;
//            $itNum++;
//        }
//    }
//}