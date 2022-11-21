<?php

// operadores de asignacion
$edad_antonio = ($edad_pedrito = 200) + 11;
echo $edad_antonio;

echo  "La edad de Antonio es de $edad_antonio años";
echo  "La edad de Pedrito es de $edad_pedrito años";

// Operadores de incremeno

$contador = 1;
$contador = $contador + 1;
echo $contador;

$contador_2 = 1;
$contador_2++;
echo "Valor del nuevo contador ". $contador_2;

$multi = 10;
$multi *= 2;
echo $multi;

$division = 10;
$division /= 2;
echo $division;

$resta = 10;
$resta -= 2;
echo $resta;

#Concatenacion en strings
$nombre = "Carlos";
$nombre .= " Santana";
echo $nombre;


$valor = 1;
++$valor;

echo $valor;