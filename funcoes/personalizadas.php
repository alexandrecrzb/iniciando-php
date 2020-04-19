<?php

function somar ($valor1, $valor2) {
    echo "<br>antes do return ";
    return $valor1 + $valor2;
    echo "depois do return, nunca é chamado";
}

$soma = somar(12, 10);

echo $soma;
echo "<br>";

$soma2 = somar(120, 10);

echo $soma2;
echo "<br>";

echo somar(13, 90);
echo "<br>";