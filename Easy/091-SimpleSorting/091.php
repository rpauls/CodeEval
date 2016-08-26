<?php
/*
 *  2016-08-15
 *  CodeEval Challenge - Easy
 *  Simple Sorting
 */

$input = fopen($argv[1], 'r');
while (!feof($input)) {
    $exploded = explode(' ', trim(fgets($input)) );
    sort($exploded);

    echo implode(' ', $exploded) . PHP_EOL;
}
fclose($input);
