<?php 
// Un entero es un conjunto de números = {...,-3,-2,-1,0,1,2,3,..}
$a = 12; // decimal
$a = 0123; //octal equivalente a 83 en decimal
$a = 0o123; // octal
$a = 0x1A; // hexadecimal equivalente a 26 decimal
$a = 0b11111111; // binario equivalente a 255

// tamaño maximo de un entero
echo PHP_INT_SIZE.'<br/>';
// maximo valor entero
echo PHP_INT_MAX.'<br/>';
// minimo valor entero
echo PHP_INT_MIN.'<br/>';
echo '<hr/>';

//los numeros que se pasen de estos valores seran convertidos a tipo float
var_dump(25/7);
echo '<br/>';
var_dump((int) (25/7)); // ignora la parte decimal
echo '<br/>';
var_dump(round(25/7)); // redondea el valor
echo '<br/>';

// convertir a entero
/* 
true = 1
false = 0
'12' = 12
null = 0
1.23 = 1
*/

?>

<!--
Current: https://www.php.net/manual/en/language.types.float.php
-->