<?php session_start()?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Morador</title>
    <link rel="stylesheet" href="../../assets/css/manutencao.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">
    <script src="../../assets/js/app/simulador.js" defer></script>
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
                            <a href="dashboard.php">
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
                            <a href="simulador.php">
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

                        <hr>

                        <div class="linha1-simulador">
                            
                            <div class="Caixa_caixadeagua" id="Caixa_caixadeagua">
                                <div class="reservatorio" id="reservatorio">
                                     <div class="agua" id="agua"></div>
                                </div>
                                <p id="porcentagem">50%</p>
                                <h6>Nivel Atual</h6>
                                <hr>
                            </div>

                            <div class="Status_reservatorio" id="Status_reservatorio">
                                <img src="../../assets/img/app/check.png" alt="Ícone de confirmação normal" width="80" height="80" id="IconStatus">
                                <div class="textos_Status_reservatorio">
                                    <p class="p1">Status do reservatório</p>
                                    <p class="p2" id="Analise_Aguardando">Normal</p>
                                    <p class="p3" id="funcionamento">Funcionamento Adequado</p>
                                </div>
                            </div>
                        </div>

                        <div class="linha2simulador-nivel">
                            <form action="enviar_alerta.php" method="POST" class="form-simulador">
    
                                <div class="range-container">
                                    <label for="range-agua">
                                        <strong>Controle de simulação</strong><br>
                                        <span>Altere o nível de água do reservatório:</span>
                                    </label>
      
                                    <div class="controle-wrapper">
                                        <input type="range" name="nivel_agua" id="range-agua" min="0" max="100" value="50" oninput="document.getElementById('valor-porcentagem').value = this.value + '%'">
                                        <output id="valor-porcentagem" for="range-agua" class="output-porc">50%</output>
                                    </div>
                                </div>

                                <div class="enviar-porcentagem">
                                    <button type="submit">Enviar Alerta</button>
                                </div>

                            </form>
                        </div>
                </div>
            </div>

        </nav>
    </main>
</body>

</html>