<?php

echo '<pre>';

$pessoas = array('João', 'Maria', 'Pedro');
print_r($pessoas);

echo '<hr>';

var_dump($pessoas);

echo '<hr>';

echo $pessoas[1]; //Maria

echo '<hr>';

$temperaturas = [
    'janeiro'   => 30,
    'fevereiro' => 32,
    'março'     => 29


];

//aray em uma string com aspas duplas será avaliada
echo "A temperatura média em janeiro foi de {$temperaturas['janeiro']} graus";

echo '<hr>';

//aqui será literalmente impressa devido às aspas simples
echo 'A temperatura média em janeiro foi de {$temperaturas["janeiro"]} graus';

echo '<hr>';

//uso do operador de concatenação
echo 'A temperatura média em janeiro foi de ' . $temperaturas["janeiro"] . ' graus';







