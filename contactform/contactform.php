<?php 

$nombre = $_POST['name2'];
$mail = $_POST['email'];
$asunto = $_POST['subject'];
$telefono = $_POST['telefono'];
$mensaje = $_POST['message'];


$header = 'from: '.$mail."\r\n";
$header .= "X-Mailer:PHP/".phpversion()."\r\n";
$header .= "Mime-Version:1.0 \r\n";
$header .= "content-Type:text/plain";

$message .= "Enviado por: ".$nombre."\r\n";
$message .= "Su e-mail es: ".$mail."\r\n";
$message .= "Telefono: ".$telefono."\r\n";
$message .= "Asunto: ".$asunto."\r\n";
$message .= "Mensaje: ".$mensaje."\r\n";
$message .= "enviado el: ".date('d/m/Y',time());


$para = 'piero.avp@gmail.com';
$asunto = 'SISTEMIKA | Formulario Web : '.$asunto;

if(mail($para,$asunto,utf8_decode($message),$header))
echo "<script type='text/javascript'>alert('Tu message ha sido enviado exitosamente');</script>";
echo "<script type='text/javascript'>window.location.href='http://www.sistemika.cl';</script>";

 ?>