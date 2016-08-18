<?php
/*
 *  2016-08-12
 *  CodeEval Challenge - Easy
 *  Sum Of Digits
 */

$input = fopen($argv[1], 'r');
while (!feof($input)) {
    echo array_sum( str_split( trim(fgets($input)) ) ) . PHP_EOL;
}
fclose($input);
