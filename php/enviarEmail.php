<?php

try{
    $nome = @trim(stripslashes($_POST['nome']));
    $email = @trim(stripslashes($_POST['email']));
    $conteudo = @trim(stripslashes($_POST['conteudo']));

    $to = "thiago_h_l@hotmail.com";
    $subject = "Email enviado do meu site.";
    $txt = $conteudo;
    $headers = "From: <$email>";

    $enviado = mail($to,$subject,$txt,$headers);

    if($enviado){
        echo json_encode("email enviado com sucesso.");
    }else{
        echo json_encode("Erro ao enviar o email.");
    }

}catch(Exception $e){
    $http_response_header(500);
    echo json_encode($e);
}

?>