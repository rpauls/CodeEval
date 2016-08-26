<?php
/*
 *  2016-08-26
 *  CodeEval Challenge - Moderate
 *  Trailing String
 */

$input = fopen($argv[1], 'r');
while (!feof($input)) {
    $expl = explode(',', trim(fgets($input)));

    $s = strpos($expl[0], $expl[1]);
    $l = $s + strlen($expl[1]);

    echo (($s !== false && $l === strlen($expl[0])) ? '1' : '0') . PHP_EOL;
}
fclose($input);
