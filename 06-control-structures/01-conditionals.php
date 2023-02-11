<?php 
/* 
Los condicionales nos permiten tomar deciciones dentro de nuestro codigo y hacer cierta acción
dependiendo la acción de la condición.
*/

// if, solo entra en ese bloque si la condición es verdadera
$a = 22;

if ($a >= 18) {
  echo "Eres mayor de edad. Tienes $a años.".'<br/>';
}

// if-else, lo que hace es que si la primera condición no se cumple, entonces entrara el el bloque else.
$num = 3;
if ($num % 2 === 0) {
  echo "$num es un número par.".'<br/>';
}
else {
  echo "$num es un número impar.".'<br/>';
}

/* 
elseif-else-if, evalua todas las condiciones y si ninguna es true entonces, entra en el 
bloque else
*/
$num = -1;
if ($num > 0) {
  echo "$num es un número positivo".'<br/>';
}
elseif ($num < 0) {
  echo "$num es un número negativo".'<br/>';
}
else {
  echo "$num es un número neutro".'<br/>';
}

// tambien pueden estar anidados
$num = '';

if (is_int($num)) {
  if ($num % 2 === 0) {
    echo 'par'.'<br/>';
  }
  else {
    if ($num > 0 && $num % 2 !== 0) {
      echo 'impar'.'<br/>';
    }
    else {
      echo 'negativo'.'<br/>';
    }
  }
}
elseif (is_string($num) && strlen($num) !== 0) {
  echo $num.' No es un número, es un string'.'<br/>';
}
else {
  echo $num.' No es un número, es un string vacio'.'<br/>';
}
?>

<!--Convinandolo con html-->
<?php if (true): ?>
  <p>is equal</p>
<?php elseif (false): ?>
  <p>inequality</p>
<?php else: ?>
  <p>not</p>
<?php endif ?>