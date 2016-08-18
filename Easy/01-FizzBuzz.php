<?php
/*
 *  2016-08-08
 *  CodeEval Challenge - Easy
 *  FizzBuzz
 */

$input = fopen($argv[1], 'r');

while (!feof($input)) {
    $input_trimmed= trim(fgets($input));
    $input_exploded = explode(' ', $input_trimmed);
    $output = '';

    for ($i = 1; $i < $input_exploded[count($input_exploded)-1]+1; $i++) {
        $output .= FizzBuzzSwitch($i, $input_exploded[0], $input_exploded[1]) . ' ';
    }

    echo $output . "\t\n";
}
fclose($input);

// Else-If Variant
function FizzBuzzIf($num, $x, $y)
{

    switch ($num) {
        case (($num % $x == 0) && ($num % $y == 0)):
            return 'FB';
        break;
        case ($num % $x == 0):
            return 'F';
        break;
        case ($num % $y == 0):
            return 'B';
        break;
        default:
            return $num;
        break;
    }
}
// Switch-Case Variant
function FizzBuzzSwitch($num, $x, $y) {
    if ($num % $x == 0 && $num % $y == 0) {
        return 'FB';
    } elseif ($num % $x == 0) {
        return 'F';
    } elseif ($num % $y == 0) {
        return 'B';
    } else {
        return $num;
    }
}

?>
