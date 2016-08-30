<?php
/*
 *  2016-08-30
 *  CodeEval Challenge - Easy
 *  JSON Menu IDs
 */

// DEBUG
// $input = fopen('./input.txt', 'r');
// PROD
$input = fopen($argv[1], 'r');
while (!feof($input)) {
    $expl = explode(' ', trim(fgets($input)));
    $o = 0;

    foreach ($expl as $key => $val) {
        preg_match('~{"(.*?)"~', $val, $proc);
        if (isset($proc[1]) && $proc[1] === 'id' && isset($expl[$key+2])) {
            preg_match('~"(.*?)"~', $expl[$key+2], $proc1);
            if (isset($proc1[1]) && $proc1[1] === 'label') {
                $o += $expl[$key+1];
            }
        }
    }

    echo $o . PHP_EOL;

}
fclose($input);
