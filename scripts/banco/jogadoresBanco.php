<?php

function criarTabelaJogadores($conexao) {
  $criarTabela = $conexao->query('CREATE TABLE TB_JOGADORES (
    JOG_CODIGO INT AUTO_INCREMENT PRIMARY KEY,
    JOG_FOTO VARCHAR(50) NOT NULL,
    JOG_NOME VARCHAR(100) NOT NULL
  )');

  if($criarTabela === true) {
    echo "Tabela criada: TB_JOGADORES <br>";
  } else {
    echo "Erro ao criar tabela TB_JOGADORES -> " . $conexao->error;
  }
}

function insertJogador($conexao, $JOG_NOME, $JOG_FOTO) {
  $insertQuery = $conexao->query("INSERT INTO TB_JOGADORES (JOG_NOME, JOG_FOTO) values ('$JOG_NOME', '$JOG_FOTO')");

  if($insertQuery === true) {
    echo "Inserido com sucesso: $JOG_NOME / $JOG_FOTO <br>";
  } else {
    echo "Erro inserir valor: $JOG_NOME / $JOG_FOTO" . $conexao->error;
  }
}

function selectJogadores($conexao, $campos) {
  $consulta = $conexao->query("SELECT $campos FROM TB_JOGADORES");

  $array = [];

  while($row = $consulta->fetch_assoc()) {
    array_push($array, $row);
  }

  return $array;
}

function selectJogadoresPorNome($conexao, $campos, $whereNome) {
  $consulta = $conexao->query("SELECT $campos FROM TB_JOGADORES
    WHERE JOG_NOME LIKE '%$whereNome%'
  ");

  $array = [];

  while($row = $consulta->fetch_assoc()) {
    array_push($array, $row);
  }

  return $array;
}

?>
