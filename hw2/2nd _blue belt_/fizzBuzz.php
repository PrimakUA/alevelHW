<?php
fwrite(STDOUT, "Enter number 1: ");
$number1 = trim(fgets(STDIN));
fwrite(STDOUT, "Enter number 2: ");
$number2 = trim(fgets(STDIN));
fwrite(STDOUT, "Enter number 3: ");
$number3 = trim(fgets(STDIN));

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

    echo $result . " ";
}
