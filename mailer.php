<?php
require 'vendor/PHPMailer/PHPMailerAutoload.php';
session_start();

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    if ($_POST['captcha'] == $_SESSION['cap_code']) {
        date_default_timezone_set('Etc/UTC');
        $mail = new PHPMailer;

        $mail->SMTPDebug = 0; 

        $mail->isSMTP();
        $mail->Host = 'smtp.gmail.com';
        $mail->SMTPAuth = true;
        $mail->SMTPSecure = 'tls';    
        $mail->Port = 587;
        $mail->Username = 'contact@burnrunning.org';
        $mail->Password = 'burn2015';

        $mail->CharSet = 'UTF-8';

        $from_email = $_POST['email'];
        $from_name = $_POST['name'];
        $to_email = 'contact@burnrunning.org';
        $to_name = 'BURN Contact';

        $mail->From = $_POST['email'];
        $mail->FromName = $_POST['name'];
        $mail->addAddress($to_email, $to_name);
        $mail->addReplyTo($to_email, $to_name);
        $mail->Subject = 'Burn Race Contact Email from ' . $from_name;

        $mail->isHTML(true);
        $mail->Body = "<h3>This email was sent from Burn Race 2015 Coyote hills contact form.</h3>";
        $mail->Body .= "<p>From: " . $_POST['name'] . "</p>";
        $mail->Body .= "<p>Email: " . $_POST['email'] . "</p>";
        $mail->Body .= "<p>Message: </p>";
        $mail->Body .= "<pre>" . $_POST['message'] . "</pre>";

        $response['mail'] = $mail->send();
        $response['cap'] = true;
    } else {
        $response['cap'] = false;
    }

    echo json_encode($response);
}
exit()
?>
