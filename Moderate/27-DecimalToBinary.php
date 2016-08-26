<?php
/*
 *  2016-08-12
 *  CodeEval Challenge - Moderate
 *  Decimal To Binary
 */
$input = fopen($argv[1], 'r');


while (!feof($input)) {
    $trimmed = trim(fgets($input));

    echo decbin($trimmed).PHP_EOL;

}
fclose($input);



