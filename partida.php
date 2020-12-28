<!DOCTYPE html>
<html lang="pt-br">

<?php
require('./scripts/banco/config.php');
require('./scripts/banco/decksBanco.php');
require('./scripts/banco/jogadoresBanco.php');
require('./scripts/banco/partidasBanco.php');


// Jogadores

insertJogador($conexao, "Jog1");
insertJogador($conexao, "Jog2");
insertJogador($conexao, "Jog3");

insertDeck($conexao, "Deck Exodia");
insertDeck($conexao, "Deck Dragão Branco");
insertDeck($conexao, "Deck Deuses Egípcios");

insertPartida($conexao,
  10, 1, 1,
  1, 1, 1000, 10,
  2, 2, 3000, 7
);

$arrayJogadores = selectJogadores($conexao, "JOG_CODIGO, JOG_NOME");
$arrayDecks = selectDecks($conexao, "DEC_CODIGO, DEC_NOME");
$arrayPartidas = selectPartidas($conexao, "*,
  JOGVEN.JOG_CODIGO as JOGVEN_CODIGO, JOGVEN.JOG_NOME as JOGVEN_NOME,
  JOG1.JOG_CODIGO as JOG1_CODIGO, JOG1.JOG_NOME as JOG1_NOME,
  JOG2.JOG_CODIGO as JOG2_CODIGO, JOG2.JOG_NOME as JOG2_NOME
");


echo "<br> JOGADORES <br>";

echo $arrayJogadores[0]["JOG_CODIGO"] . " - ";
echo $arrayJogadores[0]["JOG_NOME"];

echo "<br>";

echo $arrayJogadores[1]["JOG_CODIGO"] . " - ";
echo $arrayJogadores[1]["JOG_NOME"];
echo "<br> <br>";

echo "DECKS <br>";

echo $arrayDecks[0]['DEC_CODIGO'] . " - ";
echo $arrayDecks[0]['DEC_NOME'];
echo "<br> <br>";


echo "PARTIDAS <br>";

echo $arrayPartidas[0]['PAR_CODIGO'] . " - ";
echo $arrayPartidas[0]['PAR_RODADAS'] . " - ";
echo $arrayPartidas[0]['TIV_NOME'];
echo "<br>";

echo $arrayPartidas[0]['JOG1_CODIGO']. " - ";
echo $arrayPartidas[0]['JOG1_NOME'];
echo "<br>";

echo $arrayPartidas[0]['JOG2_CODIGO']. " - ";
echo $arrayPartidas[0]['JOG2_NOME'];
echo "<br> <br>";

?>

<head>
  <meta charset="UTF-8">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <link rel="stylesheet" href="styles/global.css">
  <link rel="stylesheet" href="styles/partida.css">

  <title>Cadastro de Cartas</title>
</head>
<body>
  <form action="salvarPartida.php" method="post">

  <h1>Cadastro de Partida</h1>

  <div class="row">
    <section>
      <h2>Dados Gerais</h2>

      <div>
        <label for="turnos">Digite a quantidade de turnos</label>
        <input type="number" name="turnos" id="turnos" placeholder="1, 2, 3, ...">
      </div>

      <div>
        <label for="formaVitoria">Selecione a forma de vitória</label>
        <select name="formaVitoria" id="formaVitoria">
          <option value="Acabaram-se os Pontos de Vida">Acabaram-se os Pontos de Vida</option>
          <option value="Acabaram-se as cartas">Acabaram-se as cartas</option>
          <option value="Vitoria Especial">Vitoria Especial</option>
        </select>
      </div>

      <div>
        <label for="jogadorVitorioso">Diigite o jogador vitorioso</label>
        <input type="number" name="jogadorVitorioso" id="jogadorVitorioso" placeholder="1 ou 2">
      </div>


    </section>

    <section>
      <h2>Dados do Jogador 1</h2>

      <div>
        <label for="jogador1Nome">Nome do jogador 1</label>
        <input type="text" name="jogador1Nome" id="jogador1Nome">
      </div>

      <div>
        <label for="jogador1Deck">Deck do jogador 1</label>
        <input type="text" name="jogador1Deck" id="jogador1Deck">
      </div>

      <div>
        <label for="jogador1PontosVida">Pontos de vida final do jogador 1</label>
        <input type="text" name="jogador1PontosVida" id="jogador1PontosVida">
      </div>

      <div>
        <label for="jogador1QtdCartas">Quantidade de cartas final do jogador 1</label>
        <input type="text" name="jogador1QtdCartas" id="jogador1QtdCartas">
      </div>

    </section>

    <section>
      <h2>Dados do Jogador 2</h2>

      <div>
        <label for="jogador2Nome">Nome do jogador 2</label>
        <input type="text" name="jogador2Nome" id="jogador2Nome">
      </div>

      <div>
        <label for="jogador2Deck">Deck do jogador 2</label>
        <input type="text" name="jogador2Deck" id="jogador2Deck">
      </div>

      <div>
        <label for="jogador2PontosVida">Pontos de vida final do jogador 2</label>
        <input type="text" name="jogador2PontosVida" id="jogador2PontosVida">
      </div>

      <div>
        <label for="jogador2QtdCartas">Quantidade de cartas final do jogador 2</label>
        <input type="text" name="jogador2QtdCartas" id="jogador2QtdCartas">
      </div>

    </section>

  </div>

  <button type="submit">Salvar</button>

</form>
</body>
</html>
