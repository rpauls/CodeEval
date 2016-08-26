<?php
/*
 *  2016-08-26
 *  CodeEval Challenge - Easy
 *  Sum Of Primes
 */

$num = 2;
$sum = 0;
$c = 0;

while ($c < 1000) {
    if (prime($num)) {
        $sum += $num;
        $c++;
    }
    $num++;
}

echo $sum . PHP_EOL;

function prime($x)
{
    if ($x <= 1) {
        return false;
    }

    $ret = true;
    for ($i = 2; $i < $x ; $i++) {
        if (is_integer($x / $i)) {
            $ret = false;
            break;
        }
    }

    return $ret;
}
