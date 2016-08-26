<?php
/*
 *  2016-08-24
 *  CodeEval Challenge - Easy
 *  Swap Case
 */

$input = fopen($argv[1], 'r');

while (!feof($input)) {
    $str = str_split(trim(fgets($input)));

    foreach ($str as $key => $char) {
        if(ctype_upper($char)) {
            $str[$key] = strtolower($char);
        } else if (ctype_lower($char)) {
            $str[$key] = strtoupper($char);
        }
    }

    $str = implode('', $str);

    echo $str . PHP_EOL;
}
fclose($input);
