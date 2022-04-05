<?php
require_once("config.php");

$sql = new Sql();

$usuarios = $sql->select("SELECT * FROM tb_usuario ORDER BY deslogin");

var_dump($usuarios);
?>