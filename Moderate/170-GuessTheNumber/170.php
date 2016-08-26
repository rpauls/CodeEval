<?php
/*
 *  2016-08-26
 *  CodeEval Challenge - Moderate
 *  Guess The Number
 */

// $input = '100 Lower Lower Higher Lower Lower Lower Yay!';

$input = fopen($argv[1], 'r');

while (!feof($input)) {
    $expl = explode(' ', trim(fgets($input)));
    // $expl = explode(' ', trim($input));

    $a   = 0;
    $b   = array_shift($expl);
    $guess = ceil($b / 2);

    foreach ($expl as $str) {
        switch ($str) {
            case 'Yay!':
                break;
            case 'Lower':
                $b = $guess - 1;
                break;
            case 'Higher':
                $a = $guess + 1;
                break;
        }
        $guess = $a + ceil(($b - $a) / 2);
    }

    echo trim($guess) . PHP_EOL;
}
fclose($input);
