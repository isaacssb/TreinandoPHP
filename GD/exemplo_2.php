<?php
// Pegando uma imagem � usando ela como base e inserindo altera��es
$image = imagecreatefromjpeg("certificado.jpg");

$titleColor = imagecolorallocate($image, 0, 0, 0);
$gray = imagecolorallocate($image, 100, 100, 100);

imagestring($image, 5, 450, 150, "CERTIFICADO", $titleColor);
imagestring($image, 5, 440, 350, "Isaac Barreto", $titleColor);
imagestring($image, 5, 440, 370, "Conclu�do em: ". date("d/m/Y"), $titleColor);

// Sempre colocar o header no final
header("Content-type: image/jpeg");

// 1� image / 2� Onde quer salvar / 3� Qualidade de 0 � 100
imagejpeg($image, "certificado-". date('Y-m-d') .".jpg");

imagedestroy($image);
?>