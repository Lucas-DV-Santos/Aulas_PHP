<?php

Class Notificacao{


    public function enviarMensagem($mensagem){
        return 'Enviando Mensagem...';
    }
}

Class Email extends Notificacao{
    public function enviarMensagem($mensagem){
        return 'Enviando email... <br> Mensagem: ' . $mensagem . '<br><br>';
    }
}

Class SMS extends Notificacao{
    public function enviarMensagem($mensagem){
        return 'Enviando SMS... <br> Mensagem: ' . $mensagem . '<br><br>';
    }
}

$email = new Email();
$sms = new SMS();
$sms2 = new SMS();

$mensagens = [
    $email, $sms, $sms2
];

foreach($mensagens as $mensagem){
    echo $mensagem->enviarMensagem("Prova de POO hoje");
}




?>