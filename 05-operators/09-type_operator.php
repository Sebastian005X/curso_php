<?php
/* 
Este operador me sirve para saber si una variable es un objeto instanciado de una clase.
*/

class myClass {}
class notMyClass {}

$a = new myClass;

var_dump($a instanceof myClass);
echo '<br/>';
var_dump($a instanceof notMyClass);

// mas ejemplos: https://www.php.net/manual/en/language.operators.type.php
?>

<h1>Current: https://www.php.net/manual/en/control-structures.if.php</h1>