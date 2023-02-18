<?php 
/* 
La sentencia switch es similar a la sentencia IF en la misma expresión. Pero aveces tu puedes
querer comparar una misma variable con diferentes valores, y ejecutar una pieza diferente de
codigo dependiendo en cual valor la variable es igual.
*/

$movie = 'Matrix';

switch ($movie) {
  case 'Matrix':
    echo 'Ver '.$movie;
  break;
  case 'Transformers':
    echo 'Ver '.$movie;
  break;
  case 'John Wick':
    echo 'Ver '.$movie;
  break;
  case 'Avengers':
    echo 'Ver '.$movie;
  break;
  default:
    echo 'Pelicula no encontrada'; 
  break;
}
echo '<hr/>';

$i = -1;

switch ($i) {
  case 0: 
    echo 'neutro';
  break;
  case $i>0: 
    echo 'positivo';
  break;
  default:
    echo 'negativo';
  break;
}