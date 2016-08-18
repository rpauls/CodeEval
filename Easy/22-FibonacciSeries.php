<?php
/*
 *  2016-08-12
 *  CodeEval Challenge - Easy
 *  Fibonacci Series
 */

$input = fopen($argv[1], 'r');

while (!feof($input)) {
    echo fib(trim(fgets($input))) . PHP_EOL;
}
fclose($input);

function fib($n) {
    $n1 = $n - 1;
    $n2 = $n - 2;
    if ($n >= 2) {
      return fib($n1) + fib($n2);
    } elseif ($n == 1) {
      return 1;
    } else {
      return 0;
    }
}
