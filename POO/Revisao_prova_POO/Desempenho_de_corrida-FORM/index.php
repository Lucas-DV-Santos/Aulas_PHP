<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cálculo de Desempenho do Atleta</title>
</head>
<body>

    <h2>Dados do Atleta</h2>

    <form action="processa.php" method="POST">
        
        <label for="nome">Nome do atleta:</label><br>
        <input type="text" id="nome" name="nome" required><br><br>

        <label for="distancia">Distância percorrida (km):</label><br>
        <input type="number" id="distancia" name="distancia" step="any" min="0.01" required><br><br>

        <label for="tempo">Tempo utilizado (horas):</label><br>
        <input type="number" id="tempo" name="tempo" step="any" min="0.01" required><br><br>

        <button type="submit">Calcular</button>

    </form>

</body>
</html>