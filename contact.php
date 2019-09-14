<?php

    $name = $_POST['name'];
    $email = $_POST['email'];
    $message = $_POST['message'];

$email_from= 'Petals-Unique Site';
$email_subject ='New Message from Website Contact';

$email_body ="Name:$name.\n".
            "Email: $email.\n".
            "Message: $message.\n";



$to = "smohamed26208@gmail.com";
$headers = "From: $email_from \r\n";
$headers .="Reply-To: $email \r\n";

mail($to,$email_subject,$email_body,$headers);
header("location: contact.html");
               

?>