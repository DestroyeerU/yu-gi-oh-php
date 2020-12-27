<!-- <html> -->

<?php
require('./scripts/config.php');
require('./scripts/jogadorBanco.php');

criarTabelaJogador($conexao);
insertJogador($conexao, "Jog1");
insertJogador($conexao, "Jog2");
insertJogador($conexao, "Jog3");

$arrayJogadores = selectJogador($conexao, "JOG_CODIGO, JOG_NOME");

echo $arrayJogadores[0]["JOG_NOME"];
echo $arrayJogadores[0]["JOG_CODIGO"];
echo $arrayJogadores[1]["JOG_NOME"];
echo $arrayJogadores[2]["JOG_NOME"];


$conexao->close();
?>
<!--
<head>
  <meta charset="UTF-8">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <link rel="stylesheet" href="styles/global.css">
  <link rel="stylesheet" href="styles/partida.css">

  <title>Cadastro de Cartas</title>
</head>
<body>
  <h1>Registro de Cartas</h1><br>

  <form action="salvarCarta.php" method="POST" enctype="multipart/form-data">

    Foto:<br>
    <input name="userfile" type="file" /><br>

    Nome:<br>
    <input type="text" name="nome"><br>

    Descriçao:<br>
    <textarea id="w3review" name="w3review" rows="8" cols="30"></textarea><br>

    Tipo:<br>
    <select name="time">
      <option value="monster">Monstro</option>
      <option value="spell">Magia</option>
      <option value="trap">Armadilha</option>
    </select>


  </form>

</body>
</html> -->
