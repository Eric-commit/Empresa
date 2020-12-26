<?php

$nome = utf8_encode($_POST['name']);
$email = utf8_encode($_POST['email']);
$mensagem = utf8_encode($_POST['mensagem']);

require 'PHPMailer\PHPMailerAutoload.php';

$mail = new PHPMailer;
$mail->iSSMTP(); 


$mail->Host = "smtp.gmail.com";
$mail->Port = "587";
$mail->SMTPSecure = "tls";
$mail->SMTPAuth = "true";
$mail->Username = "ericgoncalves232@gmail.com";
$mail->Password = "03102.000";

$mail->setFrom($mail->Username,"Eric");
$mail->addAddress('ericgoncalves232@gmail.com');
$mail->Subject = "GoncalSystem";  

$conteudo = "teste ";

$mail->IsHTML(true);
$mail->Body = $conteudo;

if ($mail-> send()){

	echo "E-mail Enviado com sucesso!";
}else {
	echo "Falha ao enviar o e-mail: " . $mail->ErrorInfo;
}


?>
