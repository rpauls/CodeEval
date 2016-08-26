<?php
/*
 *  2016-08-12
 *  CodeEval Challenge - Moderate
 *  Number of Ones
 */
$input = fopen($argv[1], 'r');

// $trimmed = '22';
while (!feof($input)) {
    $trimmed = trim(fgets($input));
    $bin = str_split(decbin($trimmed));
    $score = 0;
    for($i = 0; $i < count($bin); $i++) {

        $bin[$i] == 1 ? $score++ : $score = $score;

        // if($bin[$i] == 1) {
        //     $score++;
        // }
    }

    echo $score.PHP_EOL;

}
fclose($input);



