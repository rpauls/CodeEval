<?php
/*
 *  2016-09-05
 *  CodeEval Challenge - Hard
 *  Minimum Path Sum
 *  https://www.codeeval.com/open_challenges/72/
 */

// DEBUG
// $input = fopen('./input.txt', 'r');
// PROD
$input = fopen($argv[1], 'r');

$lines = array();

while (!feof($input)) {
    $lines[]  = trim(fgets($input));
}
fclose($input);

$nb = count($lines);

for ($i=0 ; $i < $nb ;) {
    $n = (int)$lines[$i];
    $rows = '';

    for ($j=1 ; $j <= $n ; $j++) {
        $row = $lines[$i+$j];
        if ($j>1) {
            $rows .= ',';
        }
        $rows .= $row;
    }

    $cells = explode(',', $rows);
    $nb = mkNeighbours($n,$cells);

    echo scGrid($cells, $n * $n - 1, $nb) . PHP_EOL;

    $i += ($n+1);
}


function mkNeighbours($n, $g)
{
    $g_max = $n * $n;
    $i = $g_max;
    while ($i--) {

        // right
        if ($i%$n < $n-1) {
            $nb[$i]['r'] = $i + 1;
        }
        // bottom
        if ($i < $g_max-$n) {
            $nb[$i]['b'] = $i + $n;
        }
    }
    return $nb;
}

function scGrid ($g, $target, $nb, $idx=0, $sum=0, $min = INF)
{

    $sum += $g[$idx];

    if ($sum >= $min) {
        return $min;
    }

    if ($idx == $target) {
        return $sum;
    } else {
        if (isset($nb[$idx]['r'])) {
            $m = scGrid($g, $target, $nb, $nb[$idx]['r'], $sum, $min);
            if( $m < $min ) $min = $m;
        }
        if (isset($nb[$idx]['b'])) {
            $m = scGrid($g, $target, $nb, $nb[$idx]['b'], $sum, $min);
            if ($m < $min ) {
                $min = $m;
            }
        }
    }
    return $min;
}
