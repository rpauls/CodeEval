<?php
/*
 *  2016-08-26
 *  CodeEval Challenge - Moderate
 *  Trailing String
 */

$input = 'San Francisco,San Jose';

// $input = fopen($argv[1], 'r');
// while (!feof($input)) {
    // $expl = explode(',', trim(fgets($input)));
    $expl = explode(',', trim($input));

    var_dump($expl[0]);     // DEBUG
    var_dump($expl[1]);     // DEBUG
    echo '<br/>';           // DEBUG

    $trail = strrev($expl[1]);
    $cTrail = strlen($expl[1]);


    $str = substr(strrev($expl[0]), 0, $cTrail);


    var_dump($str);         // DEBUG
    var_dump($trail);       // DEBUG
    echo '<br/>';           // DEBUG

    echo $trail === $str ? '1' : '0'. PHP_EOL;
// }
// fclose($input);
