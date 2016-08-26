<?php
/*
 *  2016-08-16
 *  CodeEval Challenge - Moderate
 *  Lost In Translation
 */

$input = fopen($argv[1], 'r');
// $trimmed = 'rbc vjnmkf kd yxyqci na rbc zjkfoscdd ew rbc ujllmcp';
while (!feof($input)) {
    $trimmed= trim(fgets($input));
    $text = str_split($trimmed);
    $o = '';

    $translationMatrix = array(
        'y' => 'a',
        'n' => 'b',
        'f' => 'c',
        'i' => 'd',
        'c' => 'e',
        'w' => 'f',
        'l' => 'g',
        'b' => 'h',
        'k' => 'i',
        'u' => 'j',
        'o' => 'k',
        'm' => 'l',
        'x' => 'm',
        's' => 'n',
        'e' => 'o',
        'v' => 'p',
        'z' => 'q',
        'p' => 'r',
        'd' => 's',
        'r' => 't',
        'j' => 'u',
        'g' => 'v',
        't' => 'w',
        'h' => 'x',
        'a' => 'y',
        'q' => 'z',
        ' ' => ' '
    );

    $c = count($text);
    for ($i = 0; $i < $c; $i++) {
        $o .= $translationMatrix[$text[$i]];
    }

    echo $o . PHP_EOL;
}
fclose($input);


