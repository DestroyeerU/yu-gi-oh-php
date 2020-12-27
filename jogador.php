<!DOCTYPE html>
<html lang="pt-br">

<?php
require('./scripts/banco/config.php');
require('./scripts/banco/jogadorBanco.php');

insertJogador($conexao, "Jog1");
insertJogador($conexao, "Jog2");
insertJogador($conexao, "Jog3");

$arrayJogadores = selectJogador($conexao, "JOG_CODIGO, JOG_NOME");

echo $arrayJogadores[0]["JOG_NOME"];
echo $arrayJogadores[0]["JOG_CODIGO"];
echo $arrayJogadores[1]["JOG_NOME"];
echo $arrayJogadores[2]["JOG_NOME"];
?>


<head>
  <meta charset="UTF-8">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <link rel="stylesheet" href="styles/global.css">
  <link rel="stylesheet" href="styles/jogador.css">

  <title>Cadastro de Jogador</title>
</head>
<body>
  <form action="salvarJogador.php" method="post" enctype="multipart/form-data">
    <h1>Cadastro de Jogador</h1>

    <div>
      <label for="nome">Digite seu nome</label>
      <input type="text" name="nome" id="nome">
    </div>

    <input type="file" name="foto" id="foto" >

    <button type="submit">Salvar</button>
  </form>
</body>
</html>
