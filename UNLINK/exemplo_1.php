<?php
$file = fopen('teste.txt', 'w+');

fclose($file);

//Excluindo o arquivo'
unlink('teste.txt');

echo 'Arquivo removido com sucesso!';
?>