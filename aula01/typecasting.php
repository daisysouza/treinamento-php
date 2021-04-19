<?php

echo '<pre>';

$var = 10;
var_dump($var);

$cast = (boolean) $var; // torna-se booleano
var_dump($var);

$cast = (int) $var; // torna-se inteiro
var_dump($var);

$cast = (float) $var; // torna-se float
var_dump($var);

$cast = (string) $var; // torna-se string
var_dump($var);

$cast = (array) $var; // torna-se array
var_dump($var);

$cast = (object) $var; // torna-se object
var_dump($var);

$cast = (unset) $var; // torna-se null
var_dump($var);

$cast = (binary) $var; // torna-se binario
var_dump($var);