<?php 
// los strings pueden ser cualquier caracter
$str = 'World';
echo $str.'<br/>';

// Se representan dentro de comillas simples o dobles
echo "Hola".'<br/>';
echo 'Mundo'.'<br/>';

// Tambien podemos saber su tamaño
echo strlen($str).'<br/>';

echo '<hr/>';
// podemos accceder a un indice especifico, comienza en 0
echo $str[0].'<br/>';
echo $str[2].'<br/>';
echo $str[strlen($str)-1].'<br/>'; //accedemos al ultimo indice sin saber cual es su tamaño

echo '<hr/>';

// con las comillas dobles podemos concatenar variables
echo "Hello $str".'<br/>';

// el operador . y , concatenan 2 o mas cadenas de caracteres
echo "Hola "."usuario<br/>";
echo "Hola ","usuario<br/>";

echo '<hr/>';

// PHP puede considerar enteros o floats a un string con valor númerico
echo ('1' + 5).'<br/>';
echo ('12.4' + 2.3).'<br/>';

// conversion
var_dump((string) 12);
echo '<br/>';
var_dump((string) 1.223);
?>

<!--
Current: https://www.php.net/manual/en/language.types.array.php
-->