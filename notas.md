# concatenacion en php
- echo "Hola desde" . "          ". "la consola"; 
Con comilas simples no se puede concatenar, deben ser comillas dobles
- echo "No mi nombre es $nombre $apellido \n";

# debuggear
var_dump($personas);    // muestra el tipo de dato y el valor(informacion de la variable)
pritn_r($personas);     // imprime el array de forma legible

# variables
contantes -> define('nombre', 'valor'); 
define("PI", 3.1416); // no se puede cambiar el valor de la constante

# Casting
(int) $numero;  // castea a entero
(float) $numero;    // castea a float
(string) $numero;   // castea a string
(bool) $numero; // castea a boolean
El casting es para cambiar el tipo de dato de una variable - de manera forzada

operdores logicos

# Presedencia de operadores
1. ()
2. **
3. * / %
4. + -

https://www.php.net/manual/es/language.operators.precedence.php
