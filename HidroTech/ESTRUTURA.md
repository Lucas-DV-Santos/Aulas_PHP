# HidroTech: estrutura do projeto

Coloque a pasta `HidroTech` em `htdocs` (XAMPP) e abra `http://localhost/HidroTech/`.
Banco de dados: importe `database/hidrotech.sql`.

```
HidroTech/
├── index.html                  Página inicial do site
├── contato.html                Página de contato
├── pages/
│   └── login.html              Tela de login
├── app/                        Telas e ações do sistema (PHP)
│   ├── auth/                   processa_login.php, processa_cadastro.php, usuario_ja_cadastrado.php
│   ├── admin/dashboard.php     Painel do administrador (cadastro de usuários)
│   ├── morador/dashboard.php   Painel do morador
│   └── manutencao/             dashboard.php, simulador.php, enviar_alerta.php, receber_alerta.php
├── includes/                   Código compartilhado pelo PHP
│   ├── Conexao.php             Conexão com o MySQL (usuário, senha, nome do banco)
│   └── dao/                    Acesso ao banco: UsuarioDAO.php, MedicaoDAO.php
├── database/hidrotech.sql      Script do banco
├── assets/
│   ├── css/
│   │   ├── site/               index.css + base, cabecalho, sensor, empresa, banner, tecnologias, rodape
│   │   ├── app/                index.css + login, dashboard, cards, cadastro_usuario
│   │   └── manutencao/         index.css + layout, boas_vindas, cards, menu, simulador
│   ├── js/                     site/particulas.js, app/adm.js, app/simulador.js
│   └── img/                    site/ (imagens do site), app/ (ícones e fundo do simulador)
└── _nao_usado/                 Arquivos sem uso (pode apagar)
```

## Onde mexer
| Quero mudar... | Arquivo |
|---|---|
| Dados de conexão com o banco | includes/Conexao.php |
| Consultas de usuário (login/cadastro) | includes/dao/UsuarioDAO.php |
| Consultas de medição (nível da água) | includes/dao/MedicaoDAO.php |
| Visual do site | assets/css/site/ (cada parte tem seu arquivo) |
| Visual dos painéis admin/morador | assets/css/app/ |
| Visual do painel de manutenção e simulador | assets/css/manutencao/ |

Cada pasta de CSS tem um `index.css` que apenas importa as partes na ordem certa. As páginas só ligam o `index.css`.

## O que mudou nesta reorganização
- Removida a pasta `TelaInicial/` (cópia antiga, tudo já existia na estrutura nova).
- `UsuarioDAO.php` e `MedicaoDAO.php` foram para `includes/dao/` (só o `require` de `Conexao.php` mudou dentro deles).
- `site.css`, `app.css` e `manutencao.css` viraram `site/index.css`, `app/index.css` e `manutencao/index.css`.
- CSS sem uso apagado: `.conteiner_cadastro`, `.ca_footer`, `.area-simulador` (2x), `.dados h2`, `.dados p`, `.alerta` e o arquivo `i.css`.
- `pages/manutencao.html` (página vazia que nenhum link usa) foi para `_nao_usado/`.
- Nenhuma lógica nem regra visual foi alterada: só os `<link>` do cabeçalho e os `require_once`.
- Aviso: `app/manutencao/receber_alerta.php` não é chamado por nenhuma página do projeto. Mantive no lugar caso algo externo o use.
