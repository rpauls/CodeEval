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
    list($t1, $t2) = explode(' ', trim(fgets($input)));

    $t1 = decode($t1);
    $t2 = decode($t2);

    $dt = $t1 - $t2;

    $dt = encode($dt);

    echo $dt . PHP_EOL;
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
