<?php 
/* 
El scope es, el alcanze que tiene una varvariable en el contexto que
fue definida.
*/
$a = 1; // hae referencia al scope global

// entorno local
function test() {
  // aqui solo se pueden usar variables locales
  $a = 2;
  echo $a.'<br/>'; // hace referencia a un scope local
}
test();
echo $a.'<br/>';
echo '<hr/>';

$a = 2; $b = 1; // variiables globales
// Usando variables globales en entornos locales.
function sum() {
  global $a, $b;

  $b = $a + $b;
}
sum();
echo $b;

echo '<hr/>';

// las variables estaticas
/* 
Las variables estaticas solo existenten en una función local pero cuando, el programa sale de esa
función, la variable sigue manteniendo su valor.
*/
function static_variable() {
  static $a = 0;
  echo $a.'<br/>';
  $a++;
}
static_variable();
static_variable();
static_variable();
static_variable();
/* como podemos ver la función muestra la variable 
y luego la suma una vez y se mantiene su valor en cada invocación de la variable.
*/

/*
variable estatica usada por una función recursiva. Una función recursiva, es una función que se llama
haci misma, generadndo un bucle.
*/

function recursion() {
  static $count = 0;

  $count++;
  echo $count.'<br/>';
  if ($count < 10) {
    recursion();
  }
  $count--;
  echo 'cuenta regresiva: '.$count.'<br/>';
}

echo '<hr/>';
recursion();
?>

<!--
  Current: https://www.php.net/manual/en/language.variables.variable.php
-->