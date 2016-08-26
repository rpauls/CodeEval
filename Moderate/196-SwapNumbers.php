<?php
/*
 *  2016-08-26
 *  CodeEval Challenge - Moderate
 *  Swap Numbers
 */

// $input = '4Always0 5look8 4on9 7the2 4bright8 9side7 3of8 5life5';

$input = fopen($argv[1], 'r');
while (!feof($input)) {
    $expl = explode(' ', trim(fgets($input)));
    // $expl = explode(' ', trim($input));

    foreach ($expl as $key => $word) {
        $orig = str_split($word);
        $c = count($orig);

        $first = array($orig[0]);
        $last = array($orig[$c-1]);

        array_splice( $orig, 0, 1, $last );
        array_splice( $orig, $c-1, 1, $first );

        $expl[$key] = implode($orig);
    }

    echo implode(' ', $expl) . PHP_EOL;
}
fclose($input);
