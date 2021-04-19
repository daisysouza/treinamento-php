<?php

/**
* Sintaxe para definição de uma funçao
 */

function nomeDaFuncao($arg_1, $arg_2, /* ..., */ $arg_n)
{
    $mensagem = "Exemplo de função.\n";

    return $mensagem; // valor retornado
    }

    /* -----------------------------------*/

    /**
     * Função simples para teste
     */
    
     function negrito($texto)
     { $negrito = "<strong>$texto</strong>";
        return $negrito;
        
     }

     echo negrito('olá mundo');

     echo'<hr>';

     function imc($peso, $altura)
     {
        return $peso / ($altura * $altura);
     }
     echo imc(120, 1.85);

     echo '<hr>';

     function iogurteira($sabor, $tipo = "azeda")
     {
        return "Fazendo uma taça de $sabor $tipo";
      
     }

     echo iogurteira('framboesa'), '<br>';
     echo iogurteira('morango', 'chantily'), '<br>';

     echo '<hr>';

     function iogurteira2($tipo = "azeda", $sabor)
     {
        return "Fazendo uma taça de $sabor $tipo";
      
     }

     echo iogurteira2('framboesa'), '<br>';

