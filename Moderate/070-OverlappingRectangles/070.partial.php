<?php
/*
 *  2016-08-29
 *  CodeEval Challenge - Moderate
 *  Overlapping Rectangles
 */

// DEBUG
// $input = fopen('./input.txt', 'r');
// PROD
$input = fopen($argv[1], 'r');
while (!feof($input)) {
    $trim = trim(fgets($input));
    if($trim === '') {#
        break;
    }
    $expl = explode(',', $trim);
    $rects = array();

    $c = count($expl);
    for($i = 0; $i < $c; $i += 2) {
        $rects[] = array($expl[$i], $expl[$i+1]);
    }

    $rectA = constructRect($rects[0], $rects[1]);
    $rectB = constructRect($rects[2], $rects[3]);

    echo checkOverlapping($rectA, $rectB) . PHP_EOL;
}
fclose($input);

function constructRect(array $upperLeft, array $lowerRight)
{
    $dim = array(
        abs($lowerRight[1] - $upperLeft[0]),
        abs($lowerRight[0] - $upperLeft[1])
    );

    return array('pos' => $upperLeft, 'dim' => $dim );
}

function checkOverlapping(array $rectA, array $rectB)
{
    $ret = 'False';
    if (
        $rectA['pos'][0] + $rectA['dim'][0] >= $rectB['pos'][0] &&
        $rectA['pos'][0] < $rectB['pos'][0] + $rectB['dim'][0] &&
        $rectA['pos'][1] + $rectA['dim'][1] >= $rectB['pos'][1] &&
        $rectA['pos'][1] < $rectB['pos'][1] + $rectB['dim'][1]
    ) {
        $ret = 'True';
    }

    return $ret;
}
