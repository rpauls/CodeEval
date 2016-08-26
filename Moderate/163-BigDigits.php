<?php
/*
 *  2016-08-17
 *  CodeEval Challenge - Moderate
 *  Big Digits
 */

 $fontMatrix = array(
     array(
         '-**--',
         '*--*-',
         '*--*-',
         '*--*-',
         '-**--',
         '-----'
     ),
     array(
         '--*--',
         '-**--',
         '--*--',
         '--*--',
         '-***-',
         '-----'
     ),
     array(
         '***--',
         '---*-',
         '-**--',
         '*----',
         '****-',
         '-----'
     ),
     array(
         '***--',
         '---*-',
         '-**--',
         '---*-',
         '***--',
         '-----'
     ),
     array(
         '-*---',
         '*--*-',
         '****-',
         '---*-',
         '---*-',
         '-----'
     ),
     array(
         '****-',
         '*----',
         '***--',
         '---*-',
         '***--',
         '-----'
     ),
     array(
         '-**--',
         '*----',
         '***--',
         '*--*-',
         '-**--',
         '-----'
     ),
     array(
         '****-',
         '---*-',
         '--*--',
         '-*---',
         '-*---',
         '-----'
     ),
     array(
         '-**--',
         '*--*-',
         '-**--',
         '*--*-',
         '-**--',
         '-----'
     ),
     array(
         '-**--',
         '*--*-',
         '-***-',
         '---*-',
         '-**--',
         '-----'
     ),
 );

$input = fopen($argv[1], 'r');
// $trimmed = '3.1415926';
while (!feof($input)) {
    $trimmed= trim(fgets($input));
    $text = str_split(preg_replace('/[^0-9]/','',$trimmed));

    for ($i = 0; $i < 6; $i++) {

        foreach ($text as $val) {
            echo $fontMatrix[$val][$i];

        }
        echo PHP_EOL; // Add '<br />' before PHP_EOL for output to HTML
    }

}
fclose($input);


