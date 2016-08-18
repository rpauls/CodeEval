<?php
/*
 *  2016-08-12
 *  CodeEval Challenge - Easy
 *  Set Intersection
 */

$input = fopen($argv[1], 'r');

while (!feof($input)) {
    $trimmed= trim(fgets($input));
    $exploded = explode(';', $trimmed);
    $listA = explode(',', $exploded[0]);
    $listB = explode(',', $exploded[1]);
    $arr = array();

    for($i = 0; $i < count($listA); $i++) {
        for($ii = 0; $ii < count($listB); $ii++) {

            if($listA[$i] == $listB[$ii]) {
                array_push($arr, $listA[$i]);
            }

        }

    }
    echo implode(',', $arr). "\n";

}
fclose($input);

?>
