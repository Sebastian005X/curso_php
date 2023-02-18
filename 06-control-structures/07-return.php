<?php 
/* 
La sentencia return es usualmente usada en funciones y lo que hace es que me regresa un valor, el cual 
lo puedo almacenar en una variable o usar en una expresión.

Se pueden regresar ints, floats, string o arrays.
*/

function promedio ($nota1, $nota2, $nota3) {
  return ($nota1+$nota2+$nota3)/3;
  /* 
  Esto es equivalente a:

  $promedio = ($nota1+$nota2+$nota3)/3;
  return $promedio;
  */
}

$mi_promedio = promedio(5,3,4);
echo 'El promedio es: '.$mi_promedio;
echo '<hr/>';

// usado en una expresión
echo 'El promedio es: '.promedio(3,4,4);