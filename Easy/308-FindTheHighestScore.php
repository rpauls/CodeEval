<?php
/*
 *  2016-08-17
 *  CodeEval Challenge - Easy
 *  Find The Highest Score
 */

$input = fopen($argv[1], 'r');
// $trimmed = '10 25 -30 -200 | 5 16 70 -300 | 13 1 31 -100';
while (!feof($input)) {
    $trimmed= trim(fgets($input));
    $expl = explode(' | ', $trimmed);
    $scores = array();
    $highest = -1000;
    $o = '';

    foreach($expl as $val) {
        array_push($scores, explode(' ', $val));
    }
    $c = count($scores[0]);

    for ($i = 0; $i < $c; $i++) {
        $highest = -1000;
        foreach ($scores as $key => $participant) {
            if(intval($participant[$i]) > $highest) {
                $highest = $participant[$i];
            }

        }
        $o .= $highest . ' ';
    }

    echo trim($o) . PHP_EOL;
}
fclose($input);

?>
