<?php include("design1.php"); ?>

<?php
function formatDeck($deck, $cartas) {
  return [
    'DEC_CODIGO' => $deck['DEC_CODIGO'],
    'DEC_NOME' => $deck['DEC_NOME'],
    'DEC_CARTAS' => $cartas
  ];
}

function formatCarta($deck) {
  return [
    'CAR_CODIGO' => $deck['CAR_CODIGO'],
    'CAR_FOTO' => $deck['CAR_FOTO'],
    'CAR_NOME' => $deck['CAR_NOME'],
    'CAR_DESC' => $deck['CAR_DESC'],
    'TIC_NOME' => $deck['TIC_NOME'],
  ];
}

function formatDecks($arrayDecks) {
  $ultimoDeck = $arrayDecks[0];

  $arrayDecksFormatado = [];
  $arrayUltimoDeckCartas = [];

  foreach ($arrayDecks as $deck) {
    $novoDeck = $ultimoDeck['DEC_CODIGO'] !== $deck['DEC_CODIGO'];

    if ($novoDeck) {
      $arrayDecksFormatado[] = formatDeck($ultimoDeck, $arrayUltimoDeckCartas);

      $ultimoDeck = $deck;
      $arrayUltimoDeckCartas = [];
    }

    $arrayUltimoDeckCartas[] = formatCarta($deck);
  }

  $arrayDecksFormatado[] = formatDeck($ultimoDeck, $arrayUltimoDeckCartas);

  return $arrayDecksFormatado;
}

require('./scripts/file.php');
require('./scripts/banco/config.php');
require('./scripts/banco/decksBanco.php');
require('./scripts/bootstrap.php');

$arrayDecks = selectDecks($conexao, "DEC_CODIGO, DEC_NOME, CAR_CODIGO, CAR_FOTO, CAR_NOME, CAR_DESC, TIC_NOME");
$arrayDecksFormatado = formatDecks($arrayDecks);
?>

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <link rel="stylesheet" href="styles/global.css">
  <link rel="stylesheet" href="styles/listagemCard.css">
  <link rel="stylesheet" href="styles/listarDecks.css">

  <title>Decks</title>

  <style>


  </style>
</head>
<body>

<main>
  <header>
    <h2>Listagem de Decks</h2>
    <a href="<?php echo BASE_URL?>/deck.php" class="btn btn-primary">Adicionar Deck</a>
  </header>

  <ul class="decks-list">
    <?php foreach($arrayDecksFormatado as $deck) {?>
      <h4 class="deck-title"><?php echo $deck['DEC_NOME']?></h4>

      <li>
        <ul class="list" >
          <?php foreach($deck['DEC_CARTAS'] as $carta) {
            $caminhoImagem = getCaminhoImagem($carta['CAR_FOTO']);
          ?>

            <li class="list-item">
            <div class="card" style="width: 18rem;">
              <img class="item-image" src="<?php echo $caminhoImagem?>" alt="<?php echo $carta['CAR_NOME']?>" >
              <div class="card-body">
                <h5 class="card-title"><?php echo "$carta[CAR_NOME] - $carta[TIC_NOME]"  ?></h5>
                <p class="card-text"><?php echo $carta['CAR_DESC'] ?></p>
              </div>
            </div>
            </li>

         <?php }?>
        </ul>
      </li>

    <?php }?>
  </ul>

</main>
</body>
<?php include("design2.php"); ?>
