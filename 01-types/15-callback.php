<?php 
// una callback es una función que se pasa como argumento a otra función

// ejemplo 1
function mult($num) {
  echo $num*2;
}

function sum($num) {
  $num += 1;
  mult($num);
}

sum(3);

// ejemplo 2
function rest($n, $fn) {
  $n -= 1;
  $fn($n);
}

rest(3, function($n) {
  echo '<br/>'.($n*2).'<br/>';
});

// ejemplo 3
$arr = ['a' => 1, 'b' => 2, 'c' => 3, 'd' => 4];

var_dump(array_filter($arr, function($k) {
  return $k == 'b';
}, ARRAY_FILTER_USE_KEY));
?>

<!--
  Current: https://www.php.net/manual/en/language.types.declarations.php
-->