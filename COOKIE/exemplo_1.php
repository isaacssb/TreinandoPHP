<?php
$data = array(
  "empresa" => "Isaac Barreto"
);

setcookie("NOME_DO_COOKIE", json_encode($data), time() + 3600);

echo "OK";
?>