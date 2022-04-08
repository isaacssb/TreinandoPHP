<?php
// Realizando chamadas em Webservices com cURL
$cep = '07070000';


$link = "viacep.com.br/ws/07070000/json/";

$ch  = curl_init($link);

curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);

curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);

$response = curl_exec($ch);

curl_close($ch);

$data = json_decode($response, true);

  echo '<div style="width: 90%; margin: 5px auto; padding: 5px; border: 1px solid #999; border-radius: 5px; background-color: #ccffff;">';
  echo '<pre style="text-align: left;">';
  echo   '<hr>';
  echo   str_replace( $_SERVER['DOCUMENT_ROOT'], '', __FILE__) . ' (Linha ' . __LINE__ . ')';
  echo   '<hr>';
  var_dump( $data );
  // var_dump( $_POST );
  echo   '<hr>';
  echo '</pre>';
  echo '</div>';


?>