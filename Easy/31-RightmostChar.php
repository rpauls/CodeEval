<?php
/*
 *  2016-08-15
 *  CodeEval Challenge - Easy
 *  Rightmost Char || PARTIALLY
 *  https://www.codeeval.com/open_challenges/31/
 */

$input = fopen($argv[1], 'r');
while (!feof($input)) {
    $exploded = explode(',', trim(fgets($input)) );
    $strPos = strrpos(trim($exploded[0]),trim($exploded[1]));

    echo (($strPos <= 0) ? -1 : $strPos) . PHP_EOL;
}
fclose($input);
