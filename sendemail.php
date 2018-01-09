<?php

require 'PHPMailer/PHPMailerAutoload.php';

$mail = new PHPMailer;

$nome = $_POST['nome']; 
$email = $_POST['email']; 
$message = $_POST['message']; 

//$mail->SMTPDebug = 3;                               // Enable verbose debug output

$mail->isSMTP();                                    // Set mailer to use SMTP
$mail->Host = 'smtp.live.com';  // Specify main and backup SMTP servers
$mail->SMTPAuth   = true; 
$mail->CharSet = 'UTF-8';                             // Enable SMTP authentication
$mail->Username = 'atendimentoautocc@outlook.com';                 // SMTP username
$mail->Password = 'Midia1001';                          // SMTP password
$mail->SMTPSecure = 'tls';                            // Enable TLS encryption, `ssl` also accepted
$mail->Port = 587; 
// $mail->SMTPDebug = 2;                                  // TCP port to connect to

$mail->setFrom('atendimentoautocc@outlook.com');
$mail->addAddress('rodrigo@midia100.com.br');     // Add a recipient
// $mail->addBCC('bcc@example.com');
$mail->isHTML(true);                                  // Set email format to HTML

$mail->Subject =  "Mensagem enviada do autocredcar.com.br";
$mail->Body    =  $message .'<br> Email:'. $email .'<br> Nome:'. $nome;


if(!$mail->send()) {
    echo 'Message could not be sent..';
    echo 'Mailer Error: ' . $mail->ErrorInfo;

    $message = array("response" => "Sua menssagem não foi enviada, por favor tente mais tarde!");
    $json = json_encode($message);
    echo $json;
} else {
     $message = array("response" => "Sua mensagem foi enviada com sucesso!, logo entraremos em contato.");
    $json = json_encode($message);
    echo $json;
}