<?php

// Veificando se existe um diretorio
$name = 'images';
if (!is_dir($name)) {

  // Criando um diretorio caso n�o exista
  mkdir($name);
  echo "Diret�rio $name foi criado com sucesso.";
} else {

  //Removendo o diret�rio
  rmdir($name);
  echo "J� existe o diret�rio: $name";
}

?>