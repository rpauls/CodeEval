<?php
/*
 *  2016-08-30
 *  CodeEval Challenge - Easy
 *  Real Fake
 */

// DEBUG
// $input = fopen('./input.txt', 'r');
// PROD
$input = fopen($argv[1], 'r');
while (!feof($input)) {
    $expl = explode(' ', trim(fgets($input)));
    $o = '';
    $nums = array();

    foreach ($expl as $val) {
        $nums[] = str_split($val);
    }

    foreach ($nums as $key => $val) {
        foreach ($val as $i => $v) {
            if ($i % 2 === 0) {
                $nums[$key][$i] = $v * 2;
            } else {
                $nums[$key][$i] = intval($v);
            }
        }

        $nums[$key] = array_sum($nums[$key]);
    }

    if (array_sum($nums) % 10 == 0) {
        $o = 'Real';
    } else {
        $o = 'Fake';
    }

    echo $o . PHP_EOL;

}
fclose($input);
