<?php
//Gerando uma thumbnail
header("Content-type: image/jpeg");

$file = 'wallpaper.jpg';

$new_windth = 256;
$new_height = 256;

list($old_windth, $old_height) = getimagesize($file);

$new_image = imagecreatetruecolor($new_windth, $new_windth);
$old_image = imagecreatefromjpeg($file);

// 1º Imagem destino
// 2º Imagem de origem
// 3º e 4º são x e y da imagem destino (isso você pode recortar a imagem)
// 5º e 6º são x e y da imagem de origem (isso você pode recortar a imagem)
// 7º e 8 são largura e altera da imagem destino
// 9º e 10 são largura e altera da imagem origem
imagecopyresampled($new_image, $old_image ,0 , 0, 0, 0, $new_windth, $new_height, $old_windth, $old_height);

imagejpeg($new_image);

imagedestroy($old_image);
imagedestroy($new_image);
?>