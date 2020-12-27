<?php
require('./scripts/banco/config.php');
require('./scripts/banco/jogadorBanco.php');
require('./scripts/banco/cartaBanco.php');
require('./scripts/banco/deckBanco.php');
require('./scripts/banco/cartasDeckBanco.php');
require('./scripts/banco/tiposCartaBanco.php');

reiniciarBanco($conexao, $bancoNome);

// Criar
criarTabelaTiposCarta($conexao);

criarTabelaJogadores($conexao);
criarTabelaCartas($conexao);
criarTabelaDecks($conexao);
criarTabelaCartasDeck($conexao);

// insert
insertTipoCarta($conexao, "Monstro");
insertTipoCarta($conexao, "Magia");
insertTipoCarta($conexao, "Armadilha");

// select
$arrayCartas = selectTiposCarta($conexao, "TIC_CODIGO, TIC_NOME");

echo "TIPOS CARTA <br>";

echo $arrayCartas[0]["TIC_CODIGO"] . " - ";
echo $arrayCartas[0]["TIC_NOME"];

echo "<br>";

echo $arrayCartas[1]["TIC_CODIGO"] . " - ";
echo $arrayCartas[1]["TIC_NOME"];

echo "<br>";

echo $arrayCartas[2]["TIC_CODIGO"] . " - ";
echo $arrayCartas[2]["TIC_NOME"];



?>
