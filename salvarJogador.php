<?php
require('scripts/file.php');
require('scripts/banco/config.php');
require('scripts/banco/jogadoresBanco.php');

$nomeArquivo = $_FILES['foto']['name'];
$nome = $_POST['nome'];

insertJogador($conexao, $nome, $nomeArquivo);
salvarArquivo('foto');
?>
