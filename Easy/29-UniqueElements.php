<?php
/*
 *  2016-08-12
 *  CodeEval Challenge - Easy
 *  Unique Elements
 */

$input = fopen($argv[1], 'r');

while (!feof($input)) {
    $trimmed= trim(fgets($input));
    $exploded = explode(',', $trimmed);
    echo implode(',', array_unique($exploded, SORT_NUMERIC))."\n";

}
fclose($input);

?>
