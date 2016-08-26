<?php
/*
 *  2016-08-15
 *  CodeEval Challenge - Easy
 *  Multiplay Lists
 */

$input = fopen($argv[1], 'r');
// $trimmed = '13 4 15 1 15 5 | 1 4 15 14 8 2';
while (!feof($input)) {
    $trimmed= trim(fgets($input));
    $exploded = explode(' | ', $trimmed);

    $exploded[0] = explode(' ', $exploded[0]);
    $exploded[1] = explode(' ', $exploded[1]);

    $o = array();

    for($i=0; $i < count($exploded[0]); $i++) {

        array_push($o, $exploded[0][$i] * $exploded[1][$i]);

    }

    echo implode(' ', $o) . PHP_EOL;

}
fclose($input);


 
