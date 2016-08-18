<?php
/*
 *  2016-08-11
 *  CodeEval Challenge - Easy
 *  Sum of Primes
 */

 $input = fopen($argv[1], 'r');
// $input_trimmed = '13,8';

 while (!feof($input)) {
     $input_trimmed= trim(fgets($input));
     $input_exploded = explode(',', $input_trimmed);
     echo $input_exploded[1] * test_multiple($input_exploded[0], $input_exploded[1]) . "\n";

 }
 fclose($input);

 function test_multiple($x, $n) {
  $result = 0;
  for ($i = 2; $n * $i < $x; $i++) {
    $result = $n * $i;
  }
  return $i;
}

 ?>
