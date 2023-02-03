<?php 
/* 
Este operador me permite manejar los errores de expresiones, se usa con el simbolo de
"@", este se coloca antes de la expresion y lo que hace es que me suprime ese error y
continua con el programa.
*/

/* 
Aqui php interpreta la linea y intenta abrir ese archivo, pero como no existe da error, pero
como tiene el operador de error antes de la expresion, el error se suprime y php continua 
con el resto del programa.
*/
$fp = @fopen("nosuchfile.txt","r");

/* 
La variable $b no existe. Esto normalmente imprimiria un error, pero como tiene el operador de
error al principio, php lo ignora.
*/
$a = @$b + 1;
echo 'hello';

/*
NOTA: Solo funciona con errores de tipo warning, no con fatal errors
*/
?>

<h1>https://www.php.net/manual/en/language.operators.execution.php</h1>