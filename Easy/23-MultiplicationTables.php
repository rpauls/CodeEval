<?php
/*
 *  2016-08-12
 *  CodeEval Challenge - Easy
 *  Multiplication Table (from 1*12 to 12*12)
 */
for ($i = 1; $i <= 12; $i++) {

    for ($ii = 1; $ii <= 12; $ii++) {

        $r = $i * $ii;
        if ($ii == 1) {
            echo str_pad($r, 2, ' ', STR_PAD_LEFT);
        } else {
            echo str_pad($r, 4, ' ', STR_PAD_LEFT);
        }


    }
    echo "\n";
}


?>
