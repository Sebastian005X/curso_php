<?php 
/* 
Las variables en php pueden resivir argumentos para hacer una operación con ellos.

Estos pueden tener un valor por defecto si es que no se le pasa ese parametro a la 
función.
*/

function sum($a, $b) {
  echo ($a + $b).'<br/>'; 
}

sum(1,2);
sum(30,-8);
echo '<hr/>';

// argumentos con valores por defecto
function coffee($type='cappucino') {
  echo "El cafe es de tipo $type. <br/>";
}

coffee(); // usa el valor por defecto
coffee('cafe con leche'); // aqui ya tiene un valor personalizado
echo '<hr/>';

// usando ... para tomar un número de argumentos n y manejarlos como arrays. 
function sum_arg(...$nums) {
  $sum = 0;
  foreach($nums as $num) {
    $sum += $num;
  }
  echo $sum.'<br/>';
}

sum_arg(1,2,3,4,9,9,2,3,3);
$arr = [2,55,33,3,2];

sum_arg(...$arr);