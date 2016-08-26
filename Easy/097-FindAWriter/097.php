<?php
/*
 *  2016-08-16
 *  CodeEval Challenge - Easy
 *  Find A Writer
 */

$input = fopen($argv[1], 'r');
while (!feof($input)) {
    $exploded = explode('| ', trim(fgets($input)) );
    $explString = str_split($exploded[0]);
    $explNum = explode(' ', $exploded[1]);

    $o = '';

    $c = count($explNum);
    for ($i = 0; $i < $c; $i++) {
        $o .= $explString[$explNum[$i]-1];
    }

    echo $o. PHP_EOL;
}
fclose($input);
