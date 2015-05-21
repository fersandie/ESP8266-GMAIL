<?php

$to      = 'jesusmorantecortes@gmail.com';
$subject = 'prueba mandar email a gmail por php';
$message = 'Hola que tal vamos a probar otra vez';
$headers = 'From: webmaster@example.com' . "\r\n" .
    'Reply-To: webmaster@example.com' . "\r\n" .
    'X-Mailer: PHP/' . phpversion();



$retorna=mail($to, $subject, $message, $headers);

echo "Hola mundo el retorno es $retorna";


?>
