<?php
/*
 *  2016-08-15
 *  CodeEval Challenge - Easy
 *  Simple Sorting
 */

$input = fopen($argv[1], 'r');
// $trimmed = '70.920 -38.797 14.354 99.323 90.374 7.581';
while (!feof($input)) {
    $trimmed= trim(fgets($input));
    $exploded = explode(' ', $trimmed);
    sort($exploded);

    echo implode(' ', $exploded) ."\n";

}
fclose($input);


 ?>
