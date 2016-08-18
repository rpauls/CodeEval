<?php
/*
 *  2016-08-12
 *  CodeEval Challenge - Easy
 *  Sum Of Digits
 */

$input = fopen($argv[1], 'r');
$trimmed = 0;
while (!feof($input)) {
    $trimmed+= trim(fgets($input));

}
echo $trimmed . "\n";
fclose($input);

?>
