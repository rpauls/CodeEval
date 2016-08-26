<?php
/*
 *  2016-08-25
 *  CodeEval Challenge - Easy
 *  Testing
 */

// $input = 'Hello Codeeval | Hello Codeeval';

$input = fopen($argv[1], 'r');
while (!feof($input)) {
    $expl = explode(' | ', trim(fgets($input)));
    // $expl = explode(' | ', trim($input));
    $expl[0] = str_split($expl[0]);
    $expl[1] = str_split($expl[1]);

    $bugs = 0;

    foreach ($expl[0] as $key => $char) {
        if ($char !== $expl[1][$key]) {
            $bugs++;
        }
    }

    if ($bugs === 0) {
        echo 'Done';
    } elseif ($bugs > 0 && $bugs <= 2) {
        echo 'Low';
    } elseif ($bugs > 2 && $bugs <= 4) {
        echo 'Medium';
    } elseif ($bugs > 4 && $bugs <= 6) {
        echo 'High';
    } elseif ($bugs > 6) {
        echo 'Critical';
    }

    echo PHP_EOL;
}
fclose($input);
