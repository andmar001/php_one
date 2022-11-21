<?php

# 1 hora es 3200 segundos

// Pedir datos al usuario
// $segundos = readline("Ingresa el tiempo en segundos");

#Valor del usuario
$segundos = 3661;

$horas = (int) ($segundos / 3600);    //uso de presedencia de operadores, casteo
$segundos = (int) ($segundos % 3600);
$minutos = (int) ($segundos / 60);
$segundos = (int) ($segundos % 60);

echo "Son $horas horas, $minutos minutos y $segundos segundos";


