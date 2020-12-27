<?php

function criarTabelaJogadores($conexao) {
  $criarTabela = $conexao->query('CREATE TABLE TB_JOGADORES (
    JOG_CODIGO INT AUTO_INCREMENT PRIMARY KEY,
    JOG_NOME VARCHAR(100) NOT NULL
  )');

  if($criarTabela === true) {
    echo "Tabela criada: TB_JOGADORES <br>";
  } else {
    echo "Erro ao criar tabela " . $conexao->error;
  }
}

function insertJogador($conexao, $JOG_NOME) {
  $insertQuery = $conexao->query("INSERT INTO TB_JOGADORES (JOG_NOME) values ('$JOG_NOME')");

  if($insertQuery === true) {
    echo "Inserido com sucesso: $JOG_NOME <br>";
  } else {
    echo "Erro inserir valor: $JOG_NOME " . $conexao->error;
  }
}

function selectJogador($conexao, $campos) {
  $consulta = $conexao->query("SELECT $campos FROM TB_JOGADORES");

  $arrayJogadores = [];

  while($row = $consulta->fetch_assoc()) {
    array_push($arrayJogadores, $row);
  }

  return $arrayJogadores;
}

?>
