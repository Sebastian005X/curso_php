<?php 
/* 
En php las funciones pueden retornar valores para usarlos en diferentes operaciones o 
guardarlos en variables.
*/

function square($num) {
  return $num * 2;
}

$result = square(3);
echo $result.'<br/>';
echo square(5);

echo '<hr/>';

// Retornando arreglos
function smalls() {
  return [0, 1, 2];
}

[$zero, $one, $two] = smalls();
echo $zero.'<br/>';
echo $one.'<br/>';
echo $two.'<br/>';