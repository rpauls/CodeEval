<?php
/*
 *  2016-08-26
 *  CodeEval Challenge - Easy
 *  Lettercase Percentage Ratio
 */

// $input = 'AAbbCCDDEE';

$input = fopen($argv[1], 'r');
while (!feof($input)) {
    $str = str_split(trim(fgets($input)));
    // $str = str_split(trim($input));

    $cUpper = 0;
    $cLower = 0;
    $cTotal = count($str);

    foreach ($str as $s) {
        if (ctype_upper($s)) {
            $cUpper++;
        } else {
            $cLower++;
        }
    }

    echo 'lowercase: ' . number_format(getPercentage($cTotal, $cLower), 2) . ' uppercase: ' . number_format(getPercentage($cTotal, $cUpper), 2) . PHP_EOL;
}
fclose($input);

function getPercentage($n100, $perc)
{
    return ($perc / $n100) * 100;
}
