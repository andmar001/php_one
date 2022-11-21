<?php

$contador = 1;
$res = $contador++;

// echo $res;

$valor = 10 - 10 * 10 + 10 ;
echo $valor;

// orden 
$valor = 10 - (10 * 10) + 10 ;
echo $valor;

// asociatividad izquierda a derecha
echo "El valor es de: ", 1 - 2 - 3;

// asociatividad derecha a izquierda
echo "El valor es de: ", 1 - (2 - 3);

// derecha a izquierda
$c = 10;

$a = $b = $c;

echo $a;

$michis_4_patas = true;
$michis_programan = false;
$resultado = $michis_4_patas and $michis_programan;

var_dump($resultado);

#presedencia de operadores de "and" es de izquierda a derecha

($resultado = $michis_4_patas) and $michis_programan;
// true and false;   ----> true
