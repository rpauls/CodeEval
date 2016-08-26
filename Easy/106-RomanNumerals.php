<?php
/*
 *  2016-08-18
 *  CodeEval Challenge - Easy
 *  Roman Numerals
 */

$valueMatrix = array(
    'I' => 1,
    'IV' => 4,
    'V' => 5,
    'IX' => 9,
    'X' => 10,
    'XL' => 40,
    'L' => 50,
    'XC' => 90,
    'C' => 100,
    'CD' => 400,
    'D' => 500,
    'CM' => 900,
    'M' => 1000
);

$valueMatrix = array_reverse($valueMatrix);

$input = fopen($argv[1], 'r');
// $trimmed = 159; // = CLIX
 // $trimmed = 296; // = CCXCVI
// $trimmed = 3992; // = MMMCMXCII
while (!feof($input)) {
    $trimmed = trim(fgets($input));
    $num = (int) $trimmed;
    $out = '';


    foreach ($valueMatrix as $key => $val) {
        $floor = floor($num / $val);
        $out .= str_repeat($key, $floor);
        $num = fmod($num, $val);
    }

    echo $out . PHP_EOL;

}
fclose($input);


