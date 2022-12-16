<?php 
$a_bool = true; // un boleano
$a_str = 'foo'; // una cadena de caracteres
$a_str2 = 'foo'; // una cadena de caracteres
$an_int = 12; // un entero

echo get_debug_type($a_bool), '<br/>';
echo get_debug_type($a_str), '<br/>';

// Si es un entero es incrementado por 4
if (is_int($an_int)) {
	$an_int += 4;
}
var_dump($an_int);
echo '<br/>';
var_dump($a_str2);

// Si es un string
if (is_string($a_bool)) {
	echo 'String: ', $a_bool;
}
?>
<!--
current: https://www.php.net/manual/en/language.types.type-system.php
-->