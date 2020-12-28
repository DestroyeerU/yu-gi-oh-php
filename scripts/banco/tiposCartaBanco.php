<?php

function criarTabelaTiposCarta($conexao) {
  $criarTabela = $conexao->query('CREATE TABLE TB_TIPOSCAR (
    TIC_CODIGO INT AUTO_INCREMENT PRIMARY KEY,
    TIC_NOME VARCHAR(20) NOT NULL
  )');

  if($criarTabela === true) {
    echo "Tabela criada: TB_TIPOSCAR <br>";
  } else {
    echo "Erro ao criar tabela TB_TIPOSCAR -> " . $conexao->error;
  }
}

function insertTipoCarta($conexao, $TIC_NOME) {
  $insertQuery = $conexao->query("INSERT INTO TB_TIPOSCAR (TIC_NOME) values ('$TIC_NOME')");

  if($insertQuery === true) {
    echo "Inserido com sucesso: $TIC_NOME <br>";
  } else {
    echo "Erro inserir valor: $TIC_NOME " . $conexao->error;
  }
}

function selectTiposCarta($conexao, $campos) {
  $consulta = $conexao->query("SELECT $campos FROM TB_TIPOSCAR");

  $array = [];

  while($row = $consulta->fetch_assoc()) {
    array_push($array, $row);
  }

  return $array;
}

?>
