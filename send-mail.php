<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

require 'vendor/autoload.php';
$config = include 'config.php';

// Only allow POST
if ($_SERVER['REQUEST_METHOD'] !== 'POST') {
    echo json_encode(['status' => 'error', 'message' => 'Invalid request method.']);
    exit;
}

// Sanitize inputs
$name = trim($_POST['fullName'] ?? '');
$email = trim($_POST['email'] ?? '');
$service = trim($_POST['service'] ?? '');
$location = trim($_POST['location'] ?? '');
$budget = trim($_POST['budget'] ?? '');

// Validation
if (empty($name) || empty($email) || empty($service) || empty($location) || empty($budget)) {
    echo json_encode(['status' => 'error', 'message' => 'Please fill all required fields.']);
    exit;
}

$mail = new PHPMailer(true);

try {
    // SMTP config
    $mail->isSMTP();
    $mail->Host = $config['smtp_host'];
    $mail->SMTPAuth = $config['smtp_auth'];
    $mail->Username = $config['smtp_username'];
    $mail->Password = $config['smtp_password'];
    $mail->SMTPSecure = $config['smtp_secure'];
    $mail->Port = $config['smtp_port'];

    // Recipients
    $mail->setFrom($email, $name);
    $mail->addAddress($config['receiver_email'], $config['receiver_name']);

    // Email content
    $mail->isHTML(true);
    $mail->Subject = "New Contact Form Submission from $name";
    $mail->Body = "
        <b>Name:</b> $name<br>
        <b>Email:</b> $email<br>
        <b>Service Interested:</b> $service<br>
        <b>Project Location:</b> $location<br>
        <b>Budget:</b> $budget
    ";

    $mail->send();
    echo json_encode(['status' => 'success', 'message' => 'Message sent successfully!']);
} catch (Exception $e) {
    echo json_encode(['status' => 'error', 'message' => "Mailer Error: {$mail->ErrorInfo}"]);
}
