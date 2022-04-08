<?php

$link = 'https://www.google.com/images/branding/googlelogo/1x/googlelogo_color_272x92dp.png';

// Recebe tanto um filename local como uma URL,pegando o binario
$content = file_get_contents($link);

// Transformando o binario em algo legivel em array
$parse = parse_url($link);

// Pegando nome base do arquivo
$basename = basename($parse['path']);

$file = fopen($basename, 'w+');

fwrite($file, $content);

fclose($file);


?>

<img src="<?= $basename ?>" alt="">