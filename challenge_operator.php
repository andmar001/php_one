<?php

$es_gato_grande = true;
$gusta_comer = true;
$sabe_volar= false;
$tiene_dos_patas = false;

// what is the result of this expression?

var_dump($es_gato_grande && $gusta_comer);   
// verdadero 
var_dump($es_gato_grande || $sabe_volar);
// verdadero
var_dump($sabe_volar || $tiene_dos_patas);
// falso
var_dump(!$gusta_comer);
// false
var_dump(!$gusta_comer || $es_gato_grande);
// verdadero