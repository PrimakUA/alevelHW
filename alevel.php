<?php

$fileSource = 'fileread.txt';
$fileTarget = 'filewrite2.txt';
бе бе бе

$fileSourceData = readFileSource($fileSource);

$stringsLengthArray = calculateStrings($fileSourceData);

writeFileTarget($fileTarget, $fileSourceData, $stringsLengthArray);

echo 'done!';

function readFileSource(string $fileName)
{
    $file = fopen($fileName, 'r');
    $sourceArray = [];
    while (!feof($file)) {
        $sourceArray[] = fgets($file);
    }
    fclose($file);
    return $sourceArray;
}

function calculateStrings(array $strArray)
{
    $stringsLengthArray = [];
    for ($i = 0; $i < count($strArray); $i++) {
        $stringsLengthArray[] = mb_strlen(trim($strArray[$i]), 'UTF-8');
    }
    return $stringsLengthArray;
}

function writeFileTarget(string $fileName, array $strArray, array $strLengthArray)
{
    $strLengthSumm = 0;
    foreach ($strLengthArray as $strLength) {
        $strLengthSumm += $strLength;
    }
    $strLengthAvg = $strLengthSumm / count($strLengthArray);
    $file = fopen($fileName, 'w');
    for ($i = 0; $i < count($strArray); $i++) {
        if (mb_strlen(trim($strArray[$i]), 'UTF-8') > $strLengthAvg) {
            fwrite($file, $strArray[$i]);
        }

    }

    fclose($file);
}