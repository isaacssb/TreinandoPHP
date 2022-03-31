<?php
// Pegando todas as imagens da pasta informada
$images = scandir("images");

$data = array();

foreach ($images as $img) {
  // Funчуo in_array verificar se um valor existe
  if (!in_array($img,array('.', '..'))) {
    $filename = "images" . DIRECTORY_SEPARATOR . $img;

    //Retorna informaчѕes sobre um caminho de arquivo
    $info = pathinfo($filename);

    // filesize trсs o tamanho do arquivo
    $info['size'] = filesize($filename);

    $info['url'] = "http://localhost/arquivos/dir/".$filename;

    // filemtime retorna uma alteraчуo do arquivo
    $info['modified'] = date("d/m/Y H:i:s", filemtime($filename));

    array_push($data, $info);
  }
  echo json_encode($data);
}
?>