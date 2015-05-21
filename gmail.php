<!DOCTYPE html>
<html>
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
    <title>PHPMailer - GMail SMTP test</title>
</head>
<body>
<?php

//SMTP needs accurate times, and the PHP time zone MUST be set
//This should be done in your php.ini, but this is how to do it if you don't have access to that
//date_default_timezone_set('Etc/UTC');

require 'PHPMailerAutoload.php';

//Create a new PHPMailer instance
$mail = new PHPMailer();
//Tell PHPMailer to use SMTP
$mail->isSMTP();
//Enable SMTP debugging
// 0 = off (for production use)
// 1 = client messages
// 2 = client and server messages
$mail->SMTPDebug = 0;
//Ask for HTML-friendly debug output
$mail->Debugoutput = 'html';
//Set the hostname of the mail server
$mail->Host = 'smtp.gmail.com';
//Set the SMTP port number - 587 for authenticated TLS, a.k.a. RFC4409 SMTP submission
$mail->Port = 587;
//Set the encryption system to use - ssl (deprecated) or tls
$mail->SMTPSecure = 'tls';
//Whether to use SMTP authentication
$mail->SMTPAuth = true;
//Username to use for SMTP authentication - use full email address for gmail
$mail->Username = "scs.quiron@gmail.com";
//Password to use for SMTP authentication
$mail->Password = "pitotieso69";
//Set who the message is to be sent from
$mail->setFrom('scs.quiron@gmail.com', 'Correo SCS');
//Set an alternative reply-to address
//$mail->addReplyTo('jesusmorantecortes@gmail.com', 'First Last');
//Set who the message is to be sent to
$mail->addAddress('jesusmorantecortes@gmail.com', 'Jesús Morante Cortés');
//Set the subject line
$mail->Subject = 'Asunto del correo';
//Read an HTML message body from an external file, convert referenced images to embedded,
//convert HTML into a basic plain-text alternative body
$mail->msgHTML("ahora sí que se veo el correo");
//Replace the plain text body with one created manually

//$mail->AltBody = 'This is a plain-text message body';
//Attach an image file
$mail->addAttachment("examples/index.html");


//send the message, check for errors
if (!$mail->send()) {
    echo "Mailer Error: " . $mail->ErrorInfo;
} else {
    echo "Message sent!";

}
?>
</body>
</html>
