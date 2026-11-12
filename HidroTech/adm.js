const conteudoOriginal = document.getElementById("conteudo").innerHTML;

function mostrarCadastro() {

    document.getElementById("conteudo").innerHTML = "<h1>Olá!</h1>";

}

function mostrarInicio() {

    document.getElementById("conteudo").innerHTML = conteudoOriginal;

}