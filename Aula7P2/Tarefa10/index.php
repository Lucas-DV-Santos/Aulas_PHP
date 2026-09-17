<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>


<body>

    <h1>Informe seus alunos</h1>

    <form action="processa.php" method="POST">
        <label>Aluno: </label>
        <input type="text" name="nome1"><br>
        <label>Curso: </label>
        <input type="text" name="cur1"><br>
        <label>Nota 1: </label>
        <input type="number" step="0.01" name="nota11"><br>
        <label>Nota 2: </label>
        <input type="number" step="0.01" name="nota12"><br>
        <label>Nota 3: </label>
        <input type="number" step="0.01" name="nota13"><br><br>

        <label>Aluno: </label>
        <input type="text" name="nome2"><br>
        <label>Curso: </label>
        <input type="text" name="cur2"><br>
        <label>Nota 1: </label>
        <input type="number" step="0.01" name="nota21"><br>
        <label>Nota 2: </label>
        <input type="number" step="0.01" name="nota22"><br>
        <label>Nota 3: </label>
        <input type="number" step="0.01" name="nota23"><br><br>

        <label>Aluno: </label>
        <input type="text" name="nome3"><br>
        <label>Curso: </label>
        <input type="text" name="cur3"><br>
        <label>Nota 1: </label>
        <input type="float" name="nota31"><br>
        <label>Nota 2: </label>
        <input type="float" name="nota32"><br>
        <label>Nota 3: </label>
        <input type="float" name="nota33"><br><br>

        <label>Aluno: </label>
        <input type="text" name="nome4"><br>
        <label>Curso: </label>
        <input type="text" name="cur4"><br>
        <label>Nota 1: </label>
        <input type="number" step="0.01" name="nota41"><br>
        <label>Nota 2: </label>
        <input type="number" step="0.01"name="nota42"><br>
        <label>Nota 3: </label>
        <input type="number" step="0.01" name="nota43"><br><br>

        <label>Aluno: </label>
        <input type="text" name="nome5"><br>
        <label>Curso:  </label>
        <input type="text" name="cur5"><br>
        <label>Nota 1: </label>
        <input type="number" step="0.01" name="nota51"><br>
        <label>Nota 2: </label>
        <input type="number" step="0.01" name="nota52"><br>
        <label>Nota 3: </label>
        <input type="number" step="0.01" name="nota53"><br><br>
       
        <button type="Submit">Enviar</button>
    </form>
</body>
</html>