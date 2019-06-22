<?php

function deriban($s)
{
    list($fizz, $b, $n) =
        array_map('intval', explode(' ', $s));
    return [$fizz, $b, $n];
}

function fizzbuzz($fb_source)
{
    $s = '';
    list($f, $b, $n) = $fb_source;
    for ($i = 1; $i < $n; $i++) {
        $s .= !($i % $f) ? 'F' : '';
        $s .= !($i % $b) ? 'B' :
            (($i % $f) ? $i : '');
        $s .= ' ';
    }
    return rtrim($s) . PHP_EOL;
}


$source = file("fizzBuzz.txt");
$arr = array_map('deriban', $source);
$results = array_map('fizzbuzz', $arr);
array_map('print_r', $results);