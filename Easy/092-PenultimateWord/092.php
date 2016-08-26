<?php
/*
 *  2016-08-26
 *  CodeEval Challenge - Easy
 *  Penultimate Word
 */

// $input = 'another line';

$input = fopen($argv[1], 'r');
while (!feof($input)) {
    $expl = explode(' ', trim(fgets($input)));
    // $expl = explode(' ', trim($input));
    $c = count($expl);

    echo $expl[$c-2] . PHP_EOL;
}
fclose($input);
