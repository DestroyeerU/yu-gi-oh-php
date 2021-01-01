<?php include("design1.php"); ?>

<?php
require('./scripts/file.php');
require('./scripts/bootstrap.php');
require('./scripts/banco/config.php');
require('./scripts/banco/jogadoresBanco.php');

$nomeArquivo = $_FILES['foto']['name'];
$nome = $_POST['nome'];

insertJogador($conexao, $nome, $nomeArquivo);
salvarArquivo('foto');
?>

  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Jogador Salvo</title>
</head>
<body>

  <br>
  <a href="<?php echo BASE_URL?>/jogador.php">Voltar</a>
  <br>
  <a href="<?php echo BASE_URL?>/listarJogadores.php">Ir para a Listagem de Jogadores</a>

</body>
<?php include("design2.php"); ?>