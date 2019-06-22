<?php
$fileTarget = 'fizzBuzzRes.txt';
$fizzBuzzEnterFile = 'fizzBuzz.txt';

readFileSource($fizzBuzzEnterFile, $fileTarget);

echo 'done!';

function fizzBuzz(string $number1, string $number2, string $number3)
{
    for ($i = 1; $i <= $number3; $i++) {

        $result = '';

        if ($i % $number1 == 0) {
            $result .= 'F';
        }

        if ($i % $number2 == 0) {
            $result .= 'B';
        }

        if (!$result) {
            $result = $i;
        }

    }
    return $result;
}


function readFileSource(string $fileName, string $fileTarget)
{
    $res = [];
    $file = fopen($fileName, 'r');
    $sourceArray = [];
    while (!feof($file)) {
        $sourceArray[] = fgets($file);
    }
    fclose($file);
    foreach ($sourceArray as $key) {

        $oneString = explode(" ", $key);
        $number1 = trim($oneString[0]);
        $number2 = trim($oneString[1]);
        $number3 = trim($oneString[2]);

        $res[] = fizzBuzz($number1, $number2, $number3);
        print_r($res);


    }

    $fileWrite = fopen($fileTarget, 'w');
    for ($i = 0; $i < count($res); $i++) {
        fwrite($fileWrite, $res[$i]);
    }

    fclose($fileWrite);
}