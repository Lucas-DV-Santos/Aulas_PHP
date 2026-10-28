<?php

class Notificacao{
    
    public function Enviar($mensagem){
        echo '<br>Enviando Notificação<br>';
    }
}

class NotificacaoEmail extends Notificacao{
    public function Enviar($mensagem){
        echo '<br>Canal: Email <br> 
              Mensagem: ' . $mensagem . '<br>';
    }
}

class NotificacaoSMS extends Notificacao{
    public function Enviar($mensagem){
        echo '<br>Canal: SMS <br> 
              Mensagem: ' . $mensagem . '<br>';
    }
}

class NotificacaoPush extends Notificacao{
    public function Enviar($mensagem){
        echo '<br>Canal: Push <br> 
              Mensagem: ' . $mensagem . '<br>';
    }
}

$notificacao1 = new NotificacaoEmail();
$notificacao1->Enviar("Sua inscrição foi realizada com sucesso!");
echo '<br>';
$notificacao2 = new NotificacaoSMS();
$notificacao2->Enviar("Sua inscrição foi realizada com sucesso!");
echo '<br>';    
$notificacao3 = new NotificacaoPush();
$notificacao3->Enviar("Sua inscrição foi realizada com sucesso!");


?>