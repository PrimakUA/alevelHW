<?php

$fileSource = 'fileread.txt';
$fileTarget = 'filewrite.txt';

$fileSourceData = readFileSource($fileSource);

writeFileTarget($fileTarget, $fileSourceData);

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

function writeFileTarget(string $fileName, array $data)
{
    $file = fopen($fileName, 'w');
    for ($i = 0; $i < count($data); $i++) {
        if ($i % 2 == 0) {
            fwrite($file, $data[$i]);
        }

    }

    fclose($file);
}

?>