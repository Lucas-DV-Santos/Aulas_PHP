<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>


<body>

    <h1>Informe os produtos</h1>

    <form action="processa.php" method="POST">
        <label>Produto 1: </label>
        <input type="text" name="prod1"><br>
        <label>Preço: </label>
        <input type="number" step="0.01" name="preço1"><br>
        <label>Estoque: </label>
        <input type="number" name="est1"><br><br>

        <label>Produto 2: </label>
        <input type="text" name="prod2"><br>
        <label>Preço: </label>
        <input type="number" step="0.01" name="preço2"><br>
        <label>Estoque: </label>
        <input type="number" name="est2"><br><br>

        <label>Produto 3: </label>
        <input type="text" name="prod3"><br>
        <label>Preço: </label>
        <input type="number" step="0.01" name="preço3"><br>
        <label>Estoque: </label>
        <input type="number" name="est3"><br><br>

        <label>Produto 4: </label>
        <input type="text" name="prod4"><br>
        <label>Preço: </label>
        <input type="number" step="0.01" name="preço4"><br>
        <label>Estoque: </label>
        <input type="number" name="est4"><br><br>
        <label>Produto 5: </label>

        <input type="text" name="prod5"><br>
        <label>Preço: </label>
        <input type="number" step="0.01" name="preço5"><br>
        <label>Estoque: </label>
        <input type="number" name="est5"><br><br>
        <button type="Submit">Enviar</button>
    </form>
</body>
</html>