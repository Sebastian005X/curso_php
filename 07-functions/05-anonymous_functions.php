<?php
/*
Una función anonima o tambien conocido como closure permite crear funciones sin un nombre
especifico, es util para funciones callbacks y otras cosas. Tambien permite usar variables
de un scope exterior.

las funciones anonimas estan implementadas usando la clase Closure.
*/


// función anonima asignada a una variable
$func = function () {
  echo 'Hola Mundo';
};

$func();
echo '<hr/>';

// Usando variable de un scope exterior
$message = 'Hello World<br/>';

$foo = function($name='anonymous') use ($message) {
  echo "My name is $name, and I say $message<br/>";
};

$foo('sebas');
$foo();