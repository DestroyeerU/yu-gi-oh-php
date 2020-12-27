<?php
require('./scripts/banco/config.php');
require('./scripts/banco/jogadorBanco.php');
require('./scripts/banco/cartaBanco.php');
require('./scripts/banco/deckBanco.php');
require('./scripts/banco/cartasDeckBanco.php');

reiniciarBanco($conexao, $bancoNome);

criarTabelaJogadores($conexao);
criarTabelaCartas($conexao);
criarTabelaDecks($conexao);
criarTabelaCartasDecks($conexao);


?>
