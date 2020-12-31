<!DOCTYPE html>
<html lang="pt-br">

<?php
require('./scripts/banco/config.php');
require('./scripts/banco/decksBanco.php');
require('./scripts/banco/jogadoresBanco.php');
require('./scripts/banco/partidasBanco.php');

$arrayPartidas = selectPartidas($conexao, "*,
  JOGVEN.JOG_CODIGO as JOGVEN_CODIGO, JOGVEN.JOG_NOME as JOGVEN_NOME,
  JOG1.JOG_CODIGO as JOG1_CODIGO, JOG1.JOG_NOME as JOG1_NOME,
  JOG2.JOG_CODIGO as JOG2_CODIGO, JOG2.JOG_NOME as JOG2_NOME,
  DEC1.DEC_CODIGO as DEC1_CODIGO, DEC1.DEC_NOME as DEC1_NOME,
  DEC2.DEC_CODIGO as DEC2_CODIGO, DEC2.DEC_NOME as DEC2_NOME
");

echo sizeof($arrayPartidas);
?>

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Listar Partidas</title>
</head>
<body>
  <ul>
  <?php foreach($arrayPartidas as $partida) {
  ?>

    <li>
    Dados da Partida<br>
      <?php echo "Rounds: $partida[PAR_RODADAS] /Tipo de Vitória: $partida[TIV_NOME] /Vencedor: $partida[JOGVEN_NOME]"?>
      <br>
      <?php echo "Jogador 1: $partida[JOG1_NOME] /Seu Deck: $partida[DEC1_NOME] /Quantidade Final de Pontos: $partida[PAR_JOG1_VIDAFINAL] /Cartas Restantes: $partida[PAR_JOG1_QTDCARTASFINAL]"?>
      <br>
      <?php echo "Jogador 2: $partida[JOG2_NOME] /Seu Deck: $partida[DEC2_NOME] /Quantidade Final de Pontos: $partida[PAR_JOG2_VIDAFINAL] /Cartas Restantes: $partida[PAR_JOG2_QTDCARTASFINAL]"?>
    </li>

  <?php } ?>
  </ul>
</body>
</html>
