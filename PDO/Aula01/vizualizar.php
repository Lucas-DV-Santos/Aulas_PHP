    <?php

    require_once("produtoDAO.php");

    $idInformado = $_GET['id'];



    $produtoDAO = new ProdutoDAO();
    $informacoes = $produtoDAO->buscarPorId($idInformado);

    if(!$informacoes){
        exit("Produto não encontrado!");
    }



    ?>

    <!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Produto: <?= $informacoes['nome'] ?></title>
    </head>
    <body>
        <p><b>ID: </b><?=$informacoes['id']?></p>
        <p><b>Nome: </b><?=$informacoes['nome']?></p>
        <p><b>Preço: </b><?=$informacoes['preco']?></p>
        <p><b>Quantidade: </b><?=$informacoes['quantidade']?></p>

        <a href="index.php">Voltar a tela inicial</a>
    </body>
    </html>