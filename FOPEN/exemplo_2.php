<?php

require_once("config.php");

$sql = new Sql();

$usuarios = $sql->select("SELECT * FROM tb_usuarios ORDER BY deslogin");

$headers = array();

foreach ($usuarios[0] as $key => $value) {

    array_push($headers, ucfirst($key));

}

// Trabalhando com Excel
$file = fopen("usuarios.csv", "w+");

// transformando cada item do cabeçalho que vem em array e montando uma string separada por virgula(pelo implode)
fwrite($file, implode(",", $headers) . "\r\n");

foreach ($usuarios as $row) {

    $data = array();

    foreach ($row as $key => $value) {
        // transformando o restante do conteudo que vem em array e montando uma string separada por virgula(pelo implode)
        array_push($data, $value);

    }//End Foreach de coluna

    fwrite($file, implode(",", $data) . "\r\n");

}//End Foreach de linha

fclose($file);

?>