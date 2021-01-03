<?php include("design1.php"); ?>

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
  <link rel="stylesheet" href="componentes/areaFileSelector/areaFileSelector.css">


  <title>Cadastro de Jogador</title>
</head>
<body>
  <form class="form-container" action="salvarJogador.php" method="post" enctype="multipart/form-data">
    <h1 class="form-title">Cadastro de Jogador</h1>

    <div class="form-group">
      <label for="nome">Nome do Jogador</label>
      <input type="text" class="form-control" id="nome" name="nome" placeholder="Digite seu nome">
    </div>

    <label class="custom-file-upload">
      <input type="file" onchange="loadImagePreview()" name="foto" id="foto" />

      <div class="default">
        <img src="assets/img/upload.svg" alt="upload">
        Selecione sua foto
      </div>

      <img class="upload-preview" id="uploadPreview">
    </label>


    <button type="submit" class="btn btn-primary form-btn">Salvar</button>
  </form>

  <script src="componentes/areaFileSelector/areaFileSelector.js"></script>

</body>
<?php include("design2.php"); ?>
