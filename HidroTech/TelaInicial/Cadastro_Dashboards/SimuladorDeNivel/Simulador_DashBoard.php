<?php session_start()?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Morador</title>
    <link rel="stylesheet" href="Manutencao.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">
    <script src="simulador.js" defer></script>
</head>
<body class="mo_body">

    <main class="mo_main">
        <nav class="mo_sidebar">
            <div class="mo_logo">
                <img src="https://lh3.googleusercontent.com/d/1aKopSV6i7SPvYhGLzGmJc5Q3MF7Y6Y1b" alt="Logo">
            </div>
            <ul class="mo_nav-links">
        
                    <li class="mo_nav-item_Active">
                        <div class="DivItem">
                            <a href="Manutencao_DashBoard.php">
                                <span class="mo_icon"><i class="fa-solid fa-house"></i></span>
                                <span class="mo_text">Início</span>
                            </a>
                        </div>
                    </li>
        
        
                    <li class="mo_nav-item">
                        <div class="DivItem">
                            <a href="#">
                                <span class="mo_icon"><i class="fa-regular fa-bell"></i></span>
                                <span class="mo_text">Notificação</span>
                            </a>
                        </div>
                    </li>

                    <li class="mo_nav-item">
                        <div class="DivItem">
                            <a href="Simulador_DashBoard.php">
                                <span class="mo_icon"><i class="fa-solid fa-plus"></i></span>
                                <span class="mo_text">Simulador</span>
                            </a>
                        </div>
                    </li>
        
            </ul>
        </nav>
        <nav>
            <div class="conteiner">
                <div class="simulador">
                    <h1>Simulador de nível da água</h1>
                    <p>Altere o nível de água do reservatório.</p>

                <div class="area-simulador">

                <div class="tanque">
                    <div class="agua" id="agua"></div>
                </div>

                <div class="dados">
                    <h2 id="porcentagem">50%</h2>
                    <p id="status">Nível normal</p>
                </div>

            </div>

            <form action="SalvarSimulacao.php" method="POST">

                <label for="nivel">Nível do reservatório</label>

                <input type="range" name="nivel" id="nivel"
                min="0" max="100" value="50">

                <button type="submit">Salvar simulação</button>

            </form>
        </div>

        </div>
        </nav>
    </main>
</body>

</html>