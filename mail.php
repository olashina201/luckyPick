<?php

$name  = $_POST['name'];
$last_name = $_POST['surname'];
$email    = $_POST['email'];
$message = $_POST['message'];

$EmailTo = "yourname@domain.com";
$Subject = "New message from Leno landing page";

// prepare email body text
$Body = "";
$Body .= "Name: ";
$Body .= $name;
$Body .= "\n";
$Body .= "Email: ";
$Body .= $email;
$Body .= "\n";
$Body .= "Message: ";
$Body .= $message;
$Body .= "\n";
$Body .= "Terms: ";

// send email
$success = mail($EmailTo, $Subject, $Body, "From:".$email);

// redirect to success page
if ($success){
   echo "success";
}else{
    echo "Something went wrong :(";
  
}
?>