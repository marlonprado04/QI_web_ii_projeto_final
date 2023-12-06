<!DOCTYPE html>
<html lang="pt-BR">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="src/css/cardapio.css">

  <title>CARDAPIO POA-BURGUER</title>
</head>

<body>


  <div class="container">
    <h1>POA-BURGUER: Explorando Sabores Exclusivos em Cada Mordida</h1>
 
    <button class=b1>Cardapio</button>
    <button class=b1>Cadastrar comanda</button>
    <button class=b1>Detalhes item</button>
    <button class=b1>Detalhes comanda</button>

    <main>

      <?php

      use Marlon\QiWebIiProjetoFinal\model\Item;

      session_start();
      ?>

      <?php

      if (empty($_SESSION["list_of_itens"])):
        ?>

        <div>
          <p>Nenhum item cadastrado na base de dados!</p>
        </div>

        <?php

      endif;

      foreach ($_SESSION["list_of_itens"] as $item):
        ?>
        <div class="item_container">
          <div class="img_container">
            <img class="img" src="<?= $item["imagem"] ?>">
          </div>
          <h3>
            <?= $item["nome"] ?>
          </h3>
          <p>R$
            <?= $item["preco"] ?>
          </p>
          <!-- Botão para redirecionar para controller que redireciona para os detalhes de acordo com o ID do item -->
          <a class="button" href="../Controller/ItemController.php?operation=showDetails&id=<?= $item["id"] ?>">DETALHES</a> 
          
          <a class="button" href="../Controller/ItemComandaController.php?operation=addItem&id=<?= $item["id"] ?>">ADICIONAR</a>
        </div>
        <?php
      endforeach;

      ?>

    </main>

    <button class=b2>Detalhes-comanda</button>

  </div>

</body>

</html>