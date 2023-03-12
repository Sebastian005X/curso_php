<?php
// Las clases en php se definen con la plabara reservada "class" + "nombre de la clase"

class Person {
  // propiedades
  public $name;
  public $age;

  private function null() {
    echo 'sin datos<br/>';
  }

  // metodo
  public function print_info() {
    if ($this->name === null || $this->age === null) {
      $this->null();
    } 
    else {
      echo "nombre: $this->name <br/>";
      echo "edad: $this->age <br/>";
    }
  }
  /* 
  $this me permite hacer referencia a las propiedades o metodos que estan dentro de mi clase.
  */
}

// creando un nuevo objeto instanciado por la clase Person
$person1 = new Person();
$person1->print_info(); // usando un metodo del objeto

// accediendo y editando sus propiedades
$person1->name = 'Juan';
$person1->age = 13;

$person1->print_info();
echo '<hr/>';

// creando otro objeto
$persona2 = new Person();
$persona2->name = 'Juan Jose';

echo $persona2->name;