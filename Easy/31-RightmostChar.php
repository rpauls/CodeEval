<?php
/*
 *  2016-08-15
 *  CodeEval Challenge - Easy
 *  Rightmost Char || PARTIALLY
 *  https://www.codeeval.com/open_challenges/31/
 */

$input = fopen($argv[1], 'r');
// $trimmed = 'L0S6gbOz6uVlv3pVislw7KFmDxoWRbHql8V8N6G2 T3gt9fpRL2Psf2ypyAinWDQhBVlwW,o';
while (!feof($input)) {
    $trimmed= trim(fgets($input));
    $exploded = explode(',', $trimmed);

    $strPos = strrpos(trim($exploded[0]),trim($exploded[1]));

    if($strPos <= 0) {
        $strPos = -1;
    }

    echo $strPos . "\n";

}
fclose($input);
?>
