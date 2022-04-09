<?php
//Gerando uma thumbnail
header("Content-type: image/jpeg");

$file = 'wallpaper.jpg';

$new_windth = 256;
$new_height = 256;

list($old_windth, $old_height) = getimagesize($file);

$new_image = imagecreatetruecolor($new_windth, $new_windth);
$old_image = imagecreatefromjpeg($file);

// 1� Imagem destino
// 2� Imagem de origem
// 3� e 4� s�o x e y da imagem destino (isso voc� pode recortar a imagem)
// 5� e 6� s�o x e y da imagem de origem (isso voc� pode recortar a imagem)
// 7� e 8 s�o largura e altera da imagem destino
// 9� e 10 s�o largura e altera da imagem origem
imagecopyresampled($new_image, $old_image ,0 , 0, 0, 0, $new_windth, $new_height, $old_windth, $old_height);

imagejpeg($new_image);

imagedestroy($old_image);
imagedestroy($new_image);
?>