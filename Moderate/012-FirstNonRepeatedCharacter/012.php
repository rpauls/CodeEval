<?php
/*
 *  2016-08-26
 *  CodeEval Challenge - Moderate
 *  First Non-Repeated Character
 */

// $input = 'tooth';

$input = fopen($argv[1], 'r');

while (!feof($input)) {
    $str = str_split(trim(fgets($input)));
    // $str= str_split(trim($input));
    $first = true;
    $o = '';

    $arr = array_count_values($str);

    foreach ($arr as $key => $val) {
        if ($val == 1 && $first) {
            $o = $key;
            $first = false;
            continue;
        }
    }

    echo trim($o) . PHP_EOL;
}
fclose($input);
