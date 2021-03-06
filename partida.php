<?php include("design1.php"); ?>

<?php
require('./scripts/banco/config.php');
require('./scripts/banco/decksBanco.php');
require('./scripts/banco/jogadoresBanco.php');
require('./scripts/banco/partidasBanco.php');
require('./scripts/banco/tiposVitoriaBanco.php');

$arrayTiposVitoria = selectTiposVitoria($conexao, "TIV_CODIGO, TIV_NOME");

// // Jogadores

// insertJogador($conexao, "Jog1". "foto");
// insertJogador($conexao, "Jog2". "foto");
// insertJogador($conexao, "Jog3". "foto");

// insertDeck($conexao, "Deck Exodia");
// insertDeck($conexao, "Deck Dragão Branco");
// insertDeck($conexao, "Deck Deuses Egípcios");

// insertPartida($conexao,
//   10, 1, 1,
//   1, 1, 1000, 10,
//   2, 2, 3000, 7
// );

// $arrayJogadores = selectJogadores($conexao, "JOG_CODIGO, JOG_NOME");
// $arrayDecks = selectDecks($conexao, "DEC_CODIGO, DEC_NOME");
// $arrayPartidas = selectPartidas($conexao, "*,
//   JOGVEN.JOG_CODIGO as JOGVEN_CODIGO, JOGVEN.JOG_NOME as JOGVEN_NOME,
//   JOG1.JOG_CODIGO as JOG1_CODIGO, JOG1.JOG_NOME as JOG1_NOME,
//   JOG2.JOG_CODIGO as JOG2_CODIGO, JOG2.JOG_NOME as JOG2_NOME,
//   DEC1.DEC_CODIGO as DEC1_CODIGO, DEC1.DEC_NOME as DEC1_NOME,
//   DEC2.DEC_CODIGO as DEC2_CODIGO, DEC2.DEC_NOME as DEC2_NOME
// ");


// echo "<br> JOGADORES <br>";

// echo $arrayJogadores[0]["JOG_CODIGO"] . " - ";
// echo $arrayJogadores[0]["JOG_NOME"];

// echo "<br>";

// echo $arrayJogadores[1]["JOG_CODIGO"] . " - ";
// echo $arrayJogadores[1]["JOG_NOME"];
// echo "<br> <br>";

// echo "DECKS <br>";

// echo $arrayDecks[0]['DEC_CODIGO'] . " - ";
// echo $arrayDecks[0]['DEC_NOME'];
// echo "<br> <br>";


// echo "PARTIDAS <br>";

// echo $arrayPartidas[0]['PAR_CODIGO'] . " - ";
// echo $arrayPartidas[0]['PAR_RODADAS'] . " - ";
// echo $arrayPartidas[0]['TIV_NOME'];
// echo "<br>";

// echo $arrayPartidas[0]['JOGVEN_CODIGO']. " - ";
// echo $arrayPartidas[0]['JOGVEN_NOME'];
// echo "<br>";

// echo $arrayPartidas[0]['JOG1_CODIGO']. " - ";
// echo $arrayPartidas[0]['JOG1_NOME'];
// echo "<br>";

// echo $arrayPartidas[0]['JOG2_CODIGO']. " - ";
// echo $arrayPartidas[0]['JOG2_NOME'];
// echo "<br> <br>";

?>

<head>
  <meta charset="UTF-8">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <link rel="stylesheet" href="styles/global.css">
  <title>Cadastro de Cartas</title>

  <style>
    .form-title {
      margin-bottom: 0;
    }

    h2 {
      margin-top: 30px;
    }
  </style>
</head>
<body>
  <form class="form-container" action="salvarPartida.php" method="post">

  <h1 class="form-title">Cadastro de Partida</h1>

  <section>
    <h2>Dados do Jogador 1</h2>

    <div class="form-group">
      <label for="jogador1Nome">Nome do jogador 1</label>
      <input class="form-control" type="text" name="jogador1Nome" id="jogador1Nome" required>
    </div>

    <div class="form-group">
      <label for="jogador1Deck">Deck do jogador 1</label>
      <input class="form-control" type="text" name="jogador1Deck" id="jogador1Deck" required>
    </div>

    <div class="form-group">
      <label for="jogador1PontosVida">Pontos de vida final do jogador 1</label>
      <input class="form-control" type="text" name="jogador1PontosVida" id="jogador1PontosVida" required>
    </div>

    <div class="form-group">
      <label for="jogador1QtdCartas">Quantidade de cartas final do jogador 1</label>
      <input class="form-control" type="text" name="jogador1QtdCartas" id="jogador1QtdCartas" required>
    </div>

  </section>

  <section>
    <h2>Dados do Jogador 2</h2>

    <div class="form-group">
      <label for="jogador2Nome">Nome do jogador 2</label>
      <input class="form-control" type="text" name="jogador2Nome" id="jogador2Nome" required>
    </div>

    <div class="form-group">
      <label for="jogador2Deck">Deck do jogador 2</label>
      <input class="form-control" type="text" name="jogador2Deck" id="jogador2Deck" required>
    </div>

    <div class="form-group">
      <label for="jogador2PontosVida">Pontos de vida final do jogador 2</label>
      <input class="form-control" type="text" name="jogador2PontosVida" id="jogador2PontosVida" required>
    </div>

    <div class="form-group">
      <label for="jogador2QtdCartas">Quantidade de cartas final do jogador 2</label>
      <input class="form-control" type="text" name="jogador2QtdCartas" id="jogador2QtdCartas" required>
    </div>

  </section>


  <section>
    <h2>Dados Gerais</h2>

    <div class="form-group">
      <label for="jogadorVitorioso">Digite o jogador vitorioso</label>
      <input class="form-control" type="number" name="jogadorVitorioso" id="jogadorVitorioso" placeholder="1 ou 2" required>
    </div>

    <div class="form-group">
      <label for="turnos">Digite a quantidade de turnos</label>
      <input class="form-control" type="number" name="turnos" id="turnos" placeholder="1, 2, 3, ..." required>
    </div>

    <div class="form-group">
      <label for="formaVitoria">Selecione a forma de vitória</label>
      <select multiple class="form-control" name="formaVitoria" id="formaVitoria" required>
        <?php
          foreach($arrayTiposVitoria as $tipoVitoria) {
            echo "<option value='$tipoVitoria[TIV_CODIGO]'>$tipoVitoria[TIV_NOME]</option>";
          }
        ?>
      </select>
    </div>
  </section>

  <button type="submit" class="btn btn-primary form-btn">Salvar</button>
</form>
</body>
<?php include("design2.php"); ?>
