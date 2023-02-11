<?php 
/* 
Los bucles o ciclos me sirven para automatizar tareas repetidas, PHP tiene 3 tipos de bucles, que
son while, do-while y for.
*/

// Bucle while
/* 
Este bucle se repite hasta que de false, en este caso cuando $i llega a 10 se detiene porque $i ya
no es menor que 10. 
*/
$i = 0;
while ($i <= 10) {
  echo $i.'<br/>';
  $i++;
}
echo '<hr/>';

// Bucle do while
/* 
Este bucle tiene la peculiaridad de que anunque la condición no se cumpla igual lo mostara una 
vez.
*/
$i = 0;

do {
  echo $i;
}while ($i !== 0);
echo '<hr/>';

// Bucle for
/* 
En este dentro de este bucle se puede declarar una variable, condición y paso a seguir por
cada vez que se repita el bucle.
*/

// tablas de multiplicar del 1 al 10
for ($i = 1; $i<=10; $i++) {
  echo 'Tabla del {'.$i.'}'.'<br/>';
  for ($e = 1; $e<=10; $e++) {
    echo $i.'x'.$e.'= '.($i * $e).'<br/>';
  }
  echo '<br/>';
}
?>