<?php
require('./scripts/banco/config.php');
require('./scripts/bootstrap.php');

require('./scripts/banco/decksBanco.php');
require('./scripts/banco/jogadoresBanco.php');
require('./scripts/banco/partidasBanco.php');

$turnos = $_POST['turnos'];
$formaVitoria = $_POST['formaVitoria'];
$jogadorVitorioso = $_POST['jogadorVitorioso'];

$jogador1Nome = $_POST['jogador1Nome'];
$jogador1Deck = $_POST['jogador1Deck'];
$jogador1PontosVida = $_POST['jogador1PontosVida'];
$jogador1QtdCartas = $_POST['jogador1QtdCartas'];

$jogador2Nome = $_POST['jogador2Nome'];
$jogador2Deck = $_POST['jogador2Deck'];
$jogador2PontosVida = $_POST['jogador2PontosVida'];
$jogador2QtdCartas = $_POST['jogador2QtdCartas'];

$jogadores1 = selectJogadoresPorNome($conexao, "JOG_CODIGO", $jogador1Nome);
$jogadores2 = selectJogadoresPorNome($conexao, "JOG_CODIGO", $jogador2Nome);

$decksJg1 = selectDecksPorNome($conexao, "DEC_CODIGO", $jogador1Deck);
$decksJg2 = selectDecksPorNome($conexao, "DEC_CODIGO", $jogador2Deck);

if (sizeof($jogadores1) === 0) {
  echo "Jogador: $jogador1Nome não encontrado";
  exit;
}

if (sizeof($jogadores2) === 0) {
  echo "Jogador: $jogador1Nome não encontrado";
  exit;
}

if (sizeof($decksJg1) === 0) {
  echo "Deck: $jogador1Deck não encontrado";
  exit;
}

if (sizeof($decksJg2) === 0) {
  echo "Deck: $jogador2Deck não encontrado";
  exit;
}

$jogador1 = $jogadores1[0];
$jogador2 = $jogadores2[0];
$deckJg1 = $decksJg1[0];
$deckJg2 = $decksJg2[0];

$jogadorVitoriosoCodigo = (int)$jogadorVitorioso === 1 ? $jogador1['JOG_CODIGO'] : $jogador2['JOG_CODIGO'];

insertPartida(
  $conexao, $turnos, $formaVitoria, $jogadorVitoriosoCodigo,
  $jogador1['JOG_CODIGO'], $deckJg1['DEC_CODIGO'], $jogador1PontosVida, $jogador1QtdCartas,
  $jogador2['JOG_CODIGO'], $deckJg2['DEC_CODIGO'], $jogador2PontosVida, $jogador2QtdCartas
);

?>

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Partida Salva</title>
</head>
<body>

  <br>
  <a href="<?php echo BASE_URL?>/listarPartidas.php">Lista de Partidas</a>

</body>
</html>
