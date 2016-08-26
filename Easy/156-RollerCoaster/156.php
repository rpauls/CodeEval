<?php
/*
 *  2016-08-26
 *  CodeEval Challenge - Easy
 *  Roller Coaster
 */

// $input = 'To be, or not to be: that is the question.';

$input = fopen($argv[1], 'r');
while (!feof($input)) {
    $str = str_split(trim(fgets($input)));
    // $str = str_split(trim($input));

    $upper = true;

    foreach ($str as $key => $char) {
        if(ctype_alpha($char)) {
            if ($upper) {
                $str[$key] = strtoupper($char);
                $upper = false;
            } else {
                $str[$key] = strtolower($char);
                $upper = true;
            }
        }
    }


    echo implode('', $str) . PHP_EOL;
}
fclose($input);
