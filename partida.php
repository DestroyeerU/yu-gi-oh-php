<!DOCTYPE html>
<html lang="pt-br">
<head>
  <meta charset="UTF-8">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <link rel="stylesheet" href="styles/global.css">
  <link rel="stylesheet" href="styles/partida.css">

  <title>Cadastro de Cartas</title>
</head>
<body>
  <form action="salvarPartida.php" method="post">

  <h1>Cadastro de Partida</h1>

  <div class="row">
    <section>
      <h2>Dados Gerais</h2>

      <div>
        <label for="turnos">Digite a quantidade de turnos</label>
        <input type="number" name="turnos" id="turnos" placeholder="1, 2, 3, ...">
      </div>

      <div>
        <label for="formaVitoria">Selecione a forma de vitória</label>
        <select name="formaVitoria" id="formaVitoria">
          <option value="Acabaram-se os Pontos de Vida">Acabaram-se os Pontos de Vida</option>
          <option value="Acabaram-se as cartas">Acabaram-se as cartas</option>
          <option value="Vitoria Especial">Vitoria Especial</option>
        </select>
      </div>

      <div>
        <label for="jogadorVitorioso">Diigite o jogador vitorioso</label>
        <input type="number" name="jogadorVitorioso" id="jogadorVitorioso" placeholder="1 ou 2">
      </div>


    </section>

    <section>
      <h2>Dados do Jogador 1</h2>

      <div>
        <label for="jogador1Nome">Nome do jogador 1</label>
        <input type="text" name="jogador1Nome" id="jogador1Nome">
      </div>

      <div>
        <label for="jogador1Deck">Deck do jogador 1</label>
        <input type="text" name="jogador1Deck" id="jogador1Deck">
      </div>

      <div>
        <label for="jogador1PontosDeVida">Pontos de vida final do jogador 1</label>
        <input type="text" name="jogador1PontosDeVida" id="jogador1PontosDeVida">
      </div>

      <div>
        <label for="jogador1QtdCartas">Quantidade de cartas final do jogador 1</label>
        <input type="text" name="jogador1QtdCartas" id="jogador1QtdCartas">
      </div>

    </section>

    <section>
      <h2>Dados do Jogador 2</h2>

      <div>
        <label for="jogador2Nome">Nome do jogador 2</label>
        <input type="text" name="jogador2Nome" id="jogador2Nome">
      </div>

      <div>
        <label for="jogador2Deck">Deck do jogador 2</label>
        <input type="text" name="jogador2Deck" id="jogador2Deck">
      </div>

      <div>
        <label for="jogador2PontosDeVida">Pontos de vida final do jogador 2</label>
        <input type="text" name="jogador2PontosDeVida" id="jogador2PontosDeVida">
      </div>

      <div>
        <label for="jogador2QtdCartas">Quantidade de cartas final do jogador 2</label>
        <input type="text" name="jogador2QtdCartas" id="jogador2QtdCartas">
      </div>

    </section>

  </div>

  <button type="submit">Salvar</button>

</form>
</body>
</html>
