<?php

echo '<pre>';

$a = '5';

var_dump($a);
var_dump(+$a); //Converter para integer ou float
var_dump(-$a); //Converte para integer ou float negativo

$b = '5.3';

var_dump($b);
var_dump(+$b); //Converter para integer ou float
var_dump(-$b); //Converte para integer ou float negativo

$c = $a + $b;
var_dump($c);

$c = $a - $b;
var_dump($c);

$c = $a * $b;
var_dump($c);

$c = $a / $b;
var_dump($c);

$c = $a % $b;
var_dump($c);

$c = $a ** $b;
var_dump($c);