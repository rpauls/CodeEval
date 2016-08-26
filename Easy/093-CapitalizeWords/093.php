<?php
/*
 *  2016-08-24
 *  CodeEval Challenge - Easy
 *  Capitalize Words
 */

$input = fopen($argv[1], 'r');
while (!feof($input)) {
    $expl = explode(' ', trim(fgets($input)));

    foreach ($expl as $key => $word) {
        $arr = str_split($word);

        $arr[0] = strtoupper($arr[0]);
        $expl[$key] = implode($arr);
    }

    $expl = implode(' ', $expl);

    echo $expl . PHP_EOL;
}
fclose($input);
