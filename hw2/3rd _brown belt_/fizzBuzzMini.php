<?php
fwrite(STDOUT, "Enter number 1: ");
$fizz = trim(fgets(STDIN));
fwrite(STDOUT, "Enter number 2: ");
$buzz = trim(fgets(STDIN));
fwrite(STDOUT, "Enter number 3: ");
$target = trim(fgets(STDIN));
for ($i = 1; $i <= $target; $i++) {
    echo ($i % $buzz == 0 && $i % $fizz == 0) ? 'FB ': (($i % $fizz == 0) ? 'F ': (($i % $buzz == 0) ? 'B ' : $i . ' '));
}
