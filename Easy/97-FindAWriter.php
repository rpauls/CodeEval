<?php
/*
 *  2016-08-16
 *  CodeEval Challenge - Easy
 *  Find A Writer
 */

$input = fopen($argv[1], 'r');
// $trimmed = '3Kucdq9bfCEgZGF2nwx8UpzQJyHiOm0hoaYP6ST1WM7Nks5XjrR4IltBeDLV vA| 2 26 33 55 34 50 33 61 44 28 46 32 28 30 3 50 34 61 40 7 1 31';
while (!feof($input)) {
    $trimmed= trim(fgets($input));
    $exploded = explode('| ', $trimmed);
    $explString = str_split($exploded[0]);
    $explNum = explode(' ', $exploded[1]);

    $o = '';

    $c = count($explNum);
    for ($i = 0; $i < $c; $i++) {
        $o .= $explString[$explNum[$i]-1];
    }

    echo $o. "\n";
}
fclose($input);

?>
