<?php

// Uso muito comum antes da introdução do null coalescing
$nome = !empty($_GET['nome']) ? $_GET['nome'] : 'sem nome';

// Null coalescing em ação
$nome = $_GET['nome'] ?? 'sem nome';

echo $nome;



