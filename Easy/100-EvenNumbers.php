<?php
/*
 *  2016-08-16
 *  CodeEval Challenge - Easy
 *  Even Numbers
 */

$input = fopen($argv[1], 'r');
// $trimmed = '2936';
while (!feof($input)) {
    $trimmed= trim(fgets($input));

    if ($trimmed % 2 == 0) {
        $o = 1;
    } else {
        $o = 0;
    }

    echo $o. "\n";
}
fclose($input);

?>
