<?php 
// accediendo a datos enviados desde un formulario html
if ($_POST) {
  $name = $_POST['name'];
  $last_name = $_POST['last-name'];

  echo 'Tu nombre es: ' ,htmlspecialchars($name);
  echo '<br/>';
  echo 'Tu apellido es: ' ,htmlspecialchars($last_name);
}
?>

<form action="03-variables_from_external_source.php" method="POST">
  <input type="text" name="name" placeholder="nombre">
  <input type="text" name="last-name" placeholder="apellido">
  <button type="submit">Enviar</button>
</form>

<!-- 
  Current: https://www.php.net/manual/en/language.constants.php 
-->