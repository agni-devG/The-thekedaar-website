<?php
   require 'vendor/autoload.php';
   use PHPMailer\PHPMailer\PHPMailer;
   $mail = new PHPMailer;
   $mail->isSMTP();
   $mail->SMTPDebug = 2;
   $mail->Host = 'aspmx.l.google.com';
   $mail->Port = 25;
   $mail->SMTPAuth = true;
   $mail->Username = 'leads@thethekedaar.in';
   $mail->Password = 'Leads@#%321';
   $mail->setFrom('leads@thethekedaar.in', 'Your Name');
   $mail->addReplyTo('leads@thethekedaar.in', 'Your Name');
   $mail->addAddress('leads@thethekedaar.in', 'Receiver Name');
   $mail->Subject = 'Checking if PHPMailer works';
   //$mail->msgHTML(file_get_contents('message.html'), __DIR__);
   $mail->Body = 'This is just a plain text message body';
   //$mail->addAttachment('attachment.txt');
   if (!$mail->send()) {
       echo 'Mailer Error: ' . $mail->ErrorInfo;
   } else {
       echo 'The email message was sent.';
   }
?>