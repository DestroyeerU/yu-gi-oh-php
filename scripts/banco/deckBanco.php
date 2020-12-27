<?php

function criarTabelaDecks($conexao) {
  $criarTabelaQuery = $conexao->query('CREATE TABLE TB_DECKS (
    DEC_CODIGO INT AUTO_INCREMENT PRIMARY KEY,
    DEC_NOME VARCHAR(40) NOT NULL
  )');

  if($criarTabelaQuery === true) {
    echo "Tabela criada: TB_DECKS <br>";
  } else {
    echo "Erro ao criar tabela TB_DECKS" . $conexao->error . '<br>';
  }
}

function insertDeck($conexao, $nome) {
  $insertQuery = $conexao->query("INSERT INTO TB_DECKS (DEC_NOME) values ('$nome')");

  if($insertQuery === true) {
    echo "Inserido com sucesso: $nome <br>";
  } else {
    echo "Erro inserir valor: $nome -> $conexao->error <br>";
  }
}

function selectDeck($conexao, $campos) {
  $consulta = $conexao->query("SELECT $campos FROM TB_DECKS");

  $array = [];

  while($row = $consulta->fetch_assoc()) {
    array_push($array, $row);
  }

  return $array;
}

?>
