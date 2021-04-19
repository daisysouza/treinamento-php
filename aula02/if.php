<?php

$idade = 20;

if ($idade >= 18) {
    echo 'Esta mensagem só será exibida se a condição for verdadeira';

}

echo '<hr>';

if ($idade >= 18) {
    echo 'Esta mensagem só será exibida se a condição for verdadeira';
} else {
    echo 'Mensagem exibida se a condição for falsa';
}

echo '<hr>';

if ($idade >= 21) {
    echo 'Esta mensagem só será exibida se a condição for verdadeira';
} elseif ($idade >= 18) {
    echo 'Alaviação de uma condição extra';
} else {
    echo 'Mensagem exibida se a condição for falsa';
}