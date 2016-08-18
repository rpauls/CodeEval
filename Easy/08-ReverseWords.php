<?php
/*
 *  2016-08-11
 *  CodeEval Challenge - Easy
 *  Reverse Words
 */

$input = fopen($argv[1], 'r');

while (!feof($input)) {
    $input_trimmed= trim(fgets($input));
    $input_exploded = explode(' ', $input_trimmed);
    $output = '';

    $output = array_reverse($input_exploded);
    $output = implode(' ', $output);

    echo $output . "\n";
}
fclose($input);
?>
