<?php
/* 
"require" y "include" me permiten traerme funciones, variables, clases o una estructura html desde
otro archivo. Los dos tienen esa misma funcionalidad pero se diferencian en la forma en que manejan
los errores.

"include" genera un warning y continua con el programa. "require" genera un fatal error y detiene
la ejecución del programa.

Adicionalente tambien extisten "require_once" y "include_once", que hacen lo mismo que sus contrapartes
"require" y "include", pero con la diferencia de que php checa si ya fue incluido, y si es haci
no lo vuelve a incluir.
*/

echo 'usuando funcionalidades llamadas desde otro archivo:<br/>';
require_once './07-return.php';
echo '<hr/>';

//usando una función desde otro archivo
echo promedio(5,5,5);