<?php

$endereco = "127.0.0.1";
$usuario = "root";
$senha = "usbw";
$banco = "NOVO_BANCO";

$conexao = new mysqli($endereco, $usuario, $senha);

if(mysqli_connect_error()) {
  die(mysqli_connect_error());
  exit();
}

$dropBanco = $conexao->query("DROP DATABASE IF EXISTS $banco");
$criarBanco = $conexao->query("CREATE DATABASE $banco");

// echo $conexao->error;
if($criarBanco === true) {
  echo "Banco de dados criado: $banco <br>";
} else {
  die ("Error ao criar banco de dados " . $conexao->error);
  exit();
}

$useBanco = $conexao->query("USE $banco");

?>
