<?php

$linguagens = ["PHP", "C#", "Java"];
//echo $linguagens[0];
//echo "<br>";
$linguagens[] = "Python";

var_dump($linguagens);

$curso = ["Curso de PHP Fundamentos", 7.4, 40, true];
$curso = [
        "nome_curso" => "Curso de PHP Fundamentos",
        "versão_ferramenta" => 7.4,
        "carga_horaria" => 40,
        "status" => true
];

//echo $curso ["nome_curso"];
//echo "<br>";
$curso["pre-requisito"] = "Logica de programação";
var_dump($curso);

$numeros = [
    [1, 2, 3, 4],
    [5, 6, 7, 8, 9],
    [10, 11]
];

//echo $numeros[0][2];
//echo "<br>";

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
        "status" => true
    ]
];

$cursos["php"]["pre-requisito"] = "Logica de programação";
echo $cursos["php"]["pre-requisito"];