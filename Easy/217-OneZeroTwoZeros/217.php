<?php
/*
 *  2016-08-17
 *  CodeEval Challenge - Easy
 *  One Zero, Two Zeros...
 */

$input = fopen($argv[1], 'r');
// $trimmed = '2 4';
while (!feof($input)) {
    $trimmed= trim(fgets($input));
    $expl = explode(' ', $trimmed);
    $rangeOfNums = array();
    $numOfNums = array();
    $num = 0;

    // [0] NumOfZero | [1] RangeOfNumbers

    for ($i = 1; $i <= $expl[1]; $i++) {
        array_push($rangeOfNums, decbin($i));
    }

    foreach ($rangeOfNums as $key => $value) {
        array_push($numOfNums, array_count_values(str_split($value)));
        if(isset($numOfNums[$key][0]) && $numOfNums[$key][0] == $expl[0]) {

            $num++;
        }
    }
    echo $num . PHP_EOL;
}
fclose($input);


