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
$to = "info.conectivomx@gmail.com"; // Add your email address inbetween the "" replacing yourname@yourdomain.com - This is where the form will send a message to.
$subject = "Ha sido contactado por:  $name";
$body = "Tienes un mensaje nuevo desde ConecticoMX.\n\n"."Aqui los detalles:\n\nNombre: $name\n\nCorreo: $email\n\nTelefono: $phone\n\nMensaje:\n$message";
$header = "From: noreply@conectivomx.com\n"; // This is the email address the generated message will be from. We recommend using something like noreply@yourdomain.com.
$header .= "Reply-To: $email";	

if(!mail($to, $subject, $body, $header)){
    echo "no se envio";
}else{
    echo "se envio el correo";
}
  
?>
