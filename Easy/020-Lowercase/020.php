<?php
/*
 *  2016-08-12
 *  CodeEval Challenge - Easy
 *  Lowercase
 */

$input = fopen($argv[1], 'r');

while (!feof($input)) {
    echo strtolower(trim(fgets($input))) . PHP_EOL;
}
fclose($input);
