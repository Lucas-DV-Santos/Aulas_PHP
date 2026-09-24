<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Carrinho de compras</title>
</head>
<body>
    <header style="background-color: beige">
        <h1 style="text-align: center">Carrinho de compras</h1>
    </header>

    <main>
        <h2>Informe seus produtos</h2>

        <form action="logica.php" method="post">
            <br>
            <label for="nome"><h3>Nome do cliente</h3></label>
            <label for="nome">Nome do cliente</label>
            <input type="text" name="nome" id="nome" placeholder="Nome do cliente..." required>

            <br>
            <label for="produto1"><h3>Produto 1 </h3></label>
            <label for="produto1">Nome do produto</label>
            <input type="text" name="produto1" id="produto1" placeholder="Nome do produto..." required>
            <br>
            <label for="preco1">Preço do produto</label>
            <input type="number" name="preco1" id="preco1" placeholder="Preço do produto..." required>
            <br>
            <label for="quant1">Quantidade do produto</label>
            <input type="number" name="quant1" id="quant1" placeholder="Quantidade do produto..." required>
            <br>

            <br>
            <label for="produto2"><h3>Produto 2 </h3></label>
            <label for="produto2">Nome do produto</label>
            <input type="text" name="produto2" id="produto2" placeholder="Nome do produto..." required>
            <br>
            <label for="preco2">Preço do produto</label>
            <input type="number" name="preco2" id="preco2" placeholder="Preço do produto..." required>
            <br>
            <label for="quant2">Quantidade do produto</label>
            <input type="number" name="quant2" id="quant2" placeholder="Quantidade do produto..." required>
            <br>

            <br>
            <label for="produto3"><h3>Produto 3 </h3></label>
            <label for="produto3">Nome do produto</label>
            <input type="text" name="produto3" id="produto3" placeholder="Nome do produto..." required>
            <br>
            <label for="preco3">Preço do produto</label>
            <input type="number" name="preco3" id="preco3" placeholder="Preço do produto..." required>
            <br>
            <label for="quant3">Quantidade do produto</label>
            <input type="number" name="quant3" id="quant3" placeholder="Quantidade do produto..." required>
            <br>
            
            <button type="submit">Enviar</button>
        </form>
    </main>
</body>

</html>