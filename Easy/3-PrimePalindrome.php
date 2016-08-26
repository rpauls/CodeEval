<?php
/*
 *  2016-08-12
 *  CodeEval Challenge - Easy
 *  Prime Palindrome
 */

$isPrime = false;
$num = 1;

for ($i = 1; $i < 1000; $i++) {

    $j = 2;

    while (!$isPrime && $j < $i) {

        if ($i % $j == 0) {
            $isPrime = true;
        }

        $j++;
    }

    if (!$isPrime && strrev((string)$i) == (string)$i) {
         $num = $i;
    }

    $isPrime = false;
}

echo $num;
