<?php
/*
 *  2016-08-24
 *  CodeEval Challenge - Easy
 *  Longest Word
 */
// $input = 'another line';
$input = fopen($argv[1], 'r');
while (!feof($input)) {
    $expl = explode(' ', trim(fgets($input)));
    // $expl = explode(' ', trim($input));
    $len = array();

    foreach ($expl as $word) {
        $len[] = count(str_split($word));
    }

    $highest = array_keys($len, max($len));

    echo $expl[$highest[0]] . PHP_EOL;
}
fclose($input);
