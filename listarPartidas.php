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
  JOG2.JOG_CODIGO as JOG2_CODIGO, JOG2.JOG_NOME as JOG2_NOME
");
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
      <?php echo "$partida[JOG1_NOME] - $partida[JOG2_NOME] - $partida[JOGVEN_NOME]"?>
    </li>

  <?php } ?>
  </ul>
</body>
</html>
