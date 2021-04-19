<?php

$i = 0;

while($i++ < 5) {
    echo 'Externo<br>';

    while (1) {
        echo 'Meio<br>';

        while (1) {
            echo 'inreno<br>';
            continue 3;
        }

        echo 'Isso nunca recebe saída.<br>';
    }
    echo 'Nem isso.<br>';
}
