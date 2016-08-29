<?php
/*
 *  2016-08-29
 *  CodeEval Challenge - Easy
 *  Delta Time
 */

 // DEBUG
 // $input = fopen('./input.txt', 'r');
 // PROD
$input = fopen($argv[1], 'r');
while (!feof($input)) {
    $expl = explode(' ', trim(fgets($input)));
    $o = '';

    foreach ($expl as $key => $val) {
        $expl[$key] = decode($val);
    }

    rsort($expl, SORT_REGULAR);

    foreach ($expl as $key => $val) {
        $o .= encode($val) . ' ';
    }

    echo trim($o) . PHP_EOL;
}
fclose($input);

function decode($t)
{
    list($h, $m, $s) = explode(':', $t);

    $time = 0;

    $time += $h * 3600;
    $time += $m * 60;
    $time += $s;

    return $time;
}

function encode($t)
{
    $t = abs(intval($t));

    $time = gmdate('H:i:s', $t);

    return $time;
}
