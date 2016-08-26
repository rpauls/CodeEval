<?php
/*
 *  2016-08-26
 *  CodeEval Challenge - Moderate
 *  Stack Implementation
 */

// $input = '-26 -86 -31 -22 -89 -45 90 30 98 77 -44 -49 -77 -48 -40 -59 -49 -4 98 -3 -11 76 -21 31 -3 -93 60 -48 85 72 77 21 -62 85 -68 71 18 -58 -48 9 9 61 44 -90 95 -73 91 -75 -30 -90 -88 -78';
// $input = '10 -2 3 4';

$input = fopen($argv[1], 'r');

while (!feof($input)) {
    $expl = explode(' ', trim(fgets($input)));
    // $expl = explode(' ', trim($input));
    $o = '';
    $stack = array();

    foreach ($expl as $val) {
        $stack[] = $val;
    }

    $c = count($stack);

    for ($i = 0; $i < $c; $i++) {
        if ( $i % 2 == 0) {
            $o .= array_pop($stack) . ' ';
        } else {
            array_pop($stack);
        }
    }

    echo trim($o) . PHP_EOL;
}
fclose($input);
