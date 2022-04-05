<?php

// Passando por toda a pasta e excluindo todas as fotos com unlink
if (!is_dir('images')) mkdir('images');

$scan = scandir("images");
foreach ($scan as $item) {
  if (in_array($item, array('.', '..'))) {
    unlink('images'. DIRECTORY_SEPARATOR . $item);
  }
}
echo 'OK';
?>