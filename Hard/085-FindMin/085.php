<?php
/*
 *  2016-08-30
 *  CodeEval Challenge - Hard
 *  Find Min
 */

// DEBUG
$input = fopen('./input.txt', 'r');
// PROD
// $input = fopen($argv[1], 'r');
while (!feof($input)) {
    $expl = explode(',', trim(fgets($input)));
    $x = 0;



    echo $x . PHP_EOL;

}
fclose($input);
