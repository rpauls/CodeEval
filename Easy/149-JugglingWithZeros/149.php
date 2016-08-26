<?php
/*
 *  2016-08-25
 *  CodeEval Challenge - Easy
 *  Juggling With Zeros
 */

// $input = '00 0 0 00 00 0';

$input = fopen($argv[1], 'r');
while (!feof($input)) {
    $expl = explode(' ', trim(fgets($input)));
    // $expl = explode(' ', trim($input));
    $binstr = '';
    $one = false;

    foreach ($expl as $key => $zero) {
        if ($key % 2 == 0) {
            if ($zero === '00') {
                $one = true;
            } else {
                $one = false;
            }
        } else {
            $len = strlen($zero);
            if ($one) {
                for ($i = 0; $i < $len; $i++) {
                    $binstr .= '1';
                }
            } else {
                for ($i = 0; $i < $len; $i++) {
                    $binstr .= '0';
                }
            }
        }
    }

    echo bindec($binstr) . PHP_EOL;
}
fclose($input);
