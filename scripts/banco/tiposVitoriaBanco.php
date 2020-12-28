<?php

function criarTabelaTiposVitoria($conexao) {
  $criarTabela = $conexao->query('CREATE TABLE TB_TIPOSVITORIA (
    TIV_CODIGO INT AUTO_INCREMENT PRIMARY KEY,
    TIV_NOME VARCHAR(20) NOT NULL
  )');

  if($criarTabela === true) {
    echo "Tabela criada: TB_TIPOSVITORIA <br>";
  } else {
    echo "Erro ao criar tabela TB_TIPOSVITORIA -> " . $conexao->error;
  }
}

function insertTipoVitoria($conexao, $TIV_NOME) {
  $insertQuery = $conexao->query("INSERT INTO TB_TIPOSVITORIA
    (TIV_NOME)
    values
    ('$TIV_NOME')
  ");

  if($insertQuery === true) {
    echo "Inserido com sucesso: $TIV_NOME <br>";
  } else {
    echo "Erro inserir valor: $TIV_NOME " . $conexao->error;
  }
}

function selectTiposVitoria($conexao, $campos) {
  $consulta = $conexao->query("
    SELECT $campos FROM TB_TIPOSVITORIA
  ");

  $array = [];

  while($row = $consulta->fetch_assoc()) {
    array_push($array, $row);
  }

  return $array;
}

?>
