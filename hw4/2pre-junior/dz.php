<?php


$arrayStrings = [
    "Indicate the registration medical document for the patient, who 21.02. was addressed to the doctor with diagnosis ARVD for the first time in this year:",
    "The statistical coupon is to be filled in and it is necessary to deliver on a sign (+)",
    "The statistical coupon for registration of final diagnosis is not necessary",
    "The statistical coupon is to be filled in, but a sign (+) is not necessary to be put in",
    "It is necessary to fill in the emergency notice on a case of a contagion",
    "The necessary registration form is not indicated",
    "qwerty123456qwerty"
];

getSymbolSum($arrayStrings);

function getSymbolSum(array $array)
{
    foreach ($array as $value) {
        echo "<br>" . "В строке:" . $value . "<br>" . "<br>";
        foreach (count_chars($value, 1) as $i => $val) {
            echo "\"", chr($i), "\" " . ' - ' . 'повторяется' . $val . ' шт.' . '<br>';
        }
    }

}