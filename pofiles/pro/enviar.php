<?php
// Valores enviados desde el formulario

if(empty($_POST['name']) || empty($_POST['email']) || empty($_POST['phone']) || empty($_POST['message']) || !filter_var($_POST['email'], FILTER_VALIDATE_EMAIL)) {
  die ("Es necesario completar todos los datos del formulario");
}

$nombre = $_POST["name"];

$email = $_POST["email"];

$telefono = $_POST["phone"];

$asunto = "ConectivoMX contacto de  $nombre";

$mensaje = $_POST["message"];


//$destinatario = "conectivomxtv@gmail.com";
$destinatario = "ant.qa3@gmail.com";

use PHPMailer\PHPMailer\PHPMailer;
require '../../vendor/autoload.php';
$mail = new PHPMailer;
$mail->isSMTP();
$mail->SMTPDebug = 2;
$mail->Host = 'mx1.hostinger.mx';
$mail->Port = 587;
$mail->SMTPAuth = true;
$mail->Username = 'no-reply@conectivomx.com';
$mail->Password = '12345678';
$mail->setFrom('no-reply@conectivomx.com', 'ConectivoMX');
$mail->addAddress($destinatario, 'Alex');
$mail->Subject = $asunto;
$mail->msgHTML("
<html> 

<body> 

<h1>Recibiste un nuevo mensaje desde el formulario de contacto</h1>

<p>Informacion enviada por el usuario de la web:</p>

<p>nombre: {$nombre}</p>

<p>email: {$email}</p>

<p>telefono: {$telefono}</p>

<p>mensaje: {$mensaje}</p>

</body> 

</html>

<br />"), __DIR__);
$mail->Body =  "";
//$mail->addAttachment('test.txt');
if (!$mail->send()) {
    echo 'Error de envio: ' . $mail->ErrorInfo;
} else {
    echo 'Mensaje enviado';
}



?>

