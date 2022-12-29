<?php 

/*
Las variable variables, son variables cuyos nombres dependen del 
valor de otra variable
*/
$nombre = 'Pedro';
$$nombre = 'Hola soy Pedro';

echo $nombre.'<br/>'; 
echo $Pedro;
echo '<hr/>';

$a = 'c';

$$a = 'x';
echo $a.'<br/>'; 
?>