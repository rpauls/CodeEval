<?php
/*
 *  2016-08-17
 *  CodeEval Challenge - Easy
 *  The Major Element
 */

$input = fopen($argv[1], 'r');
// $trimmed = '92,19,19,76,19,21,19,85,19,19,19,94,19,19,22,67,83,19,19,54,59,1,19,19';
while (!feof($input)) {
    $trimmed= trim(fgets($input));
    $expl = explode(',', $trimmed);
    $num = 'None';

    $count = array_count_values($expl);
    $c = count($expl);

    foreach ($count as $key => $val) {
        if($val === max($count)) {
            if ($val > $c/2) {
                $num = $key;
            }
        }
    }

    echo $num . PHP_EOL;
}
fclose($input);

?>
