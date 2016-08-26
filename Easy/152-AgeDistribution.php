<?php
/*
 *  2016-08-26
 *  CodeEval Challenge - Easy
 *  Age Distribution
 */

// $input = '19';

$input = fopen($argv[1], 'r');
while (!feof($input)) {
    $trim = intval(trim(fgets($input)));
    // $trim = intval(trim($input));

    if ($trim >= 0 && $trim <= 2) {
        echo 'Still in Mama\'s arms';
    } elseif ($trim >= 3 && $trim <= 4) {
        echo 'Preschool Maniac';
    } elseif ($trim >= 5 && $trim <= 11) {
        echo 'Elementary school';
    } elseif ($trim >= 12 && $trim <= 14) {
        echo 'Middle school';
    } elseif ($trim >= 15 && $trim <= 18) {
        echo 'High school';
    } elseif ($trim >= 19 && $trim <= 22) {
        echo 'College';
    } elseif ($trim >= 23 && $trim <= 65) {
        echo 'Working for the man';
    } elseif ($trim >= 66 && $trim <= 100) {
        echo 'The Golden Years';
    } else {
        echo 'This program is for humans';
    }

    echo PHP_EOL;
}
fclose($input);
