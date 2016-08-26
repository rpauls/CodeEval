<?php
/*
 *  2016-08-15
 *  CodeEval Challenge - Easy
 *  Word To Digit
 */

$input = fopen($argv[1], 'r');
// $trimmed = 'zero;two;five;seven;eight;four';
while (!feof($input)) {
    $exploded = ;

    echo wordToDigits($exploded) . PHP_EOL;
}
fclose($input);

function wordToDigits(array $words)
{
    $digits = '';
    $c = count($words);
    for ($i = 0; $i < $c; $i++) {
        switch($words[$i]) {
            case 'one':
                $digits .= '1';
                break;
            case 'two':
                $digits .= '2';
                break;
            case 'three':
                $digits .= '3';
                break;
            case 'four':
                $digits .= '4';
                break;
            case 'five':
                $digits .= '5';
                break;
            case 'six':
                $digits .= '6';
                break;
            case 'seven':
                $digits .= '7';
                break;
            case 'eight':
                $digits .= '8';
                break;
            case 'nine':
                $digits .= '9';
                break;
            default:
                $digits .= '0';
                break;
        }
    }

    return $digits;
}
