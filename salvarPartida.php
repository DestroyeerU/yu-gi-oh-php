<?php
require('./scripts/banco/config.php');
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

  insertPartida($conexao,
  $turnos ,$formaVitoria, $jogadorVitorioso,
  $jogador1Nome, $jogador1Deck, $jogador1PontosVida, $jogador1QtdCartas,
  $jogador2Nome, $jogador2Deck, $jogador2PontosVida, $jogador2QtdCartas
  )

?>

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Partida Salva</title>
</head>
<body>

  <br>
  <a href="/Projects/Yu-Gi-Oh/listarPartidas.php">Lista de Partidas</a>

</body>
</html>
