<?php
/*
 *  2016-08-24
 *  CodeEval Challenge - Easy
 *  Panacea - Truth Or Lie
 */

$input = fopen($argv[1], 'r');
while (!feof($input)) {
    $expl = explode(' | ', trim(fgets($input)));
    $virus = explode(' ', $expl[0]);
    $antivir = explode(' ', $expl[1]);
    $sum = array(0, 0);

    foreach ($virus as $key => $vir) {
        $sum[0] += hexdec($vir);
    }

    foreach ($antivir as $key => $ant) {
        $sum[1] += bindec($ant);
    }

    if ($sum[0] <= $sum[1]) {
        echo 'True';
    } else {
        echo 'False';
    }


    echo PHP_EOL;
}
fclose($input);
