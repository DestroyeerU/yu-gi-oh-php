<?php include("design1.php"); ?>

<?php
require('./scripts/banco/config.php');
require('./scripts/banco/cartasBanco.php');
require('./scripts/file.php');

$arrayCartas = selectCartas($conexao, "CAR_CODIGO, CAR_NOME, CAR_DESC, CAR_FOTO, TIC_NOME");
?>

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Listar Cartas</title>
</head>
<body>
  <ul>
  <?php foreach($arrayCartas as $carta) {
    $caminhoImagem = getCaminhoImagem($carta['CAR_FOTO']);
  ?>

    <li>
      <img src="<?php echo $caminhoImagem?>" alt="<?php echo $carta['CAR_NOME']?>" width="200">
      <?php echo "$carta[CAR_CODIGO] - $carta[CAR_NOME] - $carta[TIC_NOME]"  ?>
    </li>

  <?php } ?>
  </ul>
</body>
<?php include("design2.php"); ?>
