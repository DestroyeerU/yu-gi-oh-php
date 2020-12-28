<?php
require('./scripts/banco/config.php');
require('./scripts/banco/jogadoresBanco.php');
require('./scripts/banco/cartasBanco.php');
require('./scripts/banco/decksBanco.php');
require('./scripts/banco/cartasDeckBanco.php');
require('./scripts/banco/tiposCartaBanco.php');
require('./scripts/banco/tiposVitoriaBanco.php');

reiniciarBanco($conexao, $bancoNome);
echo "<br>";

// Criar
criarTabelaTiposCarta($conexao);
criarTabelaTiposVitoria($conexao);

criarTabelaJogadores($conexao);
criarTabelaCartas($conexao);
criarTabelaDecks($conexao);
criarTabelaCartasDeck($conexao);

echo "<br>";


// insert
insertTipoCarta($conexao, "Monstro");
insertTipoCarta($conexao, "Magia");
insertTipoCarta($conexao, "Armadilha");

insertTipoVitoria($conexao, "Vitoria especial");
insertTipoVitoria($conexao, "Acabaram-se as cartas");
insertTipoVitoria($conexao, "Acabaram-se os pontos de vida");

echo "<br>";


// select
$arrayTiposCarta = selectTiposCarta($conexao, "TIC_CODIGO, TIC_NOME");
$arrayTiposVitoria = selectTiposVitoria($conexao, "TIV_CODIGO, TIV_NOME");

echo "TIPOS CARTA <br>";

echo $arrayTiposCarta[0]["TIC_CODIGO"] . " - ";
echo $arrayTiposCarta[0]["TIC_NOME"];
echo "<br>";

echo $arrayTiposCarta[1]["TIC_CODIGO"] . " - ";
echo $arrayTiposCarta[1]["TIC_NOME"];
echo "<br>";

echo $arrayTiposCarta[2]["TIC_CODIGO"] . " - ";
echo $arrayTiposCarta[2]["TIC_NOME"];
echo "<br> <br>";

echo "TIPOS VITORIA <br>";

echo $arrayTiposVitoria[0]["TIV_CODIGO"] . " - ";
echo $arrayTiposVitoria[0]["TIV_NOME"];
echo "<br>";

echo $arrayTiposVitoria[1]["TIV_CODIGO"] . " - ";
echo $arrayTiposVitoria[1]["TIV_NOME"];
echo "<br>";

echo $arrayTiposVitoria[2]["TIV_CODIGO"] . " - ";
echo $arrayTiposVitoria[2]["TIV_NOME"];
echo "<br> <br>";

?>
