<?php

error_reporting(E_ALL);

echo "Inicio do arquivo inclusão.php<br>";

require_once "variaveis-1.php";

// echo "<br>estou mostrando a variável nome no arquivo inclusão.php: $nome";

include_once "funcoes/personalizadas.php";

echo "<br>estou chamando a função somar no arquivo inclusão.php: " . somar(10, 10);

echo "<br>Fim do arquivo inclusão.php";