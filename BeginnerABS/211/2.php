<?php

$s1 = trim(fgets(STDIN));
$s2 = trim(fgets(STDIN));
$s3 = trim(fgets(STDIN));
$s4 = trim(fgets(STDIN));

$a = [$s1, $s2, $s3, $s4];
echo count(array_unique($a)) === 4 ? 'Yes' : 'No', PHP_EOL;
