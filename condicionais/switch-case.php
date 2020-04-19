<?php

$a = 4;

switch ($a) {
    case 0: 
        echo "Tenho valor 0";
    break;

    case 1:
        echo "Tenho valor 1";
        break;
        
    case 2:
    case 3:
    case 4:
    case 5:
        echo "Tenho valor de 2 a 5";
        break;

    default:
        echo "Número não encontrado.";
        break;
}

echo "<br>";

$curso = 'JAVA';

switch ($curso) {
    case 'PHP':
    echo "Curso de PHP";
        break;

    case 'JAVA':
    echo "Curso de Java";
        break;

    default:
    echo 'Nenhum curso encontrado';
        break;
}