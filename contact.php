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

    $result = mail($EmailTo, $subject, $formcontent, $mailheader);
    
    if ($result) {
        echo "<script type=text/javascript> alert('message sent successfully') </script>";
    } else {
        echo "<script type=text/javascript> alert('message sent successfully') </script>";
    };
}
?>