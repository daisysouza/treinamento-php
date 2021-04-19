<?php

$cores = ['Ciano', 'Magenta', 'Amarelo', 'Preto'];

while (list(, $cor) = each($cores)) {
    echo "$cor<br>";

}

echo '<hr>';

for ($chave = 0; $chave < count($cores); $chave++) {
    echo "$chave - {$cores[$chave]}<br>";
}

echo '<hr>';

$pessoas = [
    [
        'nome' => 'Paulo Antunes',
        'dataNascimento' => '1985-5-13',
        'e-mail' => 'paulo.antunes@gmail.com'

    ],

    [
        'nome' => 'Joana Nascimento',
        'dataNascimento' => '1978-07-05',
        'e-mail' => 'joana@hotmail.com'

    ]
];

foreach ($pessoas as $chave => $pessoas) {
    echo '<hr>';
    echo "Pessoas => $chave<br>";

    foreach ($pessoas as $campo => $dado) {
        echo "$campo: $dado<br>";
    }
    echo '<br>';
}