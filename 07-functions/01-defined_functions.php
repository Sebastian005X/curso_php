<?php
/* 
Una función en programación puede usarse para reutilizar codigo o organizarlo en una estructura
mas entendible. En php se puede escribir cualquier tipo de codigo dentro de una función.una 
función se define con la palabra clave "function" y su nombre tiene que iniciar con una letra
o guión bajo y de ahi puede seguir con mas letras, números o guiones bajos.

Una función puede ser definida despues de ser referenciada o invocada, excepto cuando es
definida en un condicional.
*/

function say_hello() {
  echo 'Hello';
}

// la función solo es ejecutada cuando se invoca
say_hello();
echo '<hr/>';

//función dentro de un condicional
$makefood = true;

bar(); //correcto
//foo(); //error

if ($makefood) {
  function foo() {
    echo '1 Solo existo hasta que el programa llegue a esta bloque de codigo <br/>';
  }
}

if ($makefood) foo();

function bar() {
  echo '2 existe cuando el programa se ejecuta<br/>';
}
echo '<hr/>';


// función dentro de otra función
function fuu() {
  function zar() {
    echo 'Solo existo cuando fuu es llamada<br/>';
  }
}

//zar(); Esto no se puede ya que esta función solo existe cuando la función foo() es llamada
fuu();
zar();
zar();
echo '<br/>';
/* 
En php las clases y las funciones tienen un scope global, pueden ser llamadas afuera o dentro de 
funciones, incluso si estas fueron declaradas dentro de otras funciones.
*/

// funciones recursivas

function recursion($a) {
  if ($a < 20) {
    echo $a.'<br/>';
    recursion($a + 1);
  }
} 

recursion(1);