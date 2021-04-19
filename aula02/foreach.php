<?php

$cores = ['Ciano', 'Magenta', 'Amarelo', 'Preto'];

foreach ($cores as $cor) {
    echo "$cor<br>";
}
echo'<hr>';
foreach ($cores as $chave => $cor) {
    echo "$chave - $cor<br>";
    
}