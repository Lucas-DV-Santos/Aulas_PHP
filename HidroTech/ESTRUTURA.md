# HidroTech: nova estrutura

Coloque a pasta `HidroTech` em `htdocs` (XAMPP) e abra `http://localhost/HidroTech/`.

```
HidroTech/
├── index.html                 (era TelaInicial/index.html)
├── contato.html
├── pages/
│   ├── login.html             (era Cadastro_Dashboards/TelaLogin.html)
│   └── manutencao.html        (página solta, não é usada por nenhum link)
├── app/
│   ├── auth/                  processa_login.php, processa_cadastro.php, usuario_ja_cadastrado.php
│   ├── admin/dashboard.php    (era ADM_DashBoard.php)
│   ├── morador/dashboard.php  (era Morador_DashBoard.php)
│   └── manutencao/            dashboard.php (era Manutencao_DashBoard.php), simulador.php (era Simulador_DashBoard.php)
├── includes/                  Conexao.php, UsuarioDAO.php
├── database/hidrotech.sql
└── assets/
    ├── css/  site.css, app.css, manutencao.css  (cada um só importa as partes em site/, app/, manutencao/)
    ├── js/   site/particulas.js, app/adm.js, app/simulador.js
    └── img/  site/ (imagens do site), app/ (check.png, imagem_fundo_status.png)
```

## CSS
Os 3 arquivos CSS originais foram cortados em partes, sem alterar nenhuma regra e mantendo a ordem. Juntando as partes na ordem, o resultado é idêntico ao original, byte a byte.
Única linha editada dentro do CSS: o `url()` da imagem de fundo do status do simulador.

| Antes | Agora |
|---|---|
| style.css | assets/css/site.css + site/{base, cabecalho, sensor, empresa, banner, tecnologias, rodape}.css |
| lucas.css | assets/css/app.css + app/{login, dashboard, cards, cadastro_usuario}.css |
| Manutencao.css | assets/css/manutencao.css + manutencao/{layout, boas_vindas, cards, menu, simulador}.css |
| i.css (não era usado) | assets/css/_nao_usado/i.css |

## Imagens renomeadas
| Antes | Agora |
|---|---|
| Logo Hidrotech_ Inovação em Água.png | assets/img/site/logo_hidrotech.png |
| Logo_Hidrotech_em_Azul_e_Branco-removebg-preview.png | assets/img/site/logo_hidrotech_azul_branco.png |
| ImagemFundoStatus.png | assets/img/app/imagem_fundo_status.png |
