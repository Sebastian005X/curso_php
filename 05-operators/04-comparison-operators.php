<?php 
/* 
Son operadores que me permiten comparar dos valores, para definir diferentes sentencias 
dependiendo de una condición.

OPERRADORES DE COMPARACIÓN:

*******************************************
igual a: $a == $b

identico a: $a === $b

diferente a: $a != $b

no identico a: $a !== $b

menor que: $a < $b

mayor que: $a > $b

menor o igual que: $a <= $b

mayor o igual que: $a >= $b

spaceship: $a <=> $b
*******************************************
Tabla de contenidos:
https://www.php.net/manual/en/language.operators.comparison.php
*/

var_dump(1 > 2);
echo '<br/>';
var_dump(1 == '1');
echo '<br/>';
var_dump(1 === '1'); // esto me dice si son iguales, pero tambien si son del mismo tipo
echo '<br/>';
var_dump(1 !== '2'); // esto me dice si no son iguales, pero tambien si no son del mismo tipo
echo '<br/>';
var_dump(1 <= 2);
echo '<br/>';
var_dump(5 >= 2);
echo '<br/>';
var_dump(8 <=> 9);
echo '<br/>';
var_dump([1,2,3] === [1,2,3]);
echo '<hr/>';
/* 
El operador spaceship devuelve:

0 si es igual
-1 si el primer valor es menor que el de la derecha
1 si es mayor que el de la derecha
*/

/* 
Operador ternario:

Evalua una codición y dependiendo de la expresión devolvera un valor o otro.
*/
echo 1 > 5 ? 'mayor' : 'menor';
echo '<br/>';
echo (71 == 6 ? 'igual' : 8 < 6) ? 'Menor' : 'Mayor'; 

echo '<hr/>';
/* 
Operador Null Coalesing:

Evalua si una expresión es de tipo null o no existe y la devuelve si no es null y si, no toma un
valor por defecto.
*/
$a = null;
$b = $a ?? 'default';
echo $b;
echo '<br/>';
echo $name ?? 'por defecto';
echo '<br/>';

$a = ['mexico', 'Colombia', 'Ecuador'];
echo $a[1] ?? $a[7] ?? 'Not found';
?>

<h1>Current: https://www.php.net/manual/en/language.operators.errorcontrol.php</h1>