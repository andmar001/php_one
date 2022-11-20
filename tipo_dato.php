<?php

$numerito = "121";
$valor = $numerito + 1;

// conversion de valor
var_dump($numerito);
var_dump($valor);

// FLoat
$number  = 1000;
$number = $number + 1.7289;
var_dump($number);


//php detecta el tipo de dato aunque este en un string
$papas = "10 papas";
$total_papas = $papas + 41;
var_dump($total_papas);