<?php
require('./scripts/banco/config.php');
require('./scripts/banco/jogadoresBanco.php');
require('./scripts/banco/cartasBanco.php');
require('./scripts/banco/decksBanco.php');
require('./scripts/banco/cartasDeckBanco.php');
require('./scripts/banco/tiposCartaBanco.php');

reiniciarBanco($conexao, $bancoNome);
echo "<br>";

// Criar
criarTabelaTiposCarta($conexao);

criarTabelaJogadores($conexao);
criarTabelaCartas($conexao);
criarTabelaDecks($conexao);
criarTabelaCartasDeck($conexao);

echo "<br>";


// insert
insertTipoCarta($conexao, "Monstro");
insertTipoCarta($conexao, "Magia");
insertTipoCarta($conexao, "Armadilha");

echo "<br>";


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
