<?php 
/* 
Las expresiones en php pueden ser asignaciones como "$a = 5". Esto se lee de derecha a izquierda,
ejemplo "$a = $b = 5". Como se lee de derecha a izquierda entonces $b valdra 5 y $a valdra lo
mismo que $b, es decir 5. Hay expresiones mucho mas complicadas como crear variables o usar el 
operador ternario.
*/

// expresiones de assignación
$a = 2;
$b = $a * 2; // valdra a multiplicado por dos
$c = $a + $b; // valdra a + b
$a += 3; // suma 3 al valor actual de la variable y reasigna el resultado
echo $a.'<br/>';
$b -= 2; // resta 2 al valor actual de la variable y reasigna el resultado
echo $b.'<br/>';

/* 
Esto se puede hacer con los operadores basicos de aritmetica. +=, -=, *=, /=, **=, %= 
*/

echo '<hr/>';
// operadores post-incremnet y post-decrement
$a++;
echo $a.'<br/>'; // suma uno al valor actual de la variable y reasigna el resultado
$a++;
echo $a.'<br/>';
$a--;
echo $a.'<br/>'; // resta uno al valor actual de la variable y reasigna el resultado
/* 
Estos dos operadores suman 1 (pre-increment) o restan (pre-decrement) 1 al valor actual de una
variable y reasigna el resultado.
*/

// Declarando una función

function double($a) {
  return $a * 2;
}

$e = 2 + double(6); // del valor que retorne la variable se suma con 2 y eso vale e
echo $e.'<br/>';

echo '<hr/>';

$edad = 14;
// operador ternario
echo $edad >= 17 ? 'Mayor de edad' : 'Menor de edad';
/* 
lo que hace es que evalua una condición y si es true retorna un valor y si no
retorna otro valor. Es parecido a la sentencia if.
*/
?>

<!--
  Current: https://www.php.net/manual/en/language.operators.precedence.php
-->