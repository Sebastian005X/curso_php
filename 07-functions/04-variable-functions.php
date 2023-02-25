<?php 
/* 
Php soporta el concepto de funciones variables, es decir que cualquier variable que tenga
parentesis de apertura y de cierre sera tomado como la invocación de una variable, la cual
se ejecutara con el nombre de la variable. Los constructores como echo, print, unset, etc
no se pueden usar.
*/

function sayName($name) {
  return "Hello $name.<br/>";
}

$func = 'sayName';

$greet = $func('Sebastian');
echo $greet;

// mas información y ejemplos
// https://www.php.net/manual/en/functions.variable-functions.php