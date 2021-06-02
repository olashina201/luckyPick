
  <?php
// use \PHPMailer\PHPMailer\PHPMailer;
//   require_once 'PHPMailer/Exception.php';
//   require_once 'PHPMailer/PHPMailer.php';
//   require_once 'PHPMailer/SMTP.php';
//   $mail = new PHPMailer(true);


//   try {
//           $mail->isSMTP();
//           $mail->Host = 'smtp.gmail.com';
//           $mail-> SMTPAuth = true;
//           $mail -> username = 'olashina201@gmail.com';
//           $mail -> password = 'quadri201';
//           $mail -> SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;
//           $mail -> port = '578';

//           $mail -> setFrom('olashina201@gmail.com');
//           $mail -> addAddress('olashina201@gmail.com');

//           $mail -> isHTML(true);
//           $mail -> Subject = 'message received';
//           $mail -> Body = '<h3> Name: $name <br> Email: $email <br> Message: $message </h3>';

//           $mail -> send();

//           $alert = "<script type=text/javascript> alert('message sent successfully') </script>";
//         } catch (\Exception $e) {
//           echo "<script type=text/javascript> alert('.$e->getMessage().') </script>";
//         }
  

    if (isset($_POST['submit'])) {
      $name  = $_POST['name'];
      $last_name = $_POST['surname'];
      $email    = $_POST['email'];
      $message = $_POST['message'];

      $to = 'olashina201@gmail.com';
      $subject = $name;
      $headers = 'From $name';
      
      $Body = "";
      $Body .= "Hello";
      $Body .= "/n";
      $Body .= "Thank you for contacting us. We have received your message and we aim to get back to you as soon as possible.";
      $Body .= "Your enquiry: ";
      $Body .= "\n";
      $Body .= "Name: ";
      $Body .= $name;
      $Body .= "\n";
      $Body .= "Email: ";
      $Body .= $email;
      $Body .= "\n";
      $Body .= "Message: ";
      $Body .= $message;
      $Body .= "\n";

      // Function to send the email.
      // Attached to a variable so it can it can be checked in an if statement later.
      $success = mail($to, $subject, $Body, $email);
      if ($success){
        echo 'sent successfully';
      } else {
        echo 'error';
      };
?>