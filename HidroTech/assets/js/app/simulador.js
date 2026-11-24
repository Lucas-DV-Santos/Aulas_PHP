const agua = document.getElementById("agua");
const porcentagem = document.getElementById("porcentagem");
const IconStatus = document.getElementById("IconStatus")
const Analise_Aguardando = document.getElementById("Analise_Aguardando");
const funcionamento = document.getElementById("funcionamento");
const range_agua = document.getElementById("range-agua");

range_agua.addEventListener('input', function(){

    let aumentar_agua = range_agua.value;
    porcentagem.innerText = aumentar_agua + "%";
    agua.style.height = aumentar_agua + "%";

   IconStatus.style.height = '90px'; 
   IconStatus.style.width = '90px';
   IconStatus.style.borderRadius = '90%';
   IconStatus.style.objectFit = 'cover'; 

    if (aumentar_agua <= 20) {
        Analise_Aguardando.innerText = 'Estado crítico';
        IconStatus.src = '../../assets/img/app/icone_critico_80x80.png';
        Analise_Aguardando.style.color = 'red';
        funcionamento.innerText = 'Funcionamento crítico detectado';
        
    }else if (aumentar_agua > 20 && aumentar_agua < 70) {
        Analise_Aguardando.innerText = 'Estado Intermediário';
        IconStatus.src = '../../assets/img/app/icone_intermediario_80x80.png';
        Analise_Aguardando.style.color = 'yellow';
        funcionamento.innerText = 'Estado de atenção detectado';
        
    }else if (aumentar_agua >= 70) {
        Analise_Aguardando.innerText = 'Estado Normal';
        IconStatus.src = '../../assets/img/app/check.png';
        Analise_Aguardando.style.color = 'green';
        funcionamento.innerText = 'Funcionamento Adequado';
        
    }
        

}) ;
