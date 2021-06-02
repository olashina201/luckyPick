<?php

if (isset($_POST['submit'])) {

    $name  = $_POST['name'];
    $last_name = $_POST['surname'];
    $email    = $_POST['email'];
    $message = $_POST['message'];

    $EmailTo = "olashina201@gmail.com";
    $Subject = "New message from Leno landing page";

    $formcontent="From: $name \n Message: $message";
    $subject = "Contact Form";
    $mailheader = "From: $email \r\n";
    mail($EmailTo, $subject, $formcontent, $mailheader) or die("Error!");
    echo "Thank You!";

    // // prepare email body text
    // $Body = "";
    // $Body .= "Name: ";
    // $Body .= $name;
    // $Body .= "\n";
    // $Body .= "Email: ";
    // $Body .= $email;
    // $Body .= "\n";
    // $Body .= "Message: ";
    // $Body .= $message;
    // $Body .= "\n";

    // // send email
    // $success = mail($EmailTo, $Subject, $Body, "From:".$email);

    // // redirect to success page
    // if ($success){
    //     echo "success";
    // }else{
    //     echo "Something went wrong :(";
    // }
}