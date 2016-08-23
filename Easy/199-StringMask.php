<?php
/*
 *  2016-08-23
 *  CodeEval Challenge - Easy
 *  String Mask
 */

 $input = fopen($argv[1], 'r');
 // $trimmed = 'world 10000';
 while (!feof($input)) {
     $trimmed= trim(fgets($input));
    $expl = explode(' ', $trimmed);
    $out = '';

    $expl[0] = str_split($expl[0]);
    $expl[1] = str_split($expl[1]);

    foreach ($expl[0] as $key => $val) {
        if($expl[1][$key] == '1') {
            $expl[0][$key] = strtoupper($val);
        }
     }

     $out = implode('', $expl[0]);

     echo $out . PHP_EOL;
 }
 fclose($input);
