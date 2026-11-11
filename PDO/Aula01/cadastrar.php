<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastrar novo produto</title>
</head>
<body>
    <h1>Cadastrar produtos</h1>
    <form action="salvar.php" method="POST">
        <label for="">Nome:</label>
        <input type="text" name="nome" required>
        <br><br>

        <label for="">Preço:</label>
        <input type="number" name="preco" required>
        <br><br>

        <label for="">Quantidade:</label>
        <input type="number" name="quantidade">
        <br><br>

        <button type="submit">Cadastrar</button>
        <a href="index.php">Página de listagem</a>

    </form>
</body>
</html>