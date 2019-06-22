<?php

$arrayStrings = [
    "Indicate the registration medical document for the patient, who 21.02. was addressed to the doctor with diagnosis ARVD for the first time in this year:",
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
    "It is necessary to fill in the emergency notice on a case of a contagion",
    "The necessary registration form is not indicated",
    "qwerty123456qwerty"
];


foreach ($arrayStrings as $key => $value) {
    $firstArr[] = iconv_strlen($value) . PHP_EOL;
}
foreach ($arrayStringsTwo as $key => $value) {
    $secondArr[] = iconv_strlen($value) . PHP_EOL;
}

$first = array_diff($firstArr, $secondArr);
$second = array_diff($secondArr, $firstArr);

foreach ($first as $key => $value) {
    $firstKey = ++$key;
    $firstValue = (int)$value;
}
foreach ($second as $key => $value) {
    $secondKey = ++$key;
    $secondValue = (int)$value;
}
if ($firstValue > $secondValue) {
    $resOne = $firstValue - $secondValue;
    echo 'In array number one, string ' . $firstKey . ' different on ' . $resOne . ' symbols. ';
} else {
    $resTwo = $secondValue - $firstValue;
    echo 'In array number two, string ' . $secondKey . ' different on ' . $resTwo . ' symbols. ';

}