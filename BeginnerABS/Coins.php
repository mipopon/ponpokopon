<?php
fscanf(STDIN, '%d', $a);
fscanf(STDIN, '%d', $b);
fscanf(STDIN, '%d', $c);
fscanf(STDIN, '%d', $x);
$coins = [50, 100, 500];


$res = 0;
foreach (range(0, $a) as $valA) {
	foreach (range(0, $b) as $valB) {
		foreach (range(0, $c) as $valC) {
			$sum = $valA * 500 + $valB * 100 + $valC * 50;
			if ($sum === $x) {
				$res++;
			}
		}
	}
}
echo $res , PHP_EOL;