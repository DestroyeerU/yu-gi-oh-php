<?php
require('scripts/file.php');
require('./scripts/banco/config.php');
require('./scripts/banco/cartasBanco.php');

$carfoto = $_FILES['carfoto']['name'];
$carnome = $_POST['nome'];
$cardesc = $_POST['desc'];
$cartipo = $_POST['tipo'];

insertCarta($conexao, $carfoto, $carnome, $cardesc, $cartipo);
salvarArquivo('carfoto');
?>
