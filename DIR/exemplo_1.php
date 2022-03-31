<?php

// Veificando se existe um diretorio
$name = 'images';
if (!is_dir($name)) {

  // Criando um diretorio caso não exista
  mkdir($name);
  echo "Diretório $name foi criado com sucesso.";
} else {

  //Removendo o diretório
  rmdir($name);
  echo "Já existe o diretório: $name";
}

?>