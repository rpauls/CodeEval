<?php
/*
 *  2016-08-08
 *  CodeEval Challenge - Easy
 *  FizzBuzz
 */

$input = fopen($argv[1], 'r');

while (!feof($input)) {
    $expl = explode(' ', trim(fgets($input)));
    $c = count($expl);
    for ($i = 1; $i < $expl[$c-1]+1; $i++) {
        echo FizzBuzzIf($i, $expl[0], $expl[1]) . ' ';
    }
    echo PHP_EOL;
}
fclose($input);

// Switch-Case Variant
function FizzBuzzSwitch($num, $x, $y)
{
    switch ($num) {
        case (($num % $x == 0) && ($num % $y == 0)):
            return 'FB';
        break;
        case ($num % $x == 0):
            return 'F';
        break;
        case ($num % $y == 0):
            return 'B';
        break;
        default:
            return $num;
        break;
    }
}
// If-Else Variant
function FizzBuzzIf($num, $x, $y) {
    if ($num % $x == 0 && $num % $y == 0) {
        return 'FB';
    } elseif ($num % $x == 0) {
        return 'F';
    } elseif ($num % $y == 0) {
        return 'B';
    } else {
        return $num;
    }
}
