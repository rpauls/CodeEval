<?php
/*
 *  2016-08-17
 *  CodeEval Challenge - Easy
 *  Read More
 */

$input = fopen($argv[1], 'r');
// $trimmed = 'Amy Lawrence was proud and glad, and she tried to make Tom see it in her face - but he wouldn\'t look.';
// $trimmed = 'Tom\'s mouth watered for the apple, but he stuck to his work.';
while (!feof($input)) {
    $trimmed= trim(fgets($input));

    if (strlen($trimmed) > 55) {
        $trimmed = substr($trimmed, 0, 40);

        if( false !== strpos($trimmed, ' ')) {
            $trimmed = trim( substr( $trimmed, 0, strrpos($trimmed, ' ') ) );
        }

        $trimmed .= '... <Read More>';
    }
    echo $trimmed . PHP_EOL;
}
fclose($input);

?>
