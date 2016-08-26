<?php
/*
 *  2016-08-12
 *  CodeEval Challenge - Moderate
 *  Remove Characters
 */
$input = fopen($argv[1], 'r');

// $trimmed = 'this is a small test, as';

while (!feof($input)) {
    $trimmed = trim(fgets($input));
    $exploded = explode(',', $trimmed);

    echo removeChars($exploded[0], $exploded[1]).PHP_EOL;

}
fclose($input);

function removeChars($sentence, $chars)
{

    $chars = str_split(trim($chars));
    for ($i = 0; $i <= strlen($sentence); $i++) {
        for ($ii = 0; $ii < count($chars); $ii++ ) {
            $sentence = str_replace($chars[$ii], '', $sentence);
        }

    }

    return $sentence;

}


