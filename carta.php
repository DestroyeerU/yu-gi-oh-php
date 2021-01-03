<?php include("design1.php"); ?>

<?php
require('./scripts/banco/config.php');
require('./scripts/banco/tiposCartaBanco.php');

$arrayTiposCarta = selectTiposCarta($conexao, "TIC_CODIGO, TIC_NOME");
// require('./scripts/banco/cartasBanco.php');

// insertCarta($conexao, "Foto", "Mago Negro", "O implacável", 1);
// insertCarta($conexao, "Foto", "Olhos Azuis","O invecível", 1);
// insertCarta($conexao, "Foto", "Olhos Vermelhos","O indestrutível", 1);

// $arrayCartas = selectCartas($conexao, "CAR_FOTO, CAR_CODIGO, CAR_NOME, CAR_DESC, TIC_NOME");

// echo "CARTAS <br>";

// echo $arrayCartas[0]["CAR_CODIGO"] . " - ";
// echo $arrayCartas[0]["CAR_NOME"]   . " - ";
// echo $arrayCartas[0]["TIC_NOME"]   . " - ";
// echo $arrayCartas[0]["CAR_DESC"];

// echo "<br>";

// echo $arrayCartas[1]["CAR_CODIGO"] . " - ";
// echo $arrayCartas[1]["CAR_NOME"]   . " - ";
// echo $arrayCartas[1]["TIC_NOME"]   . " - ";
// echo $arrayCartas[1]["CAR_DESC"]   . " - ";
// echo $arrayCartas[1]["CAR_FOTO"];
// echo "<br> <br>";

// echo "TIPOS CARTAS <br>";

// echo $arrayTiposCarta[0]["TIC_CODIGO"] . " - ";
// echo $arrayTiposCarta[0]["TIC_NOME"];
// echo "<br>";

// echo $arrayTiposCarta[1]["TIC_CODIGO"] . " - ";
// echo $arrayTiposCarta[1]["TIC_NOME"];
// echo "<br>";

// echo $arrayTiposCarta[2]["TIC_CODIGO"] . " - ";
// echo $arrayTiposCarta[2]["TIC_NOME"];
// echo "<br>";



// $conexao->close();
?>

<head>
  <meta charset="UTF-8">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <link rel="stylesheet" href="styles/global.css">
  <link rel="stylesheet" href="componentes/areaFileSelector/areaFileSelector.css">

  <!-- <link rel="stylesheet" href="styles/partida.css"> -->

  <title>Cadastro de Cartas</title>

  <style>
    .form-title {
      margin-bottom: 10px;
    }
  </style>
</head>
<body>

  <form class="form-container" action="salvarCarta.php" method="POST" enctype="multipart/form-data">
  <h1 class="form-title">Registro de Cartas</h1>

  <div class="form-group">
    <label for="nome">Nome</label>
    <input type="text" class="form-control" id="nome" name="nome" placeholder="Digite o nome da carta">
  </div>

  <div class="form-group">
    <label for="nome">Descriçao</label>
    <textarea class="form-control" id="desc" name="desc" rows="4" cols="30"></textarea>
  </div>


  <div class="form-group">
    <label for="tipo">Tipo de Carta</label>
    <select multiple class="form-control" id="tipo" name="tipo">
    <?php
      foreach($arrayTiposCarta as $tipoCarta) {
        echo "<option value='$tipoCarta[TIC_CODIGO]'>$tipoCarta[TIC_NOME]</option>";
      }
    ?>
    </select>
  </div>


  <label class="custom-file-upload">
    <input type="file" onchange="loadImagePreview()" name="carfoto" id="carfoto" />

    <div class="default">
      <img src="assets/img/upload.svg" alt="upload">
      Selecione a foto da carta
    </div>

    <img class="upload-preview" id="uploadPreview">
  </label>

    <button type="submit" class="btn btn-primary form-btn">Salvar</button>
  </form>

  <script src="componentes/areaFileSelector/areaFileSelector.js"></script>
</body>
<?php include("design2.php"); ?>
