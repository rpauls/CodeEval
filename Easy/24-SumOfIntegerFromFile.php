<?php
/*
 *  2016-08-12
 *  CodeEval Challenge - Easy
 *  SumOfIntegerFromFile
 */

$input = fopen($argv[1], 'r');

while (!feof($input)) {
    $trimmed = trim(fgets($input));

    echo fib($trimmed) . "\n";
}
fclose($input);


?>
