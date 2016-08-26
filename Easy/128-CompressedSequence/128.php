<?php
/*
 *  2016-08-24
 *  CodeEval Challenge - Easy
 *  Compressed Sequence
 */
// $input = '1 1 3 3 3 2 2 2 2 14 14 14 11 11 11 2';
$input = fopen($argv[1], 'r');
while (!feof($input)) {
    $expl = explode(' ', trim(fgets($input)));
    // $expl = explode(' ', trim($input));
    $vals = array();
    $compr = '';

    $i = 0;
    foreach ($expl as $key => $val) {
        if (isset($vals[$i])) {
            $vals[$i][$val] = $vals[$i][$val] + 1;
            if ($expl[$key+1] != $val) {
                $i++;
            }
        } else {
            $vals[$i] = array($val => 1);
        }
    }


    foreach ($vals as $key => $val) {
        foreach($val as $k => $v) {
            $compr .= ($v . ' ' . $k . ' ');
        }
    }

    echo trim($compr) . PHP_EOL;
}
fclose($input);
