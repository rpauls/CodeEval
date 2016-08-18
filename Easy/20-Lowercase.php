<?php
/*
 *  2016-08-12
 *  CodeEval Challenge - Easy
 *  Lowercase
 */

$input = fopen($argv[1], 'r');

while (!feof($input)) {
    $trimmed = strtolower(trim(fgets($input)));


    echo $trimmed . "\n";
}
fclose($input);
?>
