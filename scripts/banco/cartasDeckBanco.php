<?php

function criarTabelaCartasDeck($conexao) {
  $criarTabelaQuery = $conexao->query('CREATE TABLE TB_CARSDECK (
    CAD_DEC_CODIGO INT NOT NULL REFERENCES TB_DECKS(DEC_CODIGO),
    CAD_CAR_CODIGO INT NOT NULL REFERENCES TB_CARTAS(CAR_CODIGO),

    PRIMARY KEY (CAD_DEC_CODIGO, CAD_CAR_CODIGO)
  )');

  if($criarTabelaQuery === true) {
    echo "Tabela criada: TB_CARSDECK <br>";
  } else {
    echo "Erro ao criar tabela TB_CARSDECK -> $conexao->error <br>";
  }
}

function insertCartaDeck($conexao, $CAD_DEC_CODIGO, $CAD_CAR_CODIGO) {
  $insertQuery = $conexao->query("INSERT INTO TB_CARSDECK
    (CAD_DEC_CODIGO, CAD_CAR_CODIGO)
    values
    ('$CAD_DEC_CODIGO', '$CAD_CAR_CODIGO')"
  );

  if($insertQuery === true) {
    echo "Inserido com sucesso: $CAD_DEC_CODIGO / $CAD_CAR_CODIGO <br>";
  } else {
    echo "Erro inserir valor: $CAD_DEC_CODIGO / $CAD_CAR_CODIGO -> $conexao->error <br>";
  }
}

function selectCartasDeck($conexao, $campos) {
  $consulta = $conexao->query("
    SELECT $campos FROM TB_CARSDECK
    JOIN TB_DECKS  ON CAD_DEC_CODIGO = DEC_CODIGO
    JOIN TB_CARTAS ON CAD_CAR_CODIGO = CAR_CODIGO
  ");

  $arrayDecks = [];

  while($row = $consulta->fetch_assoc()) {
    array_push($arrayDecks, $row);
  }

  return $arrayDecks;
}

?>
