<?php
/*
 *  2016-08-18
 *  CodeEval Challenge - Easy
 *  Big Digits
 */

$input = fopen($argv[1], 'r');
// $trimmed = '3 3 9 1 6 5 8 1 5 3';
while (!feof($input)) {
    $trimmed= trim(fgets($input));
    $num = explode(' ', $trimmed);

    $occurence  = array_count_values($num);
    $filtered = array_filter($occurence, function($n) {
        return 1 === $n;
    });
    $unique = array_keys($filtered);

    if (0 === count($unique)) {
        echo '0' . PHP_EOL;
    } else {
        sort($unique);
        $out = array_flip($num);
        $out = $out[array_shift($unique)] + 1;
        echo $out . PHP_EOL;
    }

}
fclose($input);

?>
