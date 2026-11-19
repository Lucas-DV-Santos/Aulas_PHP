const conteudoOriginal = document.getElementById("conteudo").innerHTML;

function mostrarCadastro() {
    document.getElementById("conteudo").innerHTML = `
        <div class="caixa_cadastro">
            <h1>Cadastrar Novo Usuário</h1>
            <p>Preencha as informações abaixo para cadastrar um novo usuário</p>
            <hr>
            <div class="form-cadastro">
                <form class="formulario_cadastro" action="../auth/processa_cadastro.php" method="POST">
                    <div class="label_cadastro">
                        <div class="campo_cadastro">
                            <label for="nome"><i class="fa-solid fa-user"></i> Nome Completo</label>
                            <input type="text" id="nome" name="nome" required placeholder="Nome...">
                        </div>
                        <div class="campo_cadastro">
                            <label for="email"><i class="fa-solid fa-envelope"></i> Email Completo</label>
                            <input type="email" id="email" name="email" required placeholder="Email...">
                        </div>
                        <div class="campo_cadastro">
                            <label for="acesso"><i class="fa-solid fa-mask"></i> Tipo de acesso</label>
                            <select id="acesso" name="acesso" required>
                                <option value="" disabled selected>Escolha...</option>
                                <option value="man">Manutenção</option>
                                <option value="mor">Morador</option>
                            </select>
                        </div>
                        <div class="campo_cadastro">
                            <label for="senha"><i class="fa-solid fa-lock"></i> Senha</label>
                            <input type="password" id="senha" name="senha" required placeholder="Senha...">
                        </div>
                    </div>
                    <button type="submit">Cadastrar novo usuário</button>
                </form>
            </div>
        </div>
    `;
}

function mostrarInicio() {

    document.getElementById("conteudo").innerHTML = conteudoOriginal;

}