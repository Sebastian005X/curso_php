<?php 
/* 
Estos operadores son los operadores basicos de matematicas como suma, resta o multiplicación. La
división devuelve un float, si se divide por ejemplo "5 / 2 = 2.5" o esto se puede coventir a entero
con la función "intdiv()", para el operando modulo se convierte en entero antes del procesaado,
para modulo tipo float se usa la función "fmod()".

Y tambien siguen el orden de precendencia.
*/

// convertir números en negativos o positivos
echo (-5).'<br/>'; // convierte a negativo
echo (+5).'<br/>'; // convierte a positivo

// operadores
echo (2+2).'<br/>'; // suma
echo (5-2).'<br/>'; // resta
echo (5*2).'<br/>'; // multiplicación
echo (7/2).'<br/>'; // división
echo (20%3).'<br/>'; // modulo
echo (2**3).'<br/>'; // exponenciación o potenciación.

echo '<hr/>';

// División entera
echo (intdiv(5, 2)).'<br/>'; // normalmente daria 2.5

// modulo tipo float
echo (fmod(7.2, 2)).'<br/>';
echo (7.2%2).'<br/>'; // daria normalmente 1
?>

<h1>Current: https://www.php.net/manual/en/language.operators.assignment.php</h1>