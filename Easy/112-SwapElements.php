<?php
/*
 *  2016-08-24
 *  CodeEval Challenge - Easy
 *  Swap Elements
 */

$input = fopen($argv[1], 'r');
while (!feof($input)) {
    $expl = explode(' : ', trim(fgets($input)));
    $expl[0] = explode(' ', $expl[0]);
    $expl[1] = explode(', ', $expl[1]);

    foreach ($expl[1] as $swap) {
        $swap = explode('-', $swap);
        $s1 = $expl[0][$swap[0]];
        $s2 = $expl[0][$swap[1]];

        $expl[0][$swap[0]] = $s2;
        $expl[0][$swap[1]] = $s1;
    }

    $expl[0] = implode(' ', $expl[0]);

    echo $expl[0] . PHP_EOL;
}
fclose($input);
