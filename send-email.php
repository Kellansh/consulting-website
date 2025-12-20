<?php
// get data from form
$name = $_POST['name'];
$email= $_POST['email'];
$message= $_POST['message'];
// if nickname present, flag email as spam

$to = "MY WEBSITE EMAIL";
$subject = "Message from contact form";

$txt ="Name: ". $name . "\r\n  Email: "
. $email . "\r\n Message: " . $message;

$headers = "From: MY WEBSITE EMAIL" . "\r\n" .
if($email != NULL) {
    mail($to, $subject, $txt, $headers);
}

// Redirect to
header("Location:index.html");
?>
