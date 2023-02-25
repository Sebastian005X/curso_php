<?php
/*
Las arrow functions funcionan igual que las funciones anonimas con la excepcion, de que
para usar variables de un scope exterior es automatico.

Las funciones en flecha usan la siguiente sintaxis:
  fn (lista_de_argumentos) => expresión;
*/

$y = 2;

$func = fn($x, $z=0) => $x + $y + $z;
$a = $func(10, 2);

echo $func(1).'<br/>';
echo $a.'<br/>';
echo '<hr/>';

// usandolo con un array
$numbers = [1,2,3,4,5,6,7,8,9,10];
$even_numbers = array_filter($numbers, fn($num) => $num % 2 === 0); 
var_dump($even_numbers);

?>
<h1>Current: https://www.php.net/manual/en/language.oop5.php</h1>