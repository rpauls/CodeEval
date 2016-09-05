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
    $neighbours = mkNeighbours($n,$cells);

    echo scGrid($cells, $n * $n - 1, $neighbours) . PHP_EOL;

    $i += ($n+1);
}


function mkNeighbours($n, $grid)
{
    $grid_max = $n * $n;
    $i = $grid_max;
    while ($i--) {

        // right
        if ($i%$n < $n-1) {
            $neighbours[$i]['r'] = $i + 1;
        }
        // bottom
        if ($i < $grid_max-$n) {
            $neighbours[$i]['b'] = $i + $n;
        }
    }
    return $neighbours;
}

function scGrid ($grid, $target, $neighbours, $idx=0, $sum=0, $min = INF)
{

    $sum += $grid[$idx];

    if ($sum >= $min) {
        return $min;
    }

    if ($idx == $target) {
        return $sum;
    } else {
        if (isset($neighbours[$idx]['r'])) {
            $m = scGrid($grid, $target, $neighbours, $neighbours[$idx]['r'], $sum, $min);
            if( $m < $min ) $min = $m;
        }
        if (isset($neighbours[$idx]['b'])) {
            $m = scGrid($grid, $target, $neighbours, $neighbours[$idx]['b'], $sum, $min);
            if ($m < $min ) {
                $min = $m;
            }
        }
    }
    return $min;
}
