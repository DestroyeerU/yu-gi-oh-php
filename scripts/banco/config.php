<?php

function reiniciarBanco($conexao, $bancoNome) {
  $dropBanco = $conexao->query("DROP DATABASE IF EXISTS $bancoNome");
  $criarBanco = $conexao->query("CREATE DATABASE $bancoNome");

  // echo $conexao->error;
  if($criarBanco === true) {
    echo "Banco de dados criado: $bancoNome <br>";
  } else {
    die ("Error ao criar banco de dados " . $conexao->error);
    exit();
  }

  $useBanco = $conexao->query("USE $bancoNome");
}


$endereco = "127.0.0.1";
$usuario = "root";
$senha = "usbw";
$bancoNome = "NOVO_BANCO";

$conexao = new mysqli($endereco, $usuario, $senha);

if(mysqli_connect_error()) {
  die(mysqli_connect_error());
  exit();
}

date_default_timezone_set('America/Sao_Paulo');
mysqli_set_charset($conexao, "utf8");


$useBanco = $conexao->query("USE $bancoNome");
?>
