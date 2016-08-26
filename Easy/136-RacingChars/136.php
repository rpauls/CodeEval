<?php
/*
 *  2016-08-24
 *  CodeEval Challenge - Easy
 *  Racing Chars
 *  https://www.codeeval.com/open_challenges/136/
 */
$before = -1;
// $input = '######_#C###';
$input = fopen($argv[1], 'r');
while (!feof($input)) {
    $split = str_split(trim(fgets($input)));
    // $split = str_split(trim($input));
    $c = -1;
    $g = -1;

    foreach ($split as $key => $val) {
        if ($val !== '#') {
            if ($val === 'C') {
                $c = $key;
            } elseif ($val === '_') {
                $g = $key;
            }
        }
    }

    if ($c !== -1) {
        $split[$c] = printWay($before, $c);
        $before = $c;
    } elseif ($g !== -1){
        $split[$g] = printWay($before, $g);
        $before = $g;
    }

    echo implode($split) .PHP_EOL;
}
fclose($input);

// Print the way of passing based on the way position of the line before
function printWay($b, $c)
{
    $way = '|'; // Default

    if ($b < $c && $b !== -1) {
        $way = '\\';
    } elseif ($b > $c && $b !== -1) {
        $way = '/';
    }

    return $way;
}
