<?php

$sendgrid = new SendGrid('deyves', 'q13791919');
$email = new SendGrid\Email();
$email
    ->addTo('deyvescarvalho@gmail.com')
    ->setFrom('deyvescarvalho@gmail.com')
    ->setSubject('Subject goes here')
    ->setText('Hello World!')
    ->setHtml('<strong>Hello World!</strong>')
;

$sendgrid->send($email);

// Or catch the error

try {
    $sendgrid->send($email);
} catch(\SendGrid\Exception $e) {
    echo $e->getCode();
    foreach($e->getErrors() as $er) {
        echo $er;
    }
}

?>