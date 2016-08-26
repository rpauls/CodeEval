<?php
/*
 *  2016-08-24
 *  CodeEval Challenge - Easy
 *  Road Trip
 */
// $input = 'Yvnzjwk,5363; Pkabj,5999; Xznvb,3584; Jfksvx,1240; Inwm,5720;';
$input = fopen($argv[1], 'r');
while (!feof($input)) {
    $expl = explode('; ', trim(fgets($input)));
    // $expl = explode('; ', trim($input));
    $cities = array();
    $dists = array();
    $firstRun = true;

    foreach ($expl as $key => $city) {
        $x = explode(',', trim($city, '\;'));
        $cities[] = (int) $x[1];
    }

    asort($cities, SORT_REGULAR);
    $cities = array_values($cities);

    foreach ($cities as $key => $val) {
        if($firstRun) {
            $dists[$key] = $val;
            $firstRun = false;
        } else {
            $dists[$key] = 1 * abs($cities[$key-1] - $val);
        }
    }

    echo implode(',', $dists) . PHP_EOL;
}
fclose($input);
