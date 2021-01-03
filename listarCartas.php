<?php include("design1.php"); ?>

<?php
require('./scripts/banco/config.php');
require('./scripts/banco/cartasBanco.php');
require('./scripts/file.php');
require('./scripts/bootstrap.php');

$arrayCartas = selectCartas($conexao, "CAR_CODIGO, CAR_NOME, CAR_DESC, CAR_FOTO, TIC_NOME");
?>

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <link rel="stylesheet" href="styles/global.css">
  <link rel="stylesheet" href="styles/listagemCard.css">

  <title>Listar Cartas</title>

  <style>
    .item-image {
      object-fit: contain;
    }

  </style>
</head>
<body>
  <main>
    <header>
      <h2>Listagem de Cartas</h2>
      <a href="<?php echo BASE_URL?>/carta.php" class="btn btn-primary">Adicionar Carta</a>
    </header>

    <ul class="list">
    <?php foreach($arrayCartas as $carta) {
      $caminhoImagem = getCaminhoImagem($carta['CAR_FOTO']);
    ?>

      <li class="list-item">
        <div class="card" style="width: 18rem;">
          <img class="item-image" src="<?php echo $caminhoImagem?>" alt="<?php echo $carta['CAR_NOME']?>" >
          <div class="card-body">
            <h5 class="card-title"><?php echo "$carta[CAR_NOME] - $carta[TIC_NOME]"  ?></h5>
            <p class="card-text"><?php echo $carta['CAR_DESC'] ?></p>
          </div>
        </div>
      </li>

    <?php } ?>
    </ul>
  </main>
</body>
<?php include("design2.php"); ?>
