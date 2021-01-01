<?php include("design1.php"); ?>

<?php
require('scripts/file.php');
require('./scripts/bootstrap.php');

require('./scripts/banco/config.php');
require('./scripts/banco/cartasBanco.php');

$carfoto = $_FILES['carfoto']['name'];
$carnome = $_POST['nome'];
$cardesc = $_POST['desc'];
$cartipo = $_POST['tipo'];

insertCarta($conexao, $carfoto, $carnome, $cardesc, $cartipo);
salvarArquivo('carfoto');
?>


<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Carta Salva</title>
</head>
<body>

  <br>
  <a href="<?php echo BASE_URL?>/carta.php">Voltar</a>
  <br>
  <a href="<?php echo BASE_URL?>/listarCartas.php">Ir para a Listagem de Cartas</a>

</body>
<?php include("design2.php"); ?>
