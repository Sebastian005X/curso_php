<?php 
/* 
Los operadores de incremento y decremento, solo afectan a los números y strings, incrementa
1 por cada llamada.

--pre: incrementa o decrementa $a por 1, luego retorna $a
post--: retorna $a, luego incrementa o decrementa $a por 1
*/

$str = 'a';
// --pre
echo $str.'<br/>';
echo ++$str.'<br/>';
echo ++$str.'<br/>';
echo --$str.'<br/>'; // los strings no puedden ser decrementados

$num = 10;
echo --$num.'<br/>';
echo --$num.'<br/>';
echo '<hr/>';

// post--
echo $num++.'<br/>';
echo $num.'<br/>';
?>

<h1>Current: https://www.php.net/manual/en/language.operators.logical.php</h1>