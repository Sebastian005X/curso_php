<?php 
/*
Las constantes son identificadores, que contienen valores simple pero nunca cambian durante
la ejecución del script. Excepto las constantes magicas.

las constantes se pueden definir con la función define() y su nombre puede empezar por
letras o guiones bajos y seguir con núḿeros o mas letras o guiones bajos.

es buena practica eescribirlas en mayúsculas.
*/

// Nombres validos
define('FOO', 'something');
define('FOO2', 'something else');
define('FOO_BAR', 'something more');

// Nombre invalido
// define('2FOO', 'something');

echo FOO.'<br/>';
echo FOO2.'<br/>';
echo FOO_BAR.'<br/>';

/*
A diferencia de las variables de las variables el scope de las constantes es global, como 
las superglobals,pueden ser accedidas desde cualquier lugar del script.
*/
?>

<!--
  Current: https://www.php.net/manual/en/language.constants.syntax.php
-->