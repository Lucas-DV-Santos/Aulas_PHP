<?php session_start()?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Morador</title>
    <link rel="stylesheet" href="../../assets/css/app.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">
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
                            <a href="#">
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
        
            </ul>
        </nav>
        <nav>
            <div class="conteiner">
                <div class="texto">
                    <h1><i class="fa-solid fa-user"></i>Bem Vindo(a), <?php echo $_SESSION['nome'];?>!</h1>
                    <p>Confira o consumo e o status da água do seu prédio.</p>
                </div>

                <section class="sessao">
                    <article class="article1">
                        <img src="https://lh3.googleusercontent.com/d/174ieGGQu0GnZWYBnuVj-_ut5xGbGkhTH" alt="imagem">

                            <div class="div1_article">
                                <h2 class="h2">Gasto Total do prédio</h2>
                                <h1 class="h1">12.750 L</h1>
                            </div>
                    </article>

                    <article class="article2">
                        <h1>Tabela 2</h1>
                    </article>
                </section>
            </div>
        </nav>
    </main>
</body>
</html>