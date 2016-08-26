<?php
/*
 *  2016-08-11
 *  CodeEval Challenge - Easy
 *  Multiples Of A Number
 */

$input = fopen($argv[1], 'r');

while (!feof($input)) {
    $expl = explode(',', trim(fgets($input)));
    echo $expl[1] * test_multiple($expl[0], $expl[1]) . PHP_EOL;
}
fclose($input);

function test_multiple($x, $n) {
    for ($i = 2; $n * $i < $x; $i++) {
        $result = $n * $i;
    }
    return $i;
}
