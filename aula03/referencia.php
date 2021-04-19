<?php

function adicionar(&$fruta)
{
    return ++$fruta;
}

$laranjas = 5;

echo $laranjas;

echo '<hr>';

echo adicionar($laranjas);

echo '<hr>';

echo $laranjas;