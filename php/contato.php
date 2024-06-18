<?php 

    $nome = addcslashes($_POST['nome']);
    $email = addcslashes($_POST['email']);
    $numero = addcslashes($_POST['numero']);
    $mensagem = addcslashes($_POST['mensagem']);

    $destino = "contatolouanderson@gmail.com";
    $assunto = "Contato | Portfolio";

    $corpo = 
    "Nome: ".$nome."\n".
    "E-mail: ".$email."\n".
    "Número: ".$numero."\n".
    "Mensagem: ".$mensagem;

    $cabeca = "From: contatolouanderson@gmail.com"."\n"."Reply-to: ".$email."\n"."X=Mailer:PHP/".phpversion();

    if(mail($destino,$assunto,$corpo,$cabeca)) {
        echo("E-mail enviado!");
    }
    else {
        echo("Falha em enviar o e-mail!");
    }
?>