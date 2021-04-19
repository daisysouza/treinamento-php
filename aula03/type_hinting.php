<?php

declare(strict_types = 1);

function imc(int $peso, float $altura) : float
{ 
    return $peso / ($altura * $altura);

}

echo imc(120, 1.85);

//echo '<hr>';

//echo imc([120], 1.85);

//echo '<hr>';

//echo imc(120, "alto");
