<?php include("design1.php"); ?>

<?php
require('./scripts/banco/config.php');
require('./scripts/bootstrap.php');
require('./scripts/banco/decksBanco.php');
require('./scripts/banco/cartasDeckBanco.php');

$nome = $_POST['nome'];
$cartas = $_POST['cartas'];
$cartasArray = explode(',', $cartas);

insertDeck($conexao, $nome);
$deckCodigo = mysqli_insert_id($conexao);

$cartasDeck = selectCartasDeck($conexao, '*');

foreach ($cartasArray as $cartaCodigo) {
  insertCartaDeck($conexao, $deckCodigo, $cartaCodigo);
}

$cartasDeck = selectCartasDeck($conexao, '*');
?>

  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Decks Salvo</title>
</head>
<body>

  <br>
  <a href="<?php echo BASE_URL?>/deck.php">Voltar</a>
  <br>
  <a href="<?php echo BASE_URL?>/listarDecks.php">Ir para a Listagem de Decks</a>

</body>
<?php include("design2.php"); ?>