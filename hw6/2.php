<?php

$arrayStrings = [
    "rrrrrrrrrrrrrrrIndicate the registration medical document for the patient, who 21.02. was addressed to the doctor with diagnosis ARVD for the first time in this year:",
    "The statistical coupon is to be filled in and it is necessary to deliver on a sign (+)",
    "The statistical coupon for registration of final diagnosis is not necessaryjj",
    "The statistical coupon is to be filled in, but a sign (+) is not necessary to be put in",
    "It is necessary to fill in the emergency notice on a case of a contagion",
    "The necessary registration form is not indicated",
    "qwerty123456qwerty"
];

$arrayStringsTwo = [
    "Indicate the registration medical document for the patient, who 21.02. was addressed to the doctor with diagnosis ARVD for the first time in this year:",
    "The statistical coupon is to be filled in and it is necessary to deliver on a sign (+)",
    "The statistical coupon for registration of final diagnosis is not necessary",
    "The statistical coupon is to be filled in, but a sign (+) is not necessary to be put in",
    "It is necessary to fill in the emergency n6666666666666otice on a case of a contagion",
    "The necessary registration form is not indicated",
    "qwerty123456qwerty"
];

$firstArrayLenght = count($arrayStrings);
$secondArrayLenght = count($arrayStringsTwo);
if ($firstArrayLenght == $secondArrayLenght) {

    foreach ($arrayStrings as $key => $value) {
        $firstArr[] = iconv_strlen($value);
    }
    foreach ($arrayStringsTwo as $key => $value) {
        $secondArr[] = iconv_strlen($value);
    }

    for ($i = 0; $i < $firstArrayLenght; $i++) {
        if ($firstArr[$i] > $secondArr[$i]) {
            $newArrayRes[] = $firstArr[$i] - $secondArr[$i];
        } elseif ($firstArr[$i] < $secondArr[$i]) {
            $newArrayRes[] = $secondArr[$i] - $firstArr[$i];
        } else $newArrayRes[] = 0;
    }
    $maximumStr = max($newArrayRes);
    $arrayKey = array_search($maximumStr, $newArrayRes);
    $keyy = $arrayKey + 1;

    if ($firstArr[$arrayKey] > $secondArr[$arrayKey]) {
        echo 'In array number one, string ' . $keyy . ' different on ' . $maximumStr . ' symbols. ';

    } else echo 'In array number two, string ' . $keyy . ' different on ' . $maximumStr . ' symbols. ';

} else echo 'fail';
