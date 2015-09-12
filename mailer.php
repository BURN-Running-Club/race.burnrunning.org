<?php
require 'vendor/PHPMailer/PHPMailerAutoload.php';

session_start();

if ($_POST['captcha'] == $_SESSION['cap_code']) {
    $cap = 1;
    send();
} 
else {
    $cap = 0;
}

echo $cap;
?>

<?php
function send() {
 
	date_default_timezone_set('Etc/UTC');
    $mail = new PHPMailer;
    
    $mail->SMTPDebug = 2; // Enable verbose debug output

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
    $mail->isHTML(true);
    $mail->Subject = 'Burn Race Contact Email(testing, please ignore)';
    $mail->Body = 'racing website mailer testing, please ignore...:\n';
    

    if (!$mail->send()) {
        echo 'Message could not be sent.';
        echo 'Mailer Error: ' . $mail->ErrorInfo;
    } 
    else {
        echo 'Message has been sent';
    }


}
?>
