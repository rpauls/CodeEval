<?php
/*
 *  2016-08-08
 *  CodeEval Challenge - Moderate
 *  Longest Lines
 */

$input = fopen($argv[1], 'r');
$input_list = array();

while (!feof($input)) {
    $input_trimmed = trim(fgets($input));
    if ($input_trimmed != '') {
        array_push($input_list, $input_trimmed);
    }
}

usort($input_list, 'SortByLength');
foreach($input_list as $item) {
    echo $item . PHP_EOL;
}
fclose($input);

// Sort by length
function SortByLength($a, $b)
{
     return strlen($b) - strlen($a);
}


