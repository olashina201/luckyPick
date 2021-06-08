<?php

    if (isset($_POST['submit'])) {

        $name = $_POST['name'];
        $email = $_POST['email'];
        $last_name = $_POST['surname'];
        $message = $_POST['message'];


        $to = "olashina201@gmail.com, $email";
        $subject = $name."\x10 ";
        $headers = "From: Naeem Hussain <naeem@example.com>";
        $email_message = '

        Dear '.$name.'
        Thank you very much to contact us. You contact inforamtion below


        Name   : '.$name.'
        Email  : '.$email.'
        Surname :'.$last_name.'
        Message:'.$message.'

        ';



        mail($to,$subject,$email_message, $headers);

        echo "<script type=text/javascript> alert('message sent successfully') </script>";
        }
        else{
            die( "<script type=text/javascript> alert('message not sent') </script>");
        }
?>