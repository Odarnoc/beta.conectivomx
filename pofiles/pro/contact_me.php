<?php
/* Check for empty fields
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
$subject = "Ha sido contactado por:  $name";
$body = "Tienes un mensaje nuevo desde ConecticoMX.\n\n"."Aqui los detalles:\n\nNombre: $name\n\nCorreo: $email\n\nTelefono: $phone\n\nMensaje:\n$message";
$header = "From: info@conectivomx.com"; // This is the email address the generated message will be from. We recommend using something like noreply@yourdomain.com.
$header .= "Reply-To: $email";	

if(!mail("guty.boo69@gmail.com", $subject, $body, "From: info@conectivomx.com")){
    echo "no se envio";
}else{
    echo "se envio el correo";
    echo $to;
    echo $subject;
    echo $body;
    echo $header;
    
}*/

ini_set( 'display_errors', 1 );
    error_reporting( E_ALL );
    $from = "info@conectivomx.com";
    $to = "guty.boo69@gmail.com";
    $subject = "Checking PHP mail";
    $message = "PHP mail works just fine";
    $headers = "From:" . $from;
    mail($to,$subject,$message, $headers);
    echo "The email message was sent.";
  
?>
