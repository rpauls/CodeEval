<?php
/*
 *  2016-08-12
 *  CodeEval Challenge - Easy
 *  SumOfIntegerFromFile
 */

$input = fopen($argv[1], 'r');
$r = 0;
while (!feof($input)) {
    $r += trim(fgets($input));
}
echo $r . PHP_EOL;
fclose($input);
