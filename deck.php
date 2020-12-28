<html>

<?php
require('./scripts/banco/config.php');
require('./scripts/banco/decksBanco.php');
require('./scripts/banco/cartasBanco.php');
require('./scripts/banco/cartasDeckBanco.php');

//
insertDeck($conexao, "Deck Exodia");
insertDeck($conexao, "Deck Dragão Branco");
insertDeck($conexao, "Deck Deuses Egípcios");

$arrayDecks = selectDecks($conexao, "DEC_CODIGO, DEC_NOME");

insertCarta($conexao, "Mago Negro", "O implacável", 1);
insertCarta($conexao, "Olhos Azuis","O invecível", 1);

$arrayCartas = selectCartas($conexao, "CAR_CODIGO, CAR_NOME, CAR_DESC, TIC_NOME");

insertCartaDeck($conexao, $arrayDecks[0]['DEC_CODIGO'], $arrayCartas[0]["CAR_CODIGO"]);
insertCartaDeck($conexao, $arrayDecks[0]['DEC_CODIGO'], $arrayCartas[1]["CAR_CODIGO"]);

$arrayCartasDecks = selectCartasDeck($conexao, "DEC_CODIGO, CAR_CODIGO, CAR_NOME");


// Deck

echo "DECKS <br>";

echo $arrayDecks[0]['DEC_CODIGO'] . " - ";
echo $arrayDecks[0]['DEC_NOME'];
echo "<br> <br>";


// Cartas

echo "CARTAS <br>";

echo $arrayCartas[0]["CAR_CODIGO"] . " - ";
echo $arrayCartas[0]["CAR_NOME"]   . " - ";
echo $arrayCartas[0]["TIC_NOME"]   . " - ";
echo $arrayCartas[0]["CAR_DESC"];

echo "<br>";

echo $arrayCartas[1]["CAR_CODIGO"] . " - ";
echo $arrayCartas[1]["CAR_NOME"]   . " - ";
echo $arrayCartas[1]["TIC_NOME"]   . " - ";
echo $arrayCartas[1]["CAR_DESC"];
echo "<br> <br>";


// Catas dos Decks

echo "CARTAS DOS DECKS <br>";

echo $arrayCartasDecks[0]["DEC_CODIGO"] . " - ";
echo $arrayCartasDecks[0]["CAR_CODIGO"] . " - ";
echo $arrayCartasDecks[0]["CAR_NOME"];
echo "<br> <br>";


?>

<head>
  <meta charset="UTF-8">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <link rel="stylesheet" href="styles/global.css">
  <link rel="stylesheet" href="styles/partida.css">

  <title>Cadastro de Decks</title>
</head>
<body>

  <h1>Registro de Decks</h1><br>

  <form action="salvarDeck.php" method="POST" enctype="multipart/form-data">

    Nome:<br>
    <input type="text" name="d1"><br>

    Cartas:<br>
    <img src="download.jpg">
    <img src="download.jpg">
    <img src="download.jpg">

  </form>

</body>
</html>
