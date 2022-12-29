<?php  
// sirve para especificar el tipo de dato de los parametros de una función.
function test(int $n1, int $n2) {
  var_dump($n1, $n2);
}

test(1,3);
echo '<br/>';
// test(true,'a'); Da error

function b($a, $b): int { // le especifico que el valor que voy a retornar es un entero
  // return 'a'; esto no retorna nada porque no es de tipo entero
  return $a * $b; // si retorna porque el valor es un entero
}
var_dump(b(1, 3));
?>
<!--
  Current: https://www.php.net/manual/en/language.variables.basics.php
-->