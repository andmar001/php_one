<!-- leer las horas minutos y segundos de un user, para mostrar el time en segundos -->

<?php

$horas = 6;
$minutos = 56;
$segundos = 4;

$horas = $horas * 3600;
$minutos = $minutos * 60;

$time_seconds = $horas + $minutos + $segundos;
echo "El tiempo en segundos es: $time_seconds";


// operaciones de manera resumida 

// $total = ($horas * 3600 * 60 * 60) + ($minutos * 60);
// echo "El tiempo en segundos es: $total";