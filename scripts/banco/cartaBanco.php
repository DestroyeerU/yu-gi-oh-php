<?php

function criarTabelaCartas($conexao) {
  $criarTabela = $conexao->query('CREATE TABLE TB_CARTAS (
    CAR_CODIGO INT AUTO_INCREMENT PRIMARY KEY,
    CAR_NOME VARCHAR(100),
    CAR_DESC VARCHAR(500),
    CAR_TIPO VARCHAR(20)
  )');

  if($criarTabela === true) {
    echo "Tabela criada: TB_CARTAS <br>";
  } else {
    echo "Erro ao criar tabela " . $conexao->error;
  }
}

function insertCarta($conexao, $nome, $desc, $tipo) {
  $insertQuery = $conexao->query("INSERT INTO TB_CARTAS (CAR_NOME, CAR_DESC, CAR_TIPO) values ('$nome', '$desc', '$tipo')");

  if($insertQuery === true) {
    echo "Inserido com sucesso: $nome / $desc / $tipo <br>";
  } else {
    echo "Erro inserir valor: $nome / $desc / $tipo " . $conexao->error;
  }
}

function selectCartas($conexao, $campos) {
  $consulta = $conexao->query("SELECT $campos FROM TB_CARTAS");

  $arrayCartas = [];

  while($row = $consulta->fetch_assoc()) {
    array_push($arrayCartas, $row);
    // echo "CAR_CODIGO: " . $row["CAR_CODIGO"]. " - CAR_NOME: " . $row["CAR_NOME"] ." - CAR_DESC: " . $row["CAR_DESC"] ." - CAR_TIPO: " . $row["CAR_TIPO"] . "<br>";
  }

  return $arrayCartas;
}

?>
