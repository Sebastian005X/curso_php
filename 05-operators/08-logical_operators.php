<?php
/* 
Los operadores logicos me ayudan a hacer condiciones mas complejas y especificas. Estos operadores
funcionan con dos o mas condiciones que regresen valores booleanos, y lo que hace es regresar true
o false, dependediendo del resultado de las condiciones.

"and" | "&&": $a and $b. Regresa true si ambas condiciones son verdaderas.
"or" | "||": $a or $b. Regresa true si una condición es verdadera.
"xor": $a xor $b. Regresa true si cualquiera es verdadero, pero no ambos.
"not": !$a me devuelve lo cotrario, si es true regresa false, si es false regresa true.

Los operadores "and y &&", y "or, ||" hacen lo mismo lo unico en lo cual se diferencia, es que 
que los operadores "&& y or" tienen mas precedencia que "and y or".

Precedencia: 
!
&&
||
and
xor
or
*/

//and
var_dump(true && true);
echo '<br/>';
var_dump(true && false);
echo '<hr/>';

//or
var_dump(false || false);
echo '<br/>';
var_dump(false || true);
echo '<hr/>';

//xor
var_dump(true xor false);
echo '<br/>';
var_dump(false xor false);
echo '<br/>';
var_dump(true xor true);
echo '<hr/>';

//not
var_dump(!true);
echo '<br/>';
var_dump(!false);
?>
<h1>Current: https://www.php.net/manual/en/language.operators.string.php</h1>