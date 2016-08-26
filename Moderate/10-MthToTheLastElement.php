<?php
/*
 *  2016-08-12
 *  CodeEval Challenge - Moderate
 *  Mth To The Last Element
 */
$input = fopen($argv[1], 'r');

while (!feof($input)) {
    $trimmed = trim(fgets($input));
    $exploded = explode(' ', $trimmed);
    $m = $exploded[count($exploded)-1];
    unset($exploded[count($exploded)-1]);

    echo $exploded[count($exploded) - ($m) ].PHP_EOL;

}
fclose($input);



