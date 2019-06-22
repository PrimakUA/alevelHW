<?php

$arrayStrings = [
    "rrrrrrrrrrrrrrrIndicate the registration medical document for the patient, who 21.02. was addressed to the doctor with diagnosis ARVD for the first time in this year:",
    "The statistical coupon is to be filled in and it is necessary to deliver on a sign (+)",
    "rrrrrrrrrrrrrrrIndicate the registration medical document for the patient, who 21.02. was addressed to the doctor with diagnosis ARVD for the first time in this year:",
    "The statistical coupon for registration of final diagnosis is not necessaryjj",
    "The statistical coupon is to be filled in, but a sign (+) is not necessary to be put in",
    "It is necessary to fill in the emergency notice on a case of a contagion",
    "The necessary registration form is not indicated",
    "qwerty123456qwerty",
    "The statistical coupon for registration of final diagnosis is not necessary",
    "The statistical coupon is to be filled in, but a sign (+) is not necessary to be put in",
    "It is necessary to fill in the emergency n6666666666666otice on a case of a contagion",
    "The statistical coupon for registration of final diagnosis is not necessary",
    "The statistical coupon is to be filled in, but a sign (+) is not necessary to be put in",
    "It is necessary to fill in the emergency n6666666666666otice on a case of a contagion"
];

$arrayStringsTwo = [
    "Indicate the registration medical document for the patient, who 21.02. was addressed to the doctor with diagnosis ARVD for the first time in this year:",
    "The statistical coupon is to be filled in and it is necessary to deliver on a sign (+)",
    "Indicate the registration medical document for the patient, who 21.02. was addressed to the doctor with diagnosis ARVD for the first time in this year:",
    "The statistical coupon for registration of final diagnosis is not necessary",
    "The statistical coupon is to be filled in, but a sign (+) is not necessary to be put in",
    "It is necessary to fill in the emergency n6666666666666otice on a case of a contagion",
    "The necessary registration form is not indicated",
    "qwerty123456qwerty",
    "The statistical coupon is to be filled in and it is necessary to deliver on a sign (+)",
    "The statistical coupon for registration of final diagnosis is not necessaryjj",
    "The statistical coupon is to be filled in, but a sign (+) is not necessary to be put in",
];

//Проверяем являеются ли входные данные массивами
$itIsArr = is_array($arrayStrings) && is_array($arrayStringsTwo);
if ($itIsArr) {
//Проверяем количество элементов в массивах
    $firstArrayLenghtIn = count($arrayStrings);
    $secondArrayLenghtIn = count($arrayStringsTwo);

//Проверяем какой из массивов длиннее и обрезаем его по колличеству элементов для равного колличества с коротшим
    if ($firstArrayLenghtIn > $secondArrayLenghtIn) {
        $arrayStrings = array_slice($arrayStrings, 0, $secondArrayLenghtIn);
    } elseif ($secondArrayLenghtIn > $firstArrayLenghtIn) {
        $arrayStringsTwo = array_slice($arrayStringsTwo, 0, $firstArrayLenghtIn);
    }
//Проверяем количество элементов в массивах после выравнивания
    $firstArrayLenght = count($arrayStrings);
    $secondArrayLenght = count($arrayStringsTwo);

//перебираем каждый массив и создаем новые массивы, но уже с инфой о длинне строк
    foreach ($arrayStrings as $key => $value) {
        $firstArr[] = iconv_strlen($value);
    }
    foreach ($arrayStringsTwo as $key => $value) {
        $secondArr[] = iconv_strlen($value);
    }
//сравниваем длынны строк в каждом из массивов, и от большего значения отнимаем меньшее, а если длинна строк
// одинаковая то мы присваиваем значение ноль текущему элементу новосозданого массива
    for ($i = 0; $i < $firstArrayLenght; $i++) {
        if ($firstArr[$i] > $secondArr[$i]) {
            $newArrayRes[] = $firstArr[$i] - $secondArr[$i];
        } elseif ($firstArr[$i] < $secondArr[$i]) {
            $newArrayRes[] = $secondArr[$i] - $firstArr[$i];
        } else $newArrayRes[] = 0;
    }

//ищем наибольшее расхождение
    $maximumStr = max($newArrayRes);

//перебираем массив с информацией о разнице в длиннах строк
    foreach ($newArrayRes as $key => $value) {
        //по найденому расхождению ищем ключ, по которому находитса данная строка, или строки
        if ($maximumStr == $newArrayRes[$key]) {
            //создаем переменную с номером ключа, и увеличиваем на один для корректного отображения номера строки
            $keyy = $key + 1;
//и выясняем в каком массиве строка длиннее и выводим результат с указанием массива, номером строки, и разницей в длинне
            if ($firstArr[$key] > $secondArr[$key]) {
                echo 'In array number one, string ' . $keyy . ' different on ' . $maximumStr . ' symbols. ' . PHP_EOL;

            } else echo 'In array number two, string ' . $keyy . ' different on ' . $maximumStr . ' symbols. ' . PHP_EOL;

        }
    }
} else echo 'FALSE, it is not array!!!';