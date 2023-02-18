<?php
/* 
"continue" es usado dentro de estructuras de bucles para saltar una iteración actual, y que siga
con la siguiente iteración. 
*/
$a = ['banano', 'manazana', 'pomelo', 'sandia', 'pera', 'piña'];

foreach ($a as $key => $value) {
  // salta las llaves que sean números pares
  if ($key % 2 === 0) {
    continue;
  }
  echo $key.' '.$value.'<br/>';
}

echo '<hr/>';

$users = [
  [
    'name' => 'Sebastian',
    'premiun' => true
  ],
  [
    'name' => 'Nicolas',
    'premiun' => true
  ],
  [
    'name' => 'Pablo',
    'premiun' => false
  ],
  [
    'name' => 'Rick',
    'premiun' => true
  ],
  [
    'name' => 'John',
    'premiun' => false
  ]
];

foreach ($users as $user) {
  // salta la iteración cuando el usuario no es premiun
  if (!$user['premiun']) {
    continue;
  }
  echo "<h2>$user[name]</h2>";
}
echo '<hr/>';

for ($i = 0; $i<=10; $i++) {
  if ($i % 2 === 0 && $i / 2 <= 1) {
    continue;
  }
  elseif ($i % 4 == 0) {
    echo $i.' es multiplo de 4'.'<br/>';
  }
  else {
    echo $i.'<br/>';
  }
  echo 'Iteración terminada <br/>';
}