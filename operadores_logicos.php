
<?php

// sintaxis de operadores lógicos
// AND 
// $valor1 && $valor2;
// $valor1 and $valor2;

// OR  -- uno de los dos tiene que ser verdadero para que sea verdadero
// $valor1 || $valor2;
// $valor1 or $valor2;

// NOT -- negación
// !$valor1;

$gatos_felinos = true;
$gatos_4_patas = true;
$gatos_vuelan = false;
$gatos_leen = false; 

// AND
if ($gatos_felinos && $gatos_4_patas) {
    echo "Los gatos son felinos y tienen 4 patas";
} else {
    echo "Los gatos no son felinos o no tienen 4 patas";
}

var_dump($gatos_felinos && $gatos_4_patas);
var_dump($gatos_felinos && $gatos_leen);

// con una de las 2 es verdadero
var_dump($gatos_vuelan || $gatos_4_patas);