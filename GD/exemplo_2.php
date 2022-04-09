<?php
// Pegando uma imagem é usando ela como base e inserindo alterações
$image = imagecreatefromjpeg("certificado.jpg");

$titleColor = imagecolorallocate($image, 0, 0, 0);
$gray = imagecolorallocate($image, 100, 100, 100);

imagestring($image, 5, 450, 150, "CERTIFICADO", $titleColor);
imagestring($image, 5, 440, 350, "Isaac Barreto", $titleColor);
imagestring($image, 5, 440, 370, "Concluído em: ". date("d/m/Y"), $titleColor);

// Sempre colocar o header no final
header("Content-type: image/jpeg");

// 1º image / 2º Onde quer salvar / 3º Qualidade de 0 á 100
imagejpeg($image, "certificado-". date('Y-m-d') .".jpg");

imagedestroy($image);
?>