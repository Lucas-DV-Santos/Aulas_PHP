
<?php
header("refresh:6;url=../admin/dashboard.php");
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro realizado</title>

    <style>
        body {
            margin: 0;
            font-family: Arial, sans-serif;
            background: linear-gradient(135deg, #063b78, #0878df);
            height: 100vh;
            display: flex;
            justify-content: center;
            align-items: center;
        }

        .caixa {
            background: white;
            width: 400px;
            padding: 45px 30px;
            border-radius: 20px;
            text-align: center;
            box-shadow: 0 5px 20px rgba(0,0,0,0.2);
        }

        .icone {
            background: #e1f5e9;
            color: lightcoral;
            width: 75px;
            height: 75px;
            border-radius: 50%;
            font-size: 45px;
            line-height: 75px;
            margin: 0 auto 20px;
        }

        h2 {
            color: #123c70;
            margin-bottom: 12px;
        }

        p {
            color: #65758b;
            font-size: 15px;
        }

        .tempo {
            color: #0865bd;
            font-weight: bold;
            margin-top: 25px;
        }

        .linha {
            height: 5px;
            background: #e5edf5;
            border-radius: 10px;
            margin-top: 15px;
            overflow: hidden;
        }

        .progresso {
            height: 100%;
            background: #0878df;
            width: 100%;
            animation: carregar 6s linear forwards;
        }

        @keyframes carregar {
            from { width: 100%; }
            to { width: 0%; }
        }
    </style>
</head>

<body>

    <div class="caixa">

        <div class="icone">X</div>

        <h2>Usuário cadastrado!</h2>

        <p>Email de usuário já cadastrado.</p>

        <p class="tempo">
            Redirecionando em 6 segundos...
        </p>

        <div class="linha">
            <div class="progresso"></div>
        </div>

    </div>

</body>
</html>
