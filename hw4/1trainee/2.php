<?php
$names = [
    'LiamNoah',
    'WilliamJamesOliverson',
    'Benjamin',
    'Elijah',
    'Lucas',
    'Mason',
    'Logan',
    'Alexander',
    'Ethan',
    'Jacob',
    'Michael',
    'Daniel',
    'Henry',
    'Jackson',
    'Sebastian',
    'Aiden',
    'Matthew',
    'SamuelDavidJoseph',
    'Carter',
    'Owen',
    'Wyatt',
    'John',
    'Jack',
    'Luke',
    'Jayden'];

function getMaxStringFromArray(array $array)
{
    $lengthArr = array_map('strlen', $array);
    $arr = array_combine($array, $lengthArr);
    $max = max(array_values($arr));
    $key = array_search($max, $arr);

    return 'Самая длинная строка - ' . $key . '. ЕЕ длинна - ' . $max . ' символ.';
}

echo getMaxStringFromArray($names);

