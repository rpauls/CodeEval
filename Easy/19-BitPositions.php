<?php
/*
 *  2016-08-12
 *  CodeEval Challenge - Easy
 *  bit Positions
 */

$input = fopen($argv[1], 'r');

while (!feof($input)) {
    $trimmed= trim(fgets($input));
    $exploded = explode(',', $trimmed);
    $bit = strrev(decbin($exploded[0]));
    $bit_split = str_split($bit);

    if($bit_split[$exploded[1]-1] == $bit_split[$exploded[2]-1]) {
        echo 'true'. "\n";
    } else {
        echo 'false'. "\n";
    }

}
fclose($input);

?>
