<?php
// Pegando todas as imagens da pasta informada
$images = scandir("images");

$data = array();

foreach ($images as $img) {
  // Fun��o in_array verificar se um valor existe
  if (!in_array($img,array('.', '..'))) {
    $filename = "images" . DIRECTORY_SEPARATOR . $img;

    //Retorna informa��es sobre um caminho de arquivo
    $info = pathinfo($filename);

    // filesize tr�s o tamanho do arquivo
    $info['size'] = filesize($filename);

    $info['url'] = "http://localhost/arquivos/dir/".$filename;

    // filemtime retorna uma altera��o do arquivo
    $info['modified'] = date("d/m/Y H:i:s", filemtime($filename));

    array_push($data, $info);
  }
  echo json_encode($data);
}
?>