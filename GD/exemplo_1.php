<?php

// Criando uma imagem á partir do php

header("Content-Type: image/png");

$image = imagecreate(256, 256);


// A primeira cor declarada sempre é a cor de fundo
$black = imagecolorallocate($image, 0, 0, 0);

$red = imagecolorallocate($image, 255, 0, 0);

imagestring($image, 5, 60, 120, "Treinando PHP", $red);

imagepng($image);

imagedestroy($image);
?>