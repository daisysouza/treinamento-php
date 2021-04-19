<?php

$taxa = 1.09;

function taxar($valor)
{
    global $taxa;

    $valor = $valor * $taxa;

    return $valor;

}

$preco = 25;

$comTaxa = taxar($preco);

echo "O preço deste livro é $preco. Com taxa $comTaxa";