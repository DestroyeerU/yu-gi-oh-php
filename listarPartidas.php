<?php include("design1.php"); ?>

<?php
require('./scripts/banco/config.php');
require('./scripts/banco/decksBanco.php');
require('./scripts/banco/jogadoresBanco.php');
require('./scripts/banco/partidasBanco.php');
require('./scripts/bootstrap.php');
require('./scripts/file.php');

$arrayPartidas = selectPartidas($conexao, "*,
  JOGVEN.JOG_CODIGO as JOGVEN_CODIGO, JOGVEN.JOG_NOME as JOGVEN_NOME,
  JOG1.JOG_CODIGO as JOG1_CODIGO, JOG1.JOG_NOME as JOG1_NOME, JOG1.JOG_FOTO as JOG1_FOTO,
  JOG2.JOG_CODIGO as JOG2_CODIGO, JOG2.JOG_NOME as JOG2_NOME, JOG2.JOG_FOTO as JOG2_FOTO,
  DEC1.DEC_CODIGO as DEC1_CODIGO, DEC1.DEC_NOME as DEC1_NOME,
  DEC2.DEC_CODIGO as DEC2_CODIGO, DEC2.DEC_NOME as DEC2_NOME
");

?>

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <link rel="stylesheet" href="styles/global.css">
  <link rel="stylesheet" href="styles/listagemCard.css">
  <link rel="stylesheet" href="styles/listarPartidas.css">

  <title>Listar Partidas</title>

  <style>
  </style>
</head>
<body>
<main>
<!-- <?php echo "Dados da Partida $partida[PAR_CODIGO]"?>
<br>
<?php echo "Rounds: $partida[PAR_RODADAS] /Tipo de Vitória: $partida[TIV_NOME] /Vencedor: $partida[JOGVEN_NOME]"?>
<br>
<?php echo "Jogador 1: $partida[JOG1_NOME] /Seu Deck: $partida[DEC1_NOME] /Quantidade Final de Pontos: $partida[PAR_JOG1_VIDAFINAL] /Cartas Restantes: $partida[PAR_JOG1_QTDCARTASFINAL]"?>
<br>
<?php echo "Jogador 2: $partida[JOG2_NOME] /Seu Deck: $partida[DEC2_NOME] /Quantidade Final de Pontos: $partida[PAR_JOG2_VIDAFINAL] /Cartas Restantes: $partida[PAR_JOG2_QTDCARTASFINAL]"?> -->

  <ul class="list">
  <?php foreach($arrayPartidas as $partida) {
    $caminhoImagemJog1 = getCaminhoImagem($partida['JOG1_FOTO']);
    $caminhoImagemJog2 = getCaminhoImagem($partida['JOG2_FOTO']);
  ?>

  <div class="list-item-container">


    <li class="list-item list">

      <div class="card list-item" style="width: 18rem;">
        <div class="card-body">
          <h5 class="card-title">Dados Gerais da Partida</h5>
          <p class="card-text"><?php echo "Vencedor: $partida[JOGVEN_NOME]" ?></p>
          <p class="card-text"><?php echo "Rodadas: $partida[PAR_RODADAS]" ?></p>
          <p class="card-text"><?php echo "Tipo de Vitória: $partida[TIV_NOME]" ?></p>

        </div>
      </div>

      <div class="card list-item" style="width: 18rem;">
        <img class="item-image" src="<?php echo $caminhoImagemJog1?>" alt="<?php echo $partida['JOG1_NOME']?>" >
        <div class="card-body">
          <h5 class="card-title"><?php echo "$partida[JOG1_NOME] (Jogador 1)"  ?></h5>
          <p class="card-text"><?php echo "Seu Deck: $partida[DEC1_NOME]" ?></p>
          <p class="card-text"><?php echo "Pontos de Vida: $partida[PAR_JOG1_VIDAFINAL]" ?></p>
          <p class="card-text"><?php echo "Cartas Restantes: $partida[PAR_JOG1_QTDCARTASFINAL]" ?></p>

        </div>
      </div>

      <div class="card list-item" style="width: 18rem;">
        <img class="item-image" src="<?php echo $caminhoImagemJog2?>" alt="<?php echo $partida['JOG2_NOME']?>" >
        <div class="card-body">
          <h5 class="card-title"><?php echo "$partida[JOG2_NOME] (Jogador 2)"  ?></h5>
          <p class="card-text"><?php echo "Seu Deck: $partida[DEC2_NOME]" ?></p>
          <p class="card-text"><?php echo "Pontos de Vida: $partida[PAR_JOG2_VIDAFINAL]" ?></p>
          <p class="card-text"><?php echo "Cartas Restantes: $partida[PAR_JOG2_QTDCARTASFINAL]" ?></p>

        </div>
      </div>

    </li>
      <hr class="divider"></hr>
    </div>


  <?php } ?>
  </ul>
</main>
</body>
<?php include("design2.php"); ?>
