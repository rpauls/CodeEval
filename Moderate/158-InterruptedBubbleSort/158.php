<?php
/*
 *  2016-08-29
 *  CodeEval Challenge - Moderate
 *  Interrupted Bubble Sort
 */
// DEBUG
// $input = fopen('./input.txt', 'r');
// PROD
$input = fopen($argv[1], 'r');
while (!feof($input)) {
    $expl = explode(' | ', trim(fgets($input)));

    $expl[0] = explode(' ', $expl[0]);

    $c = count($expl[0]);

    // Set max iterations if iterations are larger than n^2
    // Prohibits a timeout due to infinitly running loop
    if ( $expl[1] >= $c * $c) {
        $expl[1] = $c * $c;
    }

    for ($i = 0; $i < $expl[1]; $i++) {
        for ($j = 0; $j < $c-1; $j++) {
            if ($expl[0][$j+1] < $expl[0][$j]) {
                $buffer = $expl[0][$j+1];
                $expl[0][$j+1] = $expl[0][$j];
                $expl[0][$j] = $buffer;
            }
        }
    }


    echo implode(' ', $expl[0]) . PHP_EOL;
}
fclose($input);
