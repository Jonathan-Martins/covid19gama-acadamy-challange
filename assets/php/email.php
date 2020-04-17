<?php

    // Verificando se o campo email foi preenchido.
    if (isset($_POST['email'] && !empty($_POST['email']))) {
        // Pegando os valores do formulário
        $name = addslashes($_POST['name']);
        $email = addslashes($_POST['email']);
        $message = addslashes($_POST['message']);

        // Montanto o e-mail
        $to = "jonathan.santosmartins@gmail.com";
        $subject = "Contato - Covid-19 Challenge Hiring Coders";
        $body = "Nome: ".$name."\n"
                ."E-mail: ".$email."\n"
                ."Mensagem: ".$message;
        $header = "From: ".$email."\n"
                    ."Reply-To: ".$email."\n"
                    ."X=Mailer:PHP/".phpversion();

        // Enviando e-mail
        if (mail($to, $subject, $body, $header)) {
            echo("Mensagem enviada com sucesso!");
        } else {
            echo("Houve um erro no envio da mensagem!");
        }
        
    }

?>