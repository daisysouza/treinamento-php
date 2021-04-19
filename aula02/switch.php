<?php

$i = 1;

if ($i == 0) {
    echo '$i igual a 0';
} elseif ($i == 1) {
    echo '$i igual a 1';
} elseif ($i == 2) {
echo '$i igual a 2';
}

echo '<hr>';

switch ($i) {
    case 0:
        echo '$i igual a 0';
        break;
    case 1:
        echo '$i igual a 1';
        break;
    case 2:
        echo '$i igual a 2';
        break;

}

echo '<hr>';

$fruta = 'laranja';

switch ($fruta) {
    case 'maçã':
        echo '$fruta é maçã';
        break;
    case 'laranja':
        echo '$fruta é laranja';
        break;
    case 'limão':
        echo '$fruta é limão';
        break;

}

echo '<hr>';

$i = 2;
switch ($i) {
    case 0:
    case 1:
    case 2:
        echo '$i é menor que 3 mas não é negativo';
        break;
    case 3:
        echo '$i é 3';
}

echo '<hr>';

$i = 10;
switch ($i) {
    case 0:
        echo '$i é igual a 0';
        break;
    case 1:
        echo '$i é igual a 1';
        break;
    default:
        echo '$i não é igual a 0, 1 ou 2';

}