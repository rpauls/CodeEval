<?php
/*
 *  2016-08-12
 *  CodeEval Challenge - Easy
 *  Unique Elements
 */

$input = fopen($argv[1], 'r');

while (!feof($input)) {
    echo implode(',', array_unique( explode(',', trim(fgets($input)) ), SORT_NUMERIC)).PHP_EOL;
}
fclose($input);
