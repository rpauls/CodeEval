<?php
/*
 *  2016-08-18
 *  CodeEval Challenge - Easy
 *  Big Digits
 */

$input = fopen($argv[1], 'r');
while (!feof($input)) {
    $num = explode(' ', trim(fgets($input)) );

    $occurence  = array_count_values($num);
    $filtered = array_filter($occurence, function($n) {
        return 1 === $n;
    });
    $unique = array_keys($filtered);

    if (0 === count($unique)) {
        echo '0' . PHP_EOL;
    } else {
        sort($unique);
        $out = array_flip($num);
        $out = $out[array_shift($unique)] + 1;
        echo $out . PHP_EOL;
    }
}
fclose($input);
