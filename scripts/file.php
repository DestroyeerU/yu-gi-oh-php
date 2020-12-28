<?php

function getCaminhoImagem($nomeImagem) {
  $caminhoImagem = 'imagens' . DIRECTORY_SEPARATOR . $nomeImagem;

  return $caminhoImagem;
}

function salvarArquivo($nome) {
  $nomeArquivo = $_FILES[$nome]['name'];
  $nomeTemporarioArquivo = $_FILES[$nome]['tmp_name'];

  $raiz = getcwd();
  $caminhoCompletoAquivo = $raiz . DIRECTORY_SEPARATOR . 'imagens' . DIRECTORY_SEPARATOR . $nomeArquivo;

  move_uploaded_file($nomeTemporarioArquivo, $caminhoCompletoAquivo);
}

?>
