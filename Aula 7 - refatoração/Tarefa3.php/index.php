<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Escolha</h1>
    <p>As operações disponíveis são: <br>
1:    *<br>
2:    /<br> 
3:    +<br>
4:    -</p>

<form action="processa.php" method="post">
    <label>Digite a operação:</label>
    <input type="text" name="op">
    <br><br>
    <label>Digite o primeiro valor:</label>
    <input type="number" name="v1">
    <br><br>
    <label>Digite o segundo valor:</label>
    <input type="number" name="v2">
    <br><br>
    <button type="submit">Enviar</button>
</form>


</body>
</html>