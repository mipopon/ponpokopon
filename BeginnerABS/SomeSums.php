<?php
fscanf(STDIN, '%d %d %d', $n, $a, $b);

$res = 0;
foreach(range(1, $n) as $num) {
	$sumOfEach = 0;
	foreach(range(0,strlen($num)) as $val) {
		$sumOfEach += $val;
	}
	if($sumOfEach > $a && $sumOfEach < $b) {
		$res += $sumOfEach;
	}
}
echo $res , PHP_EOL;
