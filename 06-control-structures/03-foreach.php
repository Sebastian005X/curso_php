<?php 
/* 
El constructor foreach funciona como un bucle, con la diferencia de que esta orientado a iterar
arrays o objetos. Hay dos formas en las cuales podemos iterar:

foreach (array_o_objeto as $value)
  declaración

foreach (array_o_objeto as $key => $value)
  declaración

la primera forma me tomara los valores del array por cada iteración y los guardara en la variable
$value.

La segunda forma me tomara el indice o llave y tambien tomara el valor, guardandolos en sus 
respectivas variables.

El foreach no afecta al array.
*/
$fruits = ['apple', 'pineapple', 'mango', 'grapefruit'];

foreach ($fruits as $fruit) {
  echo $fruit.'<br/>';
}
echo '<hr/>';

foreach (array(1,2,3,4,5) as $num) {
  echo ($num * 2).'<br/>';
}
echo '<hr/>';

$a = array(1,2,3,4,5);

foreach ($a as $num) {
  echo "$num exponentiation to 2".'<br/>';
  $num **= 2; 
  if ($num % 2 == 0) {
    echo $num.' result is a even number'.'<br/>';
  }
  else {
    echo $num.' result is a odd number'.'<br/>';
  }
  echo '<br/>';
}
echo var_dump($a);

echo '<hr/>';

$people = [
  [
    'name' => 'sebas',
    'nationality' => 'colombian'
  ],
  [
    'name' => 'Jhon',
    'nationality' => 'English'
  ],
  [
    'name' => 'sebas',
    'nationality' => 'American'
  ],
  [
    'name' => 'marcos',
    'nationality' => 'Peruvian'
  ]
];

foreach ($people as $key => $value) {
  echo '<b>User number</b>: '.$key.'<br/>';
  echo '<br/>';
  echo '<b>Name: </b>'.$value['name'].'<br/>';
  echo '<b>Nationality: </b>'.$value['nationality'].'<br/>';
  echo '<br/>';
}

echo '<hr/>';

// desestructurando arrays anidados
$array = [
  [1, 2],
  [3, 4]
];

foreach ($array as list($a, $b)) {
  echo "A: $a; B: $b".'<br/>';
}
echo '<hr/>';

$array = [
  [1, 2, 3],
  [4, 5, 6],
  [7, 8, 9]
];

foreach ($array as [$a, $b, $c]) {
  echo "<b>A:</b> $a; <b>B:</b> $b; <b>C:</b> $c".'<br/>';
}
?>