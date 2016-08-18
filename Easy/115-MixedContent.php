<?php
/*
 *  2016-08-15
 *  CodeEval Challenge - Easy
 *  Mixed Content
 */

$input = fopen($argv[1], 'r');
// $trimmed = '8,33,21,0,16,50,37,0,melon,7,apricot,peach,pineapple,17,21';
while (!feof($input)) {
    $trimmed= trim(fgets($input));
    $exploded = explode(',', $trimmed);

    $o_num = array();
    $o_word = array();

    foreach($exploded as $key => $value) {
        if(is_numeric($exploded[$key])) {
            array_push($o_num, $exploded[$key]);
        }else{
            array_push($o_word, $exploded[$key]);
        }
    }

    if(empty($o_num)) {
        echo implode(',', $o_word) . "\n";
    } elseif(empty($o_word)) {
        echo implode(',', $o_num) . "\n";
    } else {
        echo implode(',', $o_word) . '|' . implode(',', $o_num) . "\n";
    }



}
fclose($input);

 ?>
