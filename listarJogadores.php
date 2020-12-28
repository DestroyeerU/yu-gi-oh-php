<!DOCTYPE html>
<html lang="en">

<?php
require('./scripts/banco/config.php');
require('./scripts/banco/jogadoresBanco.php');
require('./scripts/file.php');

$arrayJogadores = selectJogadores($conexao, "JOG_CODIGO, JOG_NOME, JOG_FOTO");
?>

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Listar Jogadores</title>
</head>
<body>
  <ul>
  <?php foreach($arrayJogadores as $jogador) {
    $caminhoImagem = getCaminhoImagem($jogador['JOG_FOTO']);
  ?>

    <li>
      <img src="<?php echo $caminhoImagem?>" alt="<?php echo $jogador['JOG_NOME']?>">
      <?php echo "$jogador[JOG_CODIGO] - $jogador[JOG_NOME]"  ?>
    </li>

  <?php } ?>
  </ul>
</body>
</html>
