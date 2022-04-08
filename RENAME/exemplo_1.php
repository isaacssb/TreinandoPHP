<?php
$dir1 = "folder_01";
$dir2 = "folder_02";

if (!is_dir($dir1)) mkdir($dir1);
if (!is_dir($dir2)) mkdir($dir2);

$filename = 'README.txt';

if (!file_exists($dir1 . DIRECTORY_SEPARATOR . $filename)) {
  $file = fopen($dir1 . DIRECTORY_SEPARATOR . $filename, 'w+');

  fwrite($file, date('Y-m-d H:i:s'));

  fclose($file);

}

// A funчуo rename move um arquivo de um diretorio para outro
// O nome rename pode ser estranho, jс que vocъ vai mover um arquivo
// Porщm pensando em como o sistema operacional funciona, com a funчуo rename estс renomeando o caminho do arquivo
// Sendo assim faz sentido ser rename()
rename($dir1 . DIRECTORY_SEPARATOR . $filename, $dir2 . DIRECTORY_SEPARATOR . $filename);
?>