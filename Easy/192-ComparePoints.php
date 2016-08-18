<?php
/*
 *  2016-08-17
 *  CodeEval Challenge - Easy
 *  Compare Points
 */

$input = fopen($argv[1], 'r');
// $trimmed = '-3483 7182 1580 -6134';
while (!feof($input)) {
    $trimmed= trim(fgets($input));
    $expl = explode(' ', $trimmed);
    // Current pos
    $o = $expl[0];
    $p = $expl[1];
    // Destination pos
    $q = $expl[2];
    $r = $expl[3];
    // Base output
    $out = 'Nowhere';

    // Coordinates ranging from -10000 to 10000 (x and y)!
    // y = Latitude  | -y = S / y = N
    // x = Longitude | -x = W / x = E
    $x = $q - $o;
    $y = $r - $p;

    if ( $x === 0) {

        if ( $y === 0 ) {
            $out = 'here';
        } elseif ( $y > 0 ) {
            $out = 'N';
        } elseif ( $y < 0 ) {
            $out = 'S';
        }

    } elseif ( $x < 0 ) {
        // West
        if ( $y === 0 ) {
            $out = 'W';
        } elseif ( $y > 0 ) {
            $out = 'NW';
        } elseif ( $y < 0 ) {
            $out = 'SW';
        }

    } elseif ( $x > 0 ) {
        // East
        if ( $y === 0 ) {
            $out = 'E';
        } elseif ( $y > 0 ) {
            $out = 'NE';
        } elseif ( $y < 0 ) {
            $out = 'SE';
        }
    }

    echo $out . PHP_EOL;
}
fclose($input);

?>
