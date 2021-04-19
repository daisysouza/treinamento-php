<?php

$artilheiro = 'Ronaldo';
$gols = 19;

/**
 * Dependendo do tipo de variável, especificamos a chave de substituição
 * %s = string
 * %f = float
 * %d = int
 */

 $formato = 'O artilheiro do brasileirão, %s, tem %d gols.';

 printf($formato, $artilheiro, $gols);

 echo '<hr>';

 echo sprintf($formato, $artilheiro, $gols);

 echo '<hr>';

 //Substitui %body% por black na string.

$bodytag = str_replace('%body%', 'black', "<body text='%body%'>");

echo "<textarea>$bodytag</textarea>";

echo '<hr>';

$string = 'hello world';

echo ucfirst($string);

echo '<hr>';

echo ucwords($string);

echo '<hr>';

echo strlen($string);