<?php 
/* 
El operador de asignación mas basico es el "=", has ademas otros que me permiten escribir menos
codigo, este operador puede usarse con otros operadores como los aritmeticos, los de bits y otros.
Aqui hay una lista.  https://www.php.net/manual/en/language.operators.assignment.php
*/

// usando operadores de asignación aritmeticos:
$a = 1;
$a += 2; // esto es equivalente a "$a = $a + 2"
echo $a.'<br/>';

/* 
Toma el valor de mi variable y hace una operación con el y reasigna el resultado
a la variable, esto se pueden hacer con todos los operadores aritmeticos, solo es colocar el 
operador aritmetico al principio y luego el operador de asignación, ejemplo:

$a *= 4 es lo mismo que $a = $a * 4 
*/

$a **= 2; // ES equivalente a  "$a = $a ** 2"
echo $a.'<br/>';

// concatenando texto
$b = 'Hola';
echo $b.'<br/>';
$b .= ' Mundo'; // es equivalente a $b = $b.' Mundo'
echo $b.'<br/>';

/*
$a += $b	$a = $a + $b	Addition
$a -= $b	$a = $a - $b	Subtraction
$a *= $b	$a = $a * $b	Multiplication
$a /= $b	$a = $a / $b	Division
$a %= $b	$a = $a % $b	Modulus
$a **= $b	$a = $a ** $b	Exponentiation
*/
?>

<h1>Current: https://www.php.net/manual/en/language.operators.bitwise.php</h1>