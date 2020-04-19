<?php
$a = 10;
$b = 20;

var_dump($a == $b);
var_dump($a != $b);
var_dump($a < $b);
var_dump($a > $b);
var_dump($a <= $b);
var_dump($a >= $b);

$d = 10;
$e = "10";

var_dump($d == $e);
//Verifica o tipo de variavel
var_dump($d === $e);
var_dump($d !== $e);