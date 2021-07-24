<?php

$s = trim(fgets(STDIN));

$len = strlen($s);


$dp = [0, 0, 0, 0, 0, 0, 0, 0,];

$target_str = 'chokudai';

$result = '0';

for ($i = 0; $i < $len; $i++) {
    $index = strpos($target_str, $s[$i]);

    if ($index === 0) {
        $dp[$index] += 1;
        continue;
    }

    if ($index === (strlen($target_str) - 1)) {
        $result = bcadd($result, $dp[$index - 1]);
        continue;
    }

    $dp[$index] = bcadd($dp[$index], $dp[$index - 1]);
}


echo bcmod($result, (10 ** 9 + 7)), PHP_EOL;
