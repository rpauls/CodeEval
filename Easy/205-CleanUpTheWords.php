<?php
/*
 *  2016-08-18
 *  CodeEval Challenge - Easy
 *  Clean Up The Words
 */

$input = fopen($argv[1], 'r');
// $trimmed = '#=0(JAjgI\'h.;y:<7C4[Oe@tQ]j8:S.EP590!6gwO{7lii|qv]6%<l1|hG#O5U[D%TmO)NxvS|Tmw/my!<yg57+T!iWb\'';
// $trimmed = '13What213are;11you-123+138doing7';
// $trimmed = 'Can 0$9 ---you~';
// $trimmed = '(--9Hello----World...--)';
while (!feof($input)) {
    $trimmed= trim(fgets($input));
    echo trim(str_replace('  ', ' ', preg_replace('/[^a-z]+/', ' ', strtolower($trimmed) ) ) ) . PHP_EOL;
}
fclose($input);

?>
