<?php
/*
 *  2016-08-17
 *  CodeEval Challenge - Moderate
 *  Hidden Digits
 */

$input = fopen($argv[1], 'r');
// $trimmed = '6240488';
while (!feof($input)) {
    $trimmed= trim(fgets($input));
    $text = str_split($trimmed);
    $o = '';

    $digitMatrix = array(
        'a' => '0',
        'b' => '1',
        'c' => '2',
        'd' => '3',
        'e' => '4',
        'f' => '5',
        'g' => '6',
        'h' => '7',
        'i' => '8',
        'j' => '9'
    );

    $c = count($text);
    for ($i = 0; $i < $c; $i++) {
        if(ctype_lower($text[$i]) && array_key_exists($text[$i], $digitMatrix)) {
            $o .= $digitMatrix[$text[$i]];
        } elseif(ctype_digit($text[$i])) {
            $o .= $text[$i];
        }
    }

    if ($o === '') {
        $o = 'NONE';
    }

    echo $o . PHP_EOL;

}
fclose($input);


