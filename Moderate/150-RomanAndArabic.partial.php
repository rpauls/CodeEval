<?php
/*
 *  2016-08-16
 *  CodeEval Challenge - Moderate
 *  Roman And Arabic
 *  https://www.codeeval.com/open_challenges/150/
 */

$input = fopen($argv[1], 'r');
// $trimmed = '3X2I4X'; // = 68
// $trimmed = '2I3I2X9V1X'; // = -16
// $trimmed = '3M1D2C'; // = 3700
while (!feof($input)) {
    $trimmed= trim(fgets($input));
    $splitted = str_split($trimmed, 2);
    $calc = array();

    $valueMatrix = array(
        'I' => 1,
        'V' => 5,
        'X' => 10,
        'L' => 50,
        'C' => 100,
        'D' => 500,
        'M' => 1000
    );

    // A1*R1 + A2*R2 + An*Rn
    //
    // 3*X + 2*I + 4*X
    //
    // GIVEN A1*R1, A2*R2
    // IF R2 > R1 = -(A1*R1)
    //
    // 3*10 | -2*1 | 4*10

    foreach ($splitted as $key => $split) {

        $ar = str_split($split);

        array_push($calc, $ar[0] * $valueMatrix[$ar[1]]);

        if(isset($r_last) && $ar[1] > $r_last ) {
            $calc[$key-1] = -$calc[$key-1];
        }
        $r_last = $ar[1];
    }

    echo array_sum($calc) . "\n";
}
fclose($input);

?>
