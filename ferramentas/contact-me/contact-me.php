<?php
// Check for empty fields
if(empty($_POST['name']) || empty($_POST['email']) || empty($_POST['message']) || !filter_var($_POST['email'], FILTER_VALIDATE_EMAIL)) {
  http_response_code(500);
  exit();
}

$name = strip_tags(htmlspecialchars($_POST['name']));
$email = strip_tags(htmlspecialchars($_POST['email']));
$phone = strip_tags(htmlspecialchars($_POST['phone']));
$message = strip_tags(htmlspecialchars($_POST['message']));

// Create the email and send the message
$to = "inova@inova.tv"; // Add your email address inbetween the "" replacing yourname@yourdomain.com - This is where the form will send a message to.
$subject = "Formulário de contato do site da Inova: $name";
$body = "Você recebeu uma mensagem através do site da Inova.\n\n"."Segue abaixo:\n\nNome: $name\n\nEmail: $email\n\nTelefone: $phone\n\nMENSAGEM:\n$message";
$header = "From: inova@inova.tv"; // This is the email address the generated message will be from. We recommend using something like noreply@yourdomain.com.

if(!mail($to, $subject, $body, $header))
  http_response_code(500);
?>