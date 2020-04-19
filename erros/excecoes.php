<?php

$divisor = 1;

try {
    if ($divisor == 0) {
        throw new Exception("Não é possível dividir por 0, defina um valor maior que 0", 1);        
    }

    $valor = 100/$divisor;
    echo $valor;

} catch (\Throwable $th) {
    echo $th->getMessage();
}