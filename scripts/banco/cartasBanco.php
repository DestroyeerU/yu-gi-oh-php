<?php

function criarTabelaCartas($conexao) {
  $criarTabela = $conexao->query('CREATE TABLE TB_CARTAS (
    CAR_CODIGO INT AUTO_INCREMENT PRIMARY KEY,
    CAR_FOTO VARCHAR(50) NOT NULL,
    CAR_NOME VARCHAR(100) NOT NULL,
    CAR_DESC VARCHAR(500) NOT NULL,
    CAR_TIC_CODIGO INT NOT NULL REFERENCES TB_TIPOSCAR(TIC_CODIGO)
  )');

  if($criarTabela === true) {
    echo "Tabela criada: TB_CARTAS <br>";
  } else {
    echo "Erro ao criar tabela TB_CARTAS -> " . $conexao->error;
  }
}

function insertCarta($conexao, $CAR_FOTO, $CAR_NOME, $CAR_DESC, $CAR_TIC_CODIGO) {
  $insertQuery = $conexao->query("INSERT INTO TB_CARTAS
    (CAR_FOTO, CAR_NOME, CAR_DESC, CAR_TIC_CODIGO)
    values
    ('$CAR_FOTO','$CAR_NOME', '$CAR_DESC', '$CAR_TIC_CODIGO')
  ");

  if($insertQuery === true) {
    echo "Inserido com sucesso: $CAR_FOTO / $CAR_NOME / $CAR_DESC / $CAR_TIC_CODIGO <br>";
  } else {
    echo "Erro inserir valor: $CAR_FOTO / $CAR_NOME / $CAR_DESC / $CAR_TIC_CODIGO " . $conexao->error;
  }
}

function selectCartas($conexao, $campos) {
  $consulta = $conexao->query("
    SELECT $campos FROM TB_CARTAS
    JOIN TB_TIPOSCAR ON CAR_TIC_CODIGO = TIC_CODIGO
  ");

  $array = [];

  while($row = $consulta->fetch_assoc()) {
    array_push($array, $row);
  }

  return $array;
}

?>
