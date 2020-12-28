<html>

<?php
require('./scripts/banco/config.php');
require('./scripts/banco/tiposCartaBanco.php');
require('./scripts/banco/cartasBanco.php');

insertCarta($conexao, "Mago Negro", "O implacável", 1);
insertCarta($conexao, "Olhos Azuis","O invecível", 1);
insertCarta($conexao, "Olhos Vermelhos","O indestrutível", 1);

$arrayCartas = selectCartas($conexao, "CAR_CODIGO, CAR_NOME, CAR_DESC, TIC_NOME");
$arrayTiposCarta = selectTiposCarta($conexao, "TIC_CODIGO, TIC_NOME");

echo "CARTAS <br>";

echo $arrayCartas[0]["CAR_CODIGO"] . " - ";
echo $arrayCartas[0]["CAR_NOME"]   . " - ";
echo $arrayCartas[0]["TIC_NOME"]   . " - ";
echo $arrayCartas[0]["CAR_DESC"];

echo "<br>";

echo $arrayCartas[1]["CAR_CODIGO"] . " - ";
echo $arrayCartas[1]["CAR_NOME"]   . " - ";
echo $arrayCartas[1]["TIC_NOME"]   . " - ";
echo $arrayCartas[1]["CAR_DESC"];
echo "<br> <br>";

echo "TIPOS CARTAS <br>";

echo $arrayTiposCarta[0]["TIC_CODIGO"] . " - ";
echo $arrayTiposCarta[0]["TIC_NOME"];
echo "<br>";

echo $arrayTiposCarta[1]["TIC_CODIGO"] . " - ";
echo $arrayTiposCarta[1]["TIC_NOME"];
echo "<br>";

echo $arrayTiposCarta[2]["TIC_CODIGO"] . " - ";
echo $arrayTiposCarta[2]["TIC_NOME"];
echo "<br>";



$conexao->close();
?>

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
      <?php
        foreach($arrayTiposCarta as $tipoCarta) {
          echo "<option value='$tipoCarta[TIC_CODIGO]'>$tipoCarta[TIC_NOME]</option>";
        }
      ?>

    </select>
  </form>

</body>
</html>
