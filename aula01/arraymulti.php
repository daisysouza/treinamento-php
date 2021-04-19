<?php

$temperaturas = [
    '2008'  => [
        'janeiro'   => 30,
        'fevereiro' => 32,
        'março'     => 29
    ],    
    '2009'  => [
        'janeiro'   => 31,
        'fevereiro' => 34,
        'março'     => 30
    ],
    '2010'  => [
        'janeiro'   => 32,
        'fevereiro' => 34,
        'março'     => 28
    ],

];

echo "A temperatura em janeiro de 2008 foi de {$temperaturas['2008']['janeiro']} graus";

