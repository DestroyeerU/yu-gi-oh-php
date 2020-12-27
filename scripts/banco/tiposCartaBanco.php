<?php

function criarTabelaTiposCarta($conexao) {
  $criarTabela = $conexao->query('CREATE TABLE TB_TIPOSCAR (
    TIC_CODIGO INT AUTO_INCREMENT PRIMARY KEY,
    TIC_NOME VARCHAR(20) NOT NULL
  )');

  if($criarTabela === true) {
    echo "Tabela criada: TB_TIPOSCAR <br>";
  } else {
    echo "Erro ao criar tabela " . $conexao->error;
  }
}

function insertTipoCarta($conexao, $nome) {
  $insertQuery = $conexao->query("INSERT INTO TB_TIPOSCAR (TIC_NOME) values ('$nome')");

  if($insertQuery === true) {
    echo "Inserido com sucesso: $nome <br>";
  } else {
    echo "Erro inserir valor: $nome " . $conexao->error;
  }
}

function selectTiposCarta($conexao, $campos) {
  $consulta = $conexao->query("SELECT $campos FROM TB_TIPOSCAR");

  $arrayTipos = [];

  while($row = $consulta->fetch_assoc()) {
    array_push($arrayTipos, $row);
  }

  return $arrayTipos;
}

?>
