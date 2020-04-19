<?php

$cursos = [
    "php" => [
        "nome_curso" => "Curso de PHP Fundamentos",
        "versão_ferramenta" => 7.4,
        "carga_horaria" => 40,
        "status" => true
    ],
    
    "java" =>[
        "nome_curso" => "Curso de Java Fundamentos",
        "versão_ferramenta" => 11.4,
        "carga_horaria" => 30,
        "status" => false
    ],

    "c#" =>[
        "nome_curso" => "Curso de Java C# Fundamentos",
        "versão_ferramenta" => 5,
        "carga_horaria" => 60,
        "status" => true
    ]
];

foreach ($cursos as $curso){

    if ($curso['status'] == false) {
        continue;
    }
    echo $curso['nome_curso'];
    echo "<br>";
    echo "Versão da linguagem: {$curso['versão_ferramenta']}";
    echo "<br>";
    echo "Carga Horária: {$curso['carga_horaria']}";
    echo "<br>";
    echo "Status: {$curso['status']}";
    echo "<br><br>";

}