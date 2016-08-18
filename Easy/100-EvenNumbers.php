<?php
/*
 *  2016-08-16
 *  CodeEval Challenge - Easy
 *  Even Numbers
 */

$input = fopen($argv[1], 'r');
while (!feof($input)) {
    echo ((trim(fgets($input)) % 2 == 0) ? 1 : 0) . PHP_EOL;
}
fclose($input);
