<?php
/*
 *  2016-08-16
 *  CodeEval Challenge - Easy
 *  Calculate Distance
 */

$input = fopen($argv[1], 'r');
while (!feof($input)) {
    $exploded = explode(') (', trim(fgets($input)));
    $exploded[0] = str_replace('(', '', $exploded[0]);
    $exploded[1] = str_replace(')', '', $exploded[1]);

    $pos1 = explode(', ', $exploded[0]);
    $pos2 = explode(', ', $exploded[1]);

    $o = calcDistance($pos1, $pos2);

    echo $o . PHP_EOL;
}
fclose($input);

function calcDistance(array $A, array $B)
{
    // a² + b² = c²
    // a^2 + b^2 = c^2
    // $A -> Ax1, Ay
    // $B -> Bx, By

    // pow(base, exp) = Quadrieren
    // Result: c = sqrt(a2, b2)

    // $a = $B[0] - $A[0];
    // $b = $B[1] - $A[1];
    // $a2 = pow($B[0] - $A[0], 2);
    // $b2 = pow($B[1] - $A[1], 2);
    //
    // $c = sqrt($a2 + $b2);

    return sqrt(pow($B[0] - $A[0], 2) + pow($B[1] - $A[1], 2));
}
