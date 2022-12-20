<?php 
// Un array en php puede ser tratado como un diccionario, objeto o una lista (verctor)
// Declaración de array con un constructor
$array = array(
  'foo' => 'bar',
  'bar' => 'foo'
);

// Declaración de manera corta
$array = [
  'foo' => 'bar',
  'bar' => 'foo',
  1 => 'uno',
  1.5 => 'dos',
  true => 'tres'
];
// array usado como una lista de elementos
$array = [['foo', 'foo2'], 'bar', 'hello'];

var_dump($array);
echo '<hr/>';
// Accediendo a los valores de un array tipo lista
echo $array[1].'<br/>';
// cambiando un indice del array, si la clave no exite la agrega
$array[2] = 'World';
$array[3] = 'Hello';
echo $array[2].'<br/>';
echo $array[3].'<br/>';
var_dump($array);
echo '<br/>';
// accediendo a un array multidimensional
echo $array[0][1].'<br/>';

echo '<hr/>';
// array tipo diccionario o objeto
$array = [
  'name' => 'Sebastian',
  'lastName' => 'Morales',
  'address' => [
    'country' => 'Colombia',
    'city' => 'Medellin'
  ],
  'social' => ['facebook', 'Twitter', 'Linkedin', 'Instagram']
];
var_dump($array);
echo '<br/>';
// cambiando valor de un array tipo diccionario
$array['name'] = 'Juan'; 
// Imprimir el tamaño de un array
echo sizeof($array);
echo '<hr/>';
?>

<!DOCTYPE html>
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Arrays</title>
</head>
<body>
  <!--Accediendo a los valores de un array tipo diccionario-->
  <h1>User information</h1>

  <p><b>Name: </b><?php echo $array['name'] ?></p>
  <p><b>lastName: </b><?php echo $array['lastName'] ?></p>
  <h2>Address</h2>
  <ul>
    <li><b>country :</b> <?= $array['address']['country'] ?></li>
    <li><b>City: </b><?= $array['address']['country'] ?></li>
  </ul>

  <h2>Social</h2>
  <ul>
    <?php 
      for ($i=0; $i<sizeof($array['social']); $i++) {
        echo '<li>', $array['social'][$i], '</li>';
      }
    ?>
  </ul>
  <hr/>
</body>
</html>

<?php 
$source_array = ['foo', 'bar', 'baz'];
// array desestructuración
[$uno, $dos, $tres] = $source_array;
echo $uno.'<br/>';
echo $dos.'<br/>';
echo $tres.'<br/>';

// ignorando elementos
[, , $baz] = $source_array;
echo $baz.'<br/>';
echo '<hr/>';

$source_array = [
  'name' => 'Sebastian',
  'age' => 17
];
// desestructrando array tipo objeto

/*
['name' => $nombre] = $source_array;
['age' => $edad] = $source_array;

Esto es lo mismo que lo siguiente
*/
['name' => $nombre, 'age' => $edad] = $source_array;

echo $nombre.'<br/>';
echo $edad.'<br/>';
echo '<hr/>';

$frutas = ['naranja', 'manzana'];
// La funcion 'array_push()' me permite agregar elementos a un array
array_push($frutas, 'fresa', 'pera');
var_dump($frutas);
echo '<br/>';
// para ver mas funciones de array en: https://www.php.net/manual/en/ref.array.php

//expandiendo arrays
$arr1 = [1,2,3]; // [1,2,3]
$arr2 = [...$arr1]; //[1,2,3]
$arr3 = [0,...$arr1]; // [0,1,2,3]
$array4 = [...$arr2, ...$arr3]; // [1,2,3,0,1,2,3]
?>

<!-- 
  Current: https://www.php.net/manual/en/language.types.object.php
-->