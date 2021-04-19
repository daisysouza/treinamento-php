<?php

$arr = [
    'um',
    'dois',
    'três',
    'quatro',
    'para',
    'cinco'

];

while (list(, $val) = each($arr)) {
    if ($val == 'para') {
        break;
    }

    echo "$val, ";
}

echo '<hr>';

/* Usando o argumento opcional */

$i = 0;

while (++$i) {
    switch ($i) {
        case 5:
            echo "No 5<br>";
            break 1; /* Sai somente do swetch */
        case 10:
            echo "No 10; encerrando<br>";
            break 2; /* Sai do swetch e do while */   
            default:
                break;
    }
}