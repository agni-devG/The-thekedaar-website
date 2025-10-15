<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require 'src/Exception.php';
require 'src/PHPMailer.php';
require 'src/SMTP.php';
require 'config.php'; // Import SMTP settings

if ($_SERVER["REQUEST_METHOD"] === "POST") {
    // Collect and sanitize form data
    $fullName = htmlspecialchars($_POST['fullName']);
    $email = htmlspecialchars($_POST['email']);
    $service = htmlspecialchars($_POST['service']);
    $location = htmlspecialchars($_POST['location']);
    $budget = htmlspecialchars($_POST['budget']);

    // Initialize PHPMailer
    $mail = new PHPMailer(true);

    try {
        // SMTP Settings
        $mail->isSMTP();
        $mail->Host       = $smtp_host;
        $mail->SMTPAuth   = true;
        $mail->Username   = $smtp_username;
        $mail->Password   = $smtp_password;
        $mail->SMTPSecure = $smtp_secure;
        $mail->Port       = $smtp_port;

        // Recipients
        $mail->setFrom($smtp_from, $smtp_from_name);
        $mail->addAddress($smtp_to);
        $mail->addReplyTo($email, $fullName);

        // Email Content
        $mail->isHTML(true);
        $mail->Subject = "New Inquiry from $fullName";
        $mail->Body = "
            <h2>New Contact Form Submission</h2>
            <p><strong>Name:</strong> {$fullName}</p>
            <p><strong>Email:</strong> {$email}</p>
            <p><strong>Service Interested In:</strong> {$service}</p>
            <p><strong>Location:</strong> {$location}</p>
            <p><strong>Budget:</strong> {$budget}</p>
        ";

        // Send Email
        $mail->send();
        echo "success";
    } catch (Exception $e) {
        echo "Mailer Error: {$mail->ErrorInfo}";
    }
} else {
    echo "Invalid request";
} 




?>
