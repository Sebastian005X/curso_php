<?php 
/*
"break" se usa para termrinar la ejecución de estructuras de blucles y la estructura switch.

"break" puede resivir un argumento numerico opcional el cual le dice cuantas estructuras anidadas
se van a romper. El valor predeterminado es 1, que solo rompe la estructura envolvente inmediata
*/

$arr = array('one', 'two', 'three', 'four', 'stop', 'five');

foreach ($arr as $a) {
  if ($a === 'stop') {
    break;
  }
  echo $a.'<br/>';
}
echo '<hr/>';

// usando argumento opcional
$i = 0;
while (++$i) {
  switch ($i) {
    case 5:
      echo 'En 5<br/>';
    break 1;

    case 10:
      echo 'En 10 saliendo....<br/>';
    break 2;

    default:
      echo $i.'<br/>';
    break;
  }
}