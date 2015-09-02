
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
$message = "Nome: ". $nome . "\n<br/>";
$message .= "Email: ". $email . "\n<br/>";
$message .= "Cidade: ". $cidade . "\n<br/>";
$message .= "Estado: ". $estado . "\n<br/>";
$message .= "Rua: ". $rua . "\n<br/>";
$message .= "Mensagem: ". $mensagem . "\n<br/>";
$header = "MIME-Version: 1.0\n";
$header = "Content-type: text/html; charset=iso-8859-1\n";
$header = "From: $email\n";
$redirect = "formulario.php";

try{
    mail($to, $subject, $message, $header);
    echo "Mensagem enviada com Sucesso...";
}catch (mysqli_sql_exception $e) {
    $e->getMessage();
}

?>
<br><br>
<div class="col-xs-12">
    <a href="formulario.php" class="col-xs-12 btn btn-success">Voltar</a>
</div>
<?php
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
require_once 'footer.php';
?>