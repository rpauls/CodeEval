<?php
/*
 *  2016-08-30
 *  CodeEval Challenge - Hard
 *  Find Min
 *  https://www.codeeval.com/browse/85/
 */

// DEBUG
// $input = fopen('./input.txt', 'r');
// PROD
$input = fopen($argv[1], 'r');
while (!feof($input)) {
    list($n,$k,$a,$b,$c,$r)  = explode(',', trim(fgets($input)));
    $m = array();

    $m[0] = $a;
    for ($i=1; $i < $k ; $i++) {
        $m[] = ($b * $m[$i-1] + $c) % $r;
    }

    for ($i = $k; $i < $n ; $i++) {

        $s = array_slice($m, $i-$k, $k);
        $s = array_flip($s);

        $min = 0;

        while (isset($s[$min])) {
            $min++;
        }

        $m[] = $min;

    }

    echo $m[$n-1] . PHP_EOL;
}
fclose($input);
