<?php

require_once "ProdutoDAO.php";

$produto = new ProdutoDAO();

$informacoesProdutos = $produto->listar();


?>

<!DOCTYPE html>
<html lang="ptbr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Produtos Cadastrados</h1>

    <table border="1">
        <thead>
            <tr>
                <th>ID</th>
                <th>Nome</th>
                <th>Preço</th>
                <th>Quantidade</th>
                <th>Editar</th>
                <th>Editar</th0>
                <th>Excluir</th0>
            </tr>
        </thead>

        <tbody>
            <?php 
            foreach ($informacoesProdutos as $produto) {
            ?>
                <tr>
                    <td><?=$produto['id']?></td>
                    <td><?=$produto['nome']?></td>
                    <td><?=$produto['preco']?></td>
                    <td><?=$produto['quantidade']?></td>
                    <!-- Visualizar -->
                    <td><a href="vizualizar.php?id=<?= $produto['id'] ?>">Visualizar</a></td>
                    <!-- Editar -->
                    <td>
                        <a href="editar.php?id=<?= $produto['id'] ?>">Editar</a>
                    </td>
                    <!-- Excluir -->
                    <td>
                        <form action="excluir.php" method="post">
                            <input type="hidden" value="<?= $produto['id'] ?>" name="id">
                            <button type="submit">Excluir</button>
                        </form>
                    </td>
                </tr>
            <?php
            }
            ?>
        </tbody>
    </table>
    <br>
    <a href="cadastrar.php">Cadastrar novo produto</a>
    <br><br>
    <a href="cadastrarPedido.php">Cadastrar novo pedido</a>
</body>
</html>