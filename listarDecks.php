<!DOCTYPE html>
<html lang="pt-br">

<?php
require('./scripts/file.php');
require('./scripts/banco/config.php');
require('./scripts/banco/decksBanco.php');

$arrayDecks = selectDecks($conexao, "DEC_CODIGO, DEC_NOME, CAR_CODIGO");
// $arrayCartasDecks = selectCartasDeck($conexao, "DEC_CODIGO, CAR_CODIGO, CAR_NOME");

echo $arrayDecks[0]['DEC_CODIGO'] . " - " . $arrayDecks[0]['CAR_CODIGO'] . '<br>';
echo $arrayDecks[1]['DEC_CODIGO'] . " - " . $arrayDecks[1]['CAR_CODIGO'] . '<br>';
echo $arrayDecks[2]['DEC_CODIGO'] . " - " . $arrayDecks[2]['CAR_CODIGO'] . '<br>';
echo $arrayDecks[3]['DEC_CODIGO'] . " - " . $arrayDecks[3]['CAR_CODIGO'] . '<br>';

// $lastDeckCodigo = $$arrayDecks[0]['DEC_CODIGO'];
// $arrayDecksFormatado = [];
// $index = 0;

// foreach ($arrayDecks as $deck) {
//   if (!$lastDeckCodigo !== $arrayDecks[0]['DEC_CODIGO']) {
//     // array_push($arrayDecks, )
//   }
// }

?>

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Decks</title>
</head>
<body>
<!--
  <ul>
    <?php foreach($arrayDecks as $deck) {
    // $caminhoImagem = getCaminhoImagem($carta['CAR_FOTO']);
    ?>
      <h3><?php echo $deck['DEC_NOME']?></h3>

      <li>
        <img src="" alt="">
      </li>

    <?php }?>
  </ul> -->

</body>
</html>
