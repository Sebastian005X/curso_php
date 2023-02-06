<?php 
/* 
Este operador se representa con comillas invertidas (``). Lo que me permite hacer es
ejecutar comandos del sistema cuando ejecute un script.
*/

/* 
Esto ejecutaria comandos de mi sistema y haria las operaciones como mostrar los archivos o
directorios, o crear archivos.
*/
$output = `ls`;
echo $output;
?>
<h1>https://www.php.net/manual/en/language.operators.increment.php</h1>