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
    'CAR_NOME' => $deck['CAR_NOME']
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

$arrayDecks = selectDecks($conexao, "DEC_CODIGO, DEC_NOME, CAR_CODIGO, CAR_FOTO, CAR_NOME");
$arrayDecksFormatado = formatDecks($arrayDecks);
?>

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Decks</title>
</head>
<body>

  <ul>
    <?php foreach($arrayDecksFormatado as $deck) {?>
      <h3><?php echo $deck['DEC_NOME']?></h3>

      <li>
        <ul style="display: flex; flex-wrap: wrap;">
          <?php foreach($deck['DEC_CARTAS'] as $carta) {
            $caminhoImagem = getCaminhoImagem($carta['CAR_FOTO']);
          ?>

            <li>
              <img src="<?php echo $caminhoImagem?>" alt="<?php echo $carta['CAR_NOME']?>" width="200">
            </li>

         <?php }?>
        </ul>
      </li>

    <?php }?>
  </ul>

</body>
<?php include("design2.php"); ?>
