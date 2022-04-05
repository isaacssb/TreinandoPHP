<?php

// Funчуo do fopen espera receber dois paramertos
// 1 - Uma string
// 2- O que vocъ que fazer
$file = fopen("log.txt", "w+");

// Permite alterar um arquivo
// 1 - Espera receber a variavel com arquivo
// 2 - O que vai ser alterado
fwrite($file, date("Y-m-d H:i:s"));

// Fechando o arquivo
fclose($file);
?>