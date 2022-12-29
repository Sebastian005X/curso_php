<?php 
/*
Las variables inician con un simbolo de dolar
y empieza con una letra o un guión bajo.
*/

$foo = 'hola';
$bar = $foo; //se le asigna el valor de la otra variable 
$bar = $bar.' mundo'; // cambiamos su valor

echo $foo.'<br/>';
echo $bar.'<br/>';

$var = &$foo; // hace una referencia a la variable y comparten el mismo espacio en memoria.
$var = 'mundo';

echo $foo.'<br/>';
echo $var.'<br/>';

$foo = 'Taco';

echo $foo.'<br/>';
echo $var.'<br/>';
// esto hace que si una de las 2 variables cambien, la otra tambien cambiara.

echo '<hr/>';
// Una buena practica es que inicializemos las variables dependiendo de su tipo de dato asi.
// booleanos en false
$booleans = false;
// enteros y floats en 0
$num = 0;
// strings en una cadena vacia
$string = '';
// arrays en llaves vacias
$array = [];
?>

<!--
  Current: https://www.php.net/manual/en/language.variables.scope.php
-->