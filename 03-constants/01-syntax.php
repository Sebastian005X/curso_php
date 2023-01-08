<?php 
/* 
Las constantes no pueden ser indefinidas.

Para declarar una constante se puede usar la función define() o la palabra clave const.

La palabra reservada const tiene ciertas restricciones como solo se pueden usar expresiones
escalares como int, float, bool y string o arrays que contengan expresiones escalares.
*/

// Definiendo constantes
define('CONSTANT', 'Hello World');
echo CONSTANT;
// echo Constant; Emite un error por no estar definida
echo '<hr/>';

// Definiendo constantes con la palabra reservada const
// simple valor escalar
const WORD = 'Hola Mundo';
echo WORD.'<br/>';

// expresión escalar
const ANOTHER = CONSTANT.'; Goodbye world';
echo ANOTHER.'<br/>';

const ANIMALS = ['cat', 'dog', 'horse', 'bird'];
var_dump(ANIMALS);
echo '<br/>'.ANIMALS[1].'<br/>';

echo '<hr/>';
// constante array
define('NEW_ANIMALS', array_filter(ANIMALS, function($v, $k) {
  return $v != 'horse';
}, ARRAY_FILTER_USE_BOTH));

var_dump(NEW_ANIMALS);
echo '<hr/>';

// Esto no se puede hacer con la palabra reservada const encambio con la función define() si.
/*
const NEWA = array_filter(ANIMALS, function($v, $k) {
  return $v != 'dog';
}, ARRAY_FILTER_USE_BOTH);

var_dump(NEWA); 
*/

// función en constante
define('SAY_HELLO', function () {
  echo 'Hello'.'<br/>';
}); 

var_dump(SAY_HELLO);

// esto no se puede hacer con la palabra reservada const.
/*
const SAY_HELLO = function () {
  echo 'Hello'.'<br/>';
}*/

/* 
Las constantes declaradas con la palabra reservado const no pueden ser declaradas dentro de 
funciones, loops, sentencia if o bloques try y catch.

php tiene constantes magicas donde su valor depende en cual linea sea puesta. Aqui esta la
lista: 
https://www.php.net/manual/en/language.constants.magic.php 
*/
?>

<!--
  Current: https://www.php.net/manual/en/language.expressions.php
-->