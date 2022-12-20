<?php
enum Estatus: string {
  case OPEN = 'Abierto';
  case PUBLISHED = 'Publicado';
  case ARCHIVED = 'Archivado';
}

function est(Estatus $estatus) {
  echo $estatus->name;
}

est(Estatus::ARCHIVED);

?>
<!--
  Current: https://www.php.net/manual/en/language.types.callable.php
-->