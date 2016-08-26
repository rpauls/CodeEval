<?php
/*
 *  2016-08-17
 *  CodeEval Challenge - Easy
 *  Data Recovery
 */

$input = fopen($argv[1], 'r');
// $trimmed = '2000 and was not However, implemented 1998 it until;9 8 3 4 1 5 7 2';
while (!feof($input)) {
    $trimmed= trim(fgets($input));
    list($text, $hints) = explode(';', $trimmed);
    $text = explode (' ', $text);
    $hints = explode(' ', $hints);

    $c = 0;
    $o = '';
    $r = array();

    foreach ($hints as $hint) {
        $r[(int)$hint] = $text[$c];
        $c++;
    }

    $cH = count($hints);
    $cT = count($text);
    for ($i = 1; $i < $cH + 2; $i++) {
        if (isset($r[$i])) {
            $o .= ' ' . $r[$i];
        } else {
            $o .= ' ' . $text[$cT-1];
        }
    }

    echo $o . PHP_EOL;
}
fclose($input);


