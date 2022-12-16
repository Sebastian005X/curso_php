<?php 
// Los booleanos solo tienen dos valores, True o False.
$foo = true; // Se le asigna un valor booleano de True
$action = 'play';

// Dependiendo de si la condición es verdadera o falsa regresa, true o false
if ($action == 'play') {
  echo 'Is true<br/>';
}

// Esto no es necesario
if ($foo == true) {
  echo 'Is true innecesary<br/>';
}

// esta seria la maneara correcta porque evaluara si es true o false sin necesidad de un operador
if ($foo) {
  echo 'Is true form correct<br/>';
}

// convirtiendo a booleanos
/* 
var_dump((bool) "");        // bool(false)
var_dump((bool) "0");       // bool(false)
var_dump((bool) 1);         // bool(true)
var_dump((bool) -2);        // bool(true)
var_dump((bool) "foo");     // bool(true)
var_dump((bool) 2.3e5);     // bool(true)
var_dump((bool) array(12)); // bool(true)
var_dump((bool) array());   // bool(false)
var_dump((bool) "false");   // bool(true)
*/
?>

<!--
Current: https://www.php.net/manual/en/language.types.integer.php
-->