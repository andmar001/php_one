<?php

echo "Operadores relacionales";

$a ='5';
$b = 5;
$c = 8;
$d = 10;

// igualdad iguales pero no del mismo tipo
var_dump($a == $b); // true

// identico si compara el valor y el tipo de dato
var_dump($a === $b); // false

// diferente
var_dump($a != $b); // false

