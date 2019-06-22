<?php

for ($n = 1; $n <= 100; $n++) {
    if ($n == 1) {
        echo "начало <br>";
    }
    if ($n == 100) {
        echo "конец";
    }
    elseif ($n % 2){
        echo "$n &nbsp не четное <br>";
    }
    else echo "$n &nbsp четное <br>";
}