<?php
$to      = 'deyvescarvalho@gmail.com';
$subject = 'Teste';
$message = 'hello';
$headers = 'From: webmaster@example.com' . "\r\n" .
    'Reply-To: webmaster@example.com' . "\r\n" .
    'X-Mailer: PHP/' . phpversion();

mail

if(mail($to, $subject, $message, $headers)){
    echo "Mensagem enviada com sucesso";
}else{

    echo "Falha no envio do email";
}
?>