<?php

require_once "ProdutoDAO.php";

$produtodAO = new ProdutoDAO();

$array = $produtodAO->listar()


?>


<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastrar Pedido</title>
</head>
<body>
    <h1>Cadastrar Pedido</h1>
    <form action="salvarPedido.php" method="POST">
        <label>Selecione o Produto</label>
        <select name="produto_id">
            <option value="" selected disabled>
                Selecione...
            </option>

            <?php
               foreach($array as $produto){
            ?>
            <option value="<?=$produto['id']?>">
                <?= $produto['nome'] ?>
            </option>
            <?php
               }
            ?>
        </select>
        <br>
        <label for="">Quantidade de Produtos</label>
        <input type="number" name="quantidade">
        <br><br>

        <button type="submit">Salvar</button>
    </form>
</body>
</html>