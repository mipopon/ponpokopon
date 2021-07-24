<?php

fscanf(STDIN, "%d %d", $n, $k);

$c = fgets(STDIN);

$c_map = [];

for ($i = 0; $i < $k; $i++) {
    $c_map[$c[$i]] = isset($c_map[$c[$i]]) ? ++$c_map[$c[$i]] : 1;
}

$count = count($c_map);

for ($j = $k; $j < $n; $j++) {

    if ($c_map[$c[$j - $k]] > 1) {
        --$c_map[$c[$j - $k]];
    } else {
        unset($c_map[$c[$j - $k]]);
    }

    $c_map[$c[$j]] = isset($c_map[$c[$j]]) ? ++$c_map[$c[$j]] : 1;
    var_dump($c_map);
    $count = max($count, count($c_map));
}

echo $count, PHP_EOL;
