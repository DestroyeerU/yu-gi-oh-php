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

function insertDeck($conexao, $DEC_NOME) {
  $insertQuery = $conexao->query("INSERT INTO TB_DECKS (DEC_NOME) values ('$DEC_NOME')");

  if($insertQuery === true) {
    echo "Inserido com sucesso: $DEC_NOME <br>";
  } else {
    echo "Erro inserir valor: $DEC_NOME -> $conexao->error <br>";
  }
}

function selectDecks($conexao, $campos) {
  $consulta = $conexao->query("SELECT $campos
    FROM TB_DECKS

    JOIN TB_CARSDECK ON DEC_CODIGO = CAD_DEC_CODIGO
    JOIN TB_CARTAS ON CAD_CAR_CODIGO = CAR_CODIGO
    JOIN TB_TIPOSCAR ON CAR_TIC_CODIGO = TIC_CODIGO
  ");

  echo $conexao->error;

  $array = [];

  while($row = $consulta->fetch_assoc()) {
    array_push($array, $row);
  }

  return $array;
}

function selectDecksPorNome($conexao, $campos, $whereDeck) {
  $consulta = $conexao->query("SELECT $campos FROM TB_DECKS
    WHERE DEC_NOME LIKE '%$whereDeck%'
  ");

  $array = [];

  while($row = $consulta->fetch_assoc()) {
    array_push($array, $row);
  }

  return $array;
}


?>
