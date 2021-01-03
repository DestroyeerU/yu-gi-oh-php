<?php include("design1.php"); ?>

<?php
require('./scripts/banco/config.php');
require('./scripts/banco/jogadoresBanco.php');
require('./scripts/file.php');
require('./scripts/bootstrap.php');

$arrayJogadores = selectJogadores($conexao, "JOG_CODIGO, JOG_NOME, JOG_FOTO");
?>

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <link rel="stylesheet" href="styles/global.css">
  <link rel="stylesheet" href="styles/listarJogadores.css">

  <title>Listar Jogadores</title>
</head>
<body>
  <main>
    <header>
      <h2>Listagem de Jogadores</h2>
      <a href="<?php echo BASE_URL?>/jogador.php" class="btn btn-primary">Adicionar Jogador</a>
    </header>

    <ul>
    <?php foreach($arrayJogadores as $jogador) {
      $caminhoImagem = getCaminhoImagem($jogador['JOG_FOTO']);
    ?>

      <li>
        <div class="card" style="width: 18rem;">
          <img class="user-image" src="<?php echo $caminhoImagem?>" alt="<?php echo $jogador['JOG_NOME']?>" >
          <div class="card-body">
            <h5 class="card-title"><?php echo $jogador['JOG_NOME']  ?></h5>
          </div>
        </div>
      </li>

    <?php } ?>
    </ul>
  </main>
</body>
<?php include("design2.php"); ?>
