<?php

function criarTabelaPartidas($conexao) {
  $criarTabela = $conexao->query('CREATE TABLE TB_PARTIDAS (
    PAR_CODIGO INT AUTO_INCREMENT PRIMARY KEY,
    PAR_RODADAS INT NOT NULL,
    PAR_JOG_VEN_CODIGO INT NOT NULL REFERENCES TB_JOGARES(JOG_CODIGO),

    PAR_JOG1_CODIGO INT NOT NULL REFERENCES TB_JOGARES(JOG_CODIGO),
    PAR_JOG1_DEC_CODIGO INT NOT NULL REFERENCES TB_DECKS(DEC_CODIGO),
    PAR_JOG1_VIDAFINAL INT NOT,
    PAR_JOG1_QTDCARTASFINAL INT NOT,

    PAR_JOG2_CODIGO INT NOT NULL REFERENCES TB_JOGARES(JOG_CODIGO),
    PAR_JOG2_DEC_CODIGO INT NOT NULL REFERENCES TB_DECKS(DEC_CODIGO),
    PAR_JOG2_VIDAFINAL INT NOT,
    PAR_JOG2_QTDCARTASFINAL INT NOT,
  )');

  if($criarTabela === true) {
    echo "Tabela criada: TB_PARTIDAS <br>";
  } else {
    echo "Erro ao criar tabela TB_PARTIDAS -> " . $conexao->error;
  }
}

function insertCarta($conexao, $CAR_NOME, $CAR_DESC, $CAR_TIC_CODIGO) {
  $insertQuery = $conexao->query("INSERT INTO TB_PARTIDAS
    (CAR_NOME, CAR_DESC, CAR_TIC_CODIGO)
    values
    ('$CAR_NOME', '$CAR_DESC', '$CAR_TIC_CODIGO')
  ");

  if($insertQuery === true) {
    echo "Inserido com sucesso: $CAR_NOME / $CAR_DESC / $CAR_TIC_CODIGO <br>";
  } else {
    echo "Erro inserir valor: $CAR_NOME / $CAR_DESC / $CAR_TIC_CODIGO " . $conexao->error;
  }
}

function selectCartas($conexao, $campos) {
  $consulta = $conexao->query("
    SELECT $campos FROM TB_PARTIDAS
    JOIN TB_TIPOSCAR ON CAR_TIC_CODIGO = TIC_CODIGO
  ");

  $array = [];

  while($row = $consulta->fetch_assoc()) {
    array_push($array, $row);
  }

  return $array;
}

?>
