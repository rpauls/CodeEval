<?php
/*
 *  2016-08-15
 *  CodeEval Challenge - Easy
 *  Morse Code
 */

$input = fopen($argv[1], 'r');
// $trimmed = '-... .... ...--';
while (!feof($input)) {
    $trimmed= trim(fgets($input));
    $words = explode('  ', $trimmed);
    $o = '';

    foreach($words as $key => $word) {

        $words[$key] = array( explode(' ', $word) );

        foreach($words[$key] as $word) {

            foreach($word as $char) {

                $o .= decode($char);

            }

            $o .= ' ';

        }

    }

    echo $o . "\n";

}
fclose($input);

function decode($code) {

    $codetable = array(
            '.-' => 'A',
            '-...' => 'B',
            '-.-.' => 'C',
            '-..' => 'D',
            '.' => 'E',
            '..-.' => 'F',
            '--.' => 'G',
            '....' => 'H',
            '..' => 'I',
            '.---' => 'J',
            '-.-' => 'K',
            '.-..' => 'L',
            '--' => 'M',
            '-.' => 'N',
            '---' => 'O',
            '.--.' => 'P',
            '--.-' => 'Q',
            '.-.' => 'R',
            '...' => 'S',
            '-' => 'T',
            '..-' => 'U',
            '...-' => 'V',
            '.--' => 'W',
            '-..-' => 'X',
            '-.--' => 'Y',
            '--..' => 'Z',

            '-----' => '0',
            '.----' => '1',
            '..---' => '2',
            '...--' => '3',
            '....-' => '4',
            '.....' => '5',
            '-....' => '6',
            '--...' => '7',
            '---..' => '8',
            '----.' => '9',
    );

    return $codetable[$code];

}


 ?>
