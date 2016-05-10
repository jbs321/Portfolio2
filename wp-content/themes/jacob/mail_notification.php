<?php
require '../../plugins/gmail-smtp/PHPMailer/PHPMailerAutoload.php';

$email = 'jacob.balabanov@gmail.com';
$password = 'Passgmail1';

if(isset($_POST['send']))
{
// Fetching data that is entered by the user
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $subject = $_POST['subject'];
    $message = $_POST['message'];

// Configuring SMTP server settings
    $mail = new PHPMailer;
    $mail->isSMTP();
    $mail->Host = 'smtp.gmail.com';
    $mail->Port = 587;
    $mail->SMTPSecure = 'tls';
    $mail->SMTPAuth = true;
    $mail->Username = $email;
    $mail->Password = $password;

// Email Sending Details
    $mail->addAddress('jbs321.work@gmail.com');
    $mail->Subject = $subject;
    $mail->msgHTML($phone . ", " . $message);

// Success or Failure
    if (!$mail->send()) {
        $error = "Mailer Error: " . $mail->ErrorInfo;
        echo '<p id="para">'.$error.'</p>';
    }
    else {
        echo '<p id="para">Message sent!</p>';
    }
}
else{
    echo '<p id="para">Please enter valid data</p>';
}
?>