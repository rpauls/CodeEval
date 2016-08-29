<?php
/*
 *  2016-08-29
 *  CodeEval Challenge - Moderate
 *  Locks
 */

 // DEBUG
 // $input = fopen('./input.txt', 'r');
 // PROD
$input = fopen($argv[1], 'r');
while (!feof($input)) {
    $expl = explode(' ', trim(fgets($input)));
    // $expl = explode(' ', trim($input));

    $expl[0] = intval($expl[0]);
    $expl[1] = intval($expl[1]);

    $x = $expl[0];

    if ($expl[1] == 1) {
        $x -= 1;
    } else {
        $y = 0;

        for ($i = 0; $i < $expl[0]; $i++) {
            $locked = false;

            if ($i % 2 === 0 && $i % 3 === 0) {

            } elseif ($i % 2 === 0) {
                $locked = true;
            }  elseif ($i % 3 === 0) {
                if (($expl[1]-1) % 2 !== 0) {
                    $locked = true;
                }
            }

            if ($i === $expl[0]) {
                $locked = !$locked;
            }

            if ($locked) {
                $y++;
            }
        }
        $x -= $y;
    }


    echo $x . PHP_EOL;
}
fclose($input);
