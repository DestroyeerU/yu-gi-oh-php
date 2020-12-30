<!DOCTYPE html>
<html lang="pt-br">

<?php
require('./scripts/bootstrap.php');
// require('./scripts/banco/config.php');
// require('./scripts/banco/jogadoresBanco.php');

// insertJogador($conexao, "Jog1", "foto.png");
// insertJogador($conexao, "Jog2", "foto.png");
// insertJogador($conexao, "Jog3", "foto.png");

// $arrayJogadores = selectJogadores($conexao, "JOG_CODIGO, JOG_NOME");

// echo "<br> JOGADORES <br>";

// echo $arrayJogadores[0]["JOG_CODIGO"] . " - ";
// echo $arrayJogadores[0]["JOG_NOME"];

// echo "<br>";

// echo $arrayJogadores[1]["JOG_CODIGO"] . " - ";
// echo $arrayJogadores[1]["JOG_NOME"];
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

  <div>
    <a href="<?php echo BASE_URL?>/listarJogadores.php">Jogadores</a>
  </div>
</body>
</html>
