<?php
/*
 *  2016-08-26
 *  CodeEval Challenge - Easy
 *  Sland Flavor
 */

// $input = 'Usu ei scripta phaedrum, an sed salutatus definiebas? Qui ut recteque gloriatur reformidans. Qui solum aeque sapientem cu.';

$input = fopen($argv[1], 'r');

$slang = array(
    ', yeah!',
    ', this is crazy, I tell ya.',
    ', can U believe this?',
    ', eh?',
    ', aw yea.',
    ', yo.',
    '? No way!',
    '. Awesome!'
);

$c = 0;
$s = false;
while (!feof($input)) {
    $str = str_split(trim(fgets($input)));
    // $str = str_split(trim($input));

    foreach ($str as $key => $val) {
        if ($val === '.' || $val === '!' || $val === '?') {
            if ($s) {
                $insert = $slang[$c];
                array_splice($str, $key, 1, $insert);
                ($c >= 7 ? $c = 0 : $c++);
                $s = false;
            } else {
                $s = true;
            }
        }
    }

    echo implode($str) . PHP_EOL;
}
fclose($input);
