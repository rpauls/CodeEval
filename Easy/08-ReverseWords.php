<?php
/*
 *  2016-08-11
 *  CodeEval Challenge - Easy
 *  Reverse Words
 */

$input = fopen($argv[1], 'r');

while (!feof($input)) {
    echo implode(' ', array_reverse( explode(' ', trim(fgets($input))) ) ) . PHP_EOL;
}
fclose($input);
