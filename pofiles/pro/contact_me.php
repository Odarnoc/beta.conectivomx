<?php
// Check for empty fields
if(empty($_POST['name']) || empty($_POST['email']) || empty($_POST['phone']) || empty($_POST['message']) || !filter_var($_POST['email'], FILTER_VALIDATE_EMAIL)) {
  http_response_code(500);
  exit();
}

$name = strip_tags(htmlspecialchars($_POST['name']));
$email = strip_tags(htmlspecialchars($_POST['email']));
$phone = strip_tags(htmlspecialchars($_POST['phone']));
$message = strip_tags(htmlspecialchars($_POST['message']));

// Create the email and send the message
$to = "guty.boo69@gmail.com"; // Add your email address inbetween the "" replacing yourname@yourdomain.com - This is where the form will send a message to.
$subject = "ConectivoMX contacto de  $name";
$body = "Tienes un mensaje nuevo desde ConecticoMX.\n\n"."Aqui los detalles:\n\nNombre: $name\n\nCorreo: $email\n\nTelefono: $phone\n\nMensaje:\n$message";

if(!mail($to, $subject, $body)){
    echo "no se envio";
}else{
    echo "se envio el correo";
}
  
?>
