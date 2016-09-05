<?php
/*
 *  2016-09-05
 *  CodeEval Challenge - Hard
 *  Prefix Expressions
 *  https://www.codeeval.com/open_challenges/7/
 */

// DEBUG
// $input = fopen('./input.txt', 'r');
// PROD
$input = fopen($argv[1], 'r');
while (!feof($input)) {
    $tokens  = explode(' ', trim(fgets($input)));

    $ops = array();
    $dig = array();

    for ($i=0, $c = count($tokens); $i < $c ; $i++) {
        $token = $tokens[$i];
        if ($token == '+' || $token == '*' || $token == '/') {
            $ops[] = $token;
        } else{
            $dig[] = $token;
        }
    }

    $c = count($ops);
    $i = $c;
    $j = 0;
    $res = $dig[0];

    while ($i--) {
        $j++;
        switch ($ops[$i]) {
            case '+':
                $res += $dig[$j];
                break;
            case '*':
                $res *= $dig[$j];
                break;
            case '/':
                $res /= $dig[$j];
                break;
        }
    }


    echo $res . PHP_EOL;
}
fclose($input);
