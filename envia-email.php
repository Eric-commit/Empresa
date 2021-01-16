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
$mail->Username = "goncalsystem@gmail.com";
$mail->Password = "Chevrolet@spin15";

$mail->setFrom($mail->Username,"GoncalSystem");
$mail->addAddress($email);
$mail->addAddress('goncalsystem@gmail.com');

$mail->Subject = "Orcamento recebido!";  

$conteudo = "Você recebeu um pedido de $nome ($email):
<br><br>
Mensagem: <br>
$mensagem 
 ";

$mail->IsHTML(true);
$mail->Body = $conteudo;


if ($mail-> send()){


}else {
	echo "Falha ao enviar o e-mail: " . $mail->ErrorInfo;
}


?>
