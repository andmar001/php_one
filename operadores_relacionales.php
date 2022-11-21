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

var_dump($a !== $b); // false

// less than
var_dump($a < $c); // true

// less than or equal to
var_dump($a <= $b); // true

// mayor que
var_dump($a >= $b); // false

var_dump($a == $b); // true
var_dump($a === $b); // false

// operador nave espacial  <=>
// si el de la izquierda es menor que el de la derecha devuelve -1
echo 2 <=> 1;   // 1 
echo 1 <=> 2;  //  -1
echo 1 <=> 1;  // 0