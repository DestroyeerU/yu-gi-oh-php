<?php
require('./scripts/banco/config.php');
require('./scripts/banco/jogadorBanco.php');
require('./scripts/banco/cartaBanco.php');

reiniciarBanco($conexao, $bancoNome);
criarTabelaJogador($conexao);
criarTabelaCartas($conexao);

?>
