<?php
/*
 *  2016-08-12
 *  CodeEval Challenge - Easy
 *  Hex To Decimal
 */

$input = fopen($argv[1], 'r');

while (!feof($input)) {

    echo hexdec(trim(fgets($input))) . "\n";
}
fclose($input);

?>
