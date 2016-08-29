<?php
/*
 *  2016-08-29
 *  CodeEval Challenge - Easy
 *  N Mod M
 */

// DEBUG
// $input = fopen('./input.txt', 'r');
// PROD
$input = fopen($argv[1], 'r');
while (!feof($input)) {
    $expl = explode(',', trim(fgets($input)));

    $o = $expl[0] - (intval($expl[0] / $expl[1]) * $expl[1]);

    echo $o . PHP_EOL;
}
fclose($input);
