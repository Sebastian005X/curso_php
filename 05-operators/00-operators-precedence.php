<?php 
/* 
Cuando un operador en php junta dos expresiones, tiene en cuenta la precedencia del operador
para resolver aquella operación. Ejemplo "2 + 2 * 3" es igual 8 y no a 12 porque el operador
"*" tiene mayor precendencia que el operador de suma, por lo tanto se veria algo 
haci 2 + (2 * 3).

Cuando  dos o mas operadores tienen la misma precedencia estos se asocian y se resolverian de
izquierda a derecha. Ejemplo "1 + 2 - 1" se agruparia "(1 + 2) - 1". Tambien se puede leer de 
derecha a izquierda en una expresión de asignación. Ejemplo "$a = $b = $c = 5" se asociaria
algo haci "$a = $b = ($c = 5)".

Hay operadores que son no asociativos como los de comparación. Es decir que aunque tengan la
misma precedencia no se van a asociar. Ejemplo "1 < 2 > 1", esto es ilegal en php. Encambio
"1 <= 1 == 1", es legal porque el operador "==" tiene menor precendencia que el operador "<=".

La asocietiviad es mas significativa en operadores binarios y ternarios. Esta noción no se aplica
a los operadores unarios. Ejemplo "!!$a", se agruparia "!(!$a)".

Usar parentesis hace que un operador pueda tener mayor precedencia. Ejemplo "2 * (1+2)",
se resolveria primero la suma y luego la multiplicación.

Lista de precedencia de operadores: 
https://www.php.net/manual/en/language.operators.precedence.php
*/

// asociatividad
$a = 3 * 3 % 5; // (3 * 3) % 5
$a = 12 / 6 + (1 + 2); // 12 / 6 + (1 + 2)

echo (true ? 0: true) ? 1 : 2; // (true ? 0: true) ? 1: 2
echo '<hr/>';

$b = 2;
$a = $b += 3; // $a = ($b += 3)

// Orden de evaluación indefinido
$a = 1;
echo $a + $a++; // puede imprimir 2 o 3
echo '<hr/>';

// +, - y tener la misma precendencia
$x = 4;
echo 'x menos 1 es igual a '.($x-1).' o eso esperaba'; // esto estaria correcto
// echo 'x menos 1 es igual a '.$x-1.' o eso esperaba'; esto daria error
?>

<h1>Current: https://www.php.net/manual/en/language.operators.arithmetic.php</h1>