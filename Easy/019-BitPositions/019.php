<?php
/*
 *  2016-08-12
 *  CodeEval Challenge - Easy
 *  Bit Positions
 */

$input = fopen($argv[1], 'r');

while (!feof($input)) {
    $exploded = explode(',', trim( fgets($input)) );
    $bit_split = str_split( strrev(decbin($exploded[0])) );

    if ($bit_split[$exploded[1]-1] == $bit_split[$exploded[2]-1]) {
        echo 'true'. PHP_EOL;
    } else {
        echo 'false'. PHP_EOL;
    }
}
fclose($input);
