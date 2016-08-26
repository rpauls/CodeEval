<?php
/*
 *  2016-08-18
 *  CodeEval Challenge - Moderate
 *  Roman And Arabic
 *  https://www.codeeval.com/open_challenges/150/
 */

$valueMatrix = array(
    'I' => 1,
    'V' => 5,
    'X' => 10,
    'L' => 50,
    'C' => 100,
    'D' => 500,
    'M' => 1000
);

$input = fopen($argv[1], 'r');
// $trimmed = '3X2I4X'; // = 68
// $trimmed = '2I3I2X9V1X'; // = -16
// $trimmed = '3M1D2C'; // = 3700
while (!feof($input)) {
    $trimmed= trim(fgets($input));
    $elems = array_reverse(str_split($trimmed, 2));
    $last_r = 0;
    $sum = 0;

    // A1*R1 + A2*R2 + An*Rn
    //
    // 3*X + 2*I + 4*X
    //
    // GIVEN A1*R1, A2*R2
    // IF R2 > R1 = -(A1*R1)
    //
    // 3*10 | -2*1 | 4*10
    foreach (array_keys($elems) as $i) {
        $ar = str_split($elems[$i]);
        $a = (int)$ar[0];
        $r = $valueMatrix[$ar[1]];

        if ($last_r > $r) {
            $sum -= $a * $r;
        } else {
            $sum += $a * $r;
        }
        $last_r = $r;
    }
    echo $sum . PHP_EOL;

}
fclose($input);

