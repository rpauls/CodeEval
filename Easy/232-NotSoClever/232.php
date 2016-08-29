<?php
/*
 *  2016-08-29
 *  CodeEval Challenge - Easy
 *  Not So Clever
 */

 // DEBUG
 // $input = fopen('./input.txt', 'r');
 // PROD
$input = fopen($argv[1], 'r');
while (!feof($input)) {
    $expl = explode(' | ', trim(fgets($input)));

    echo uncleverSort(explode(' ', $expl[0]), $expl[1]) . PHP_EOL;
}
fclose($input);

function uncleverSort(array $num, $ite)
{
    $c = count($num);
    for ($i = 0; $i < $ite; $i++) {
        for ($j = 0; $j < $c-1; $j++) {
            if ($num[$j] > $num[$j+1]) {
                $t = $num[$j+1];
                $num[$j+1] = $num[$j];
                $num[$j] = $t;
                break;
            }
        }
    }

    $sorted = implode(' ', $num);

    return $sorted;
}
