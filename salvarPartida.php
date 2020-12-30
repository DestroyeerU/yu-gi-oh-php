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

$jogador1 = selectJogadoresPorNome($conexao, "JOG_CODIGO", $jogador1Nome)[0];
$jogador2 = selectJogadoresPorNome($conexao, "JOG_CODIGO", $jogador2Nome)[0];


$jogadorVitoriosoCodigo = (int)$jogadorVitorioso === 1 ? $jogador1['JOG_CODIGO'] : $jogador2['JOG_CODIGO'];

// echo "<br>";

insertPartida(
  $conexao, $turnos, $formaVitoria, $jogadorVitoriosoCodigo,
  $jogador1['JOG_CODIGO'], $jogador1Deck, $jogador1PontosVida, $jogador1QtdCartas,
  $jogador2['JOG_CODIGO'], $jogador2Deck, $jogador2PontosVida, $jogador2QtdCartas
)

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
