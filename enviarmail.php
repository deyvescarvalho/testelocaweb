
<?php
require_once 'head.php';
$nome = $_POST['nome'];
$email = $_POST['email'];
$cidade = $_POST['cidade'];
$estado = $_POST['estado'];
$rua = $_POST['rua'];
$mensagem = $_POST['mensagem'];

/*////*/
$to = "deyvescarvalho@gmail.com";
$subject = "Testando novo modo";
$message = "Nome: ". $nome . "<br/>";
$message .= "Email: ". $email . "<br/>";
$message .= "Cidade: ". $cidade . "<br/>";
$message .= "Estado: ". $estado . "<br/>";
$message .= "Rua: ". $rua . "<br/>";
$message .= "Mensagem: ". $mensagem . "<br/>";
$header = "MIME-Version: 1.0\n";
$header = "Content-type: text/html; charset=iso-8859-1\n";
$header = "From: $email\n";


mail($to, $subject, $message, $header);

echo "Mensagem enviada com Sucesso...";


//require("sendgrid-php/sendgrid-php.php");
//
//$sendgrid = new SendGrid('deyves', 'q13791919');
//$email = new SendGrid\Email();
//$email
//    ->addTo('deyvescarvalho@gmail.com')
//    ->setFrom('deyvescarvalho@gmail.com')
//    ->setSubject('Subject goes here')
//    ->setText('Hello World!')
//    ->setHtml('<strong>Hello World!</strong>')
//;
//
//$sendgrid->send($email);
//
//// Or catch the error
//
//try {
//    $sendgrid->send($email);
//} catch(\SendGrid\Exception $e) {
//    echo $e->getCode();
//    foreach($e->getErrors() as $er) {
//        echo $er;
//    }
//}
?>