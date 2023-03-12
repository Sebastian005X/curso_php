<?php
/* 
La herencia permite que una clase pueda hederar propiedades y metodos de una clase padre.

Las constantes en las clases son propiedades las cuales hacen parte de la clase, pero se pueden
referenciar por objetos. Usando la siguiente sintaxis "$objeto::CONSTANTE".
*/

class Persona {
  const PLANETA = 'Tierra';
  public $nombre;
  public $edad;

  public function __construct($nombre, $edad=18) {
    $this->nombre = $nombre;
    $this->edad = $edad;

    /* 
    __construct() es una función que se ejecuta cuando una clase es instanciada
    */
  }

  public function saludar () {
    echo "Hola mi nombre es, $this->nombre, tengo $this->edad años.<br/>";
    echo "Soy del planeta ".self::PLANETA."<br/>";

    /*
    "self" hace referencia a una constante declarada en mi clase o a una propiedad o metodo
    estatico en mi clase.
    */
  }
}

// herencia
class Agente extends Persona {
  public $agencia; 

  public function __construct($nombre, $edad=18, $agencia) {
    parent::__construct($nombre, $edad);
    $this->agencia = $agencia;
  }

  public function presentarse() {
    echo "Soy del planeta ".parent::PLANETA.", y pertenesco a la agencia $this->agencia <br/>";
  }
  /* 
  "parent" hace referencia a una propiedad o metodo estatico de la clase de la cual esta 
  heredando.
  */
}

$persona = new Persona('John');
$persona->saludar();
echo $persona::PLANETA;
echo '<hr/>';

$agente = new Agente('Sebastian', 18, 'Cia');
$agente->saludar();
$agente->presentarse();