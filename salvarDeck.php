<?php

require('./scripts/banco/config.php');
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
