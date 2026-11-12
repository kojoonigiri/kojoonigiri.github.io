<?php
/**
 * Kojo Onigiri - Contact Form Handler
 * Sends form submission to kojo.onigiri@gmail.com
 *
 * NOTE: GitHub Pages does not support PHP execution.
 * This script works when hosted on a PHP-supported server (e.g., cPanel, LAMP, etc.)
 */

// Check if form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Get form data
    $name = isset($_POST['name']) ? trim($_POST['name']) : '';
    $email = isset($_POST['email']) ? trim($_POST['email']) : '';
    $message = isset($_POST['message']) ? trim($_POST['message']) : '';

    // Validate required fields
    if (empty($name) || empty($email) || empty($message)) {
        echo "Please fill in all fields.";
        exit;
    }

    // Validate email format
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        echo "Invalid email format.";
        exit;
    }

    // Email details
    $to = "kojo.onigiri@gmail.com";
    $subject = "New Message from Kojo Onigiri Website";
    $body = "New message from website submission:\n\n";
    $body .= "Name: $name\n";
    $body .= "Email: $email\n";
    $body .= "Message:\n$message\n";
    $body .= "\nSent on: " . date('Y-m-d H:i:s');

    // Headers
    $headers = "From: $email\r\n";
    $headers .= "Reply-To: $email\r\n";
    $headers .= "X-Mailer: PHP/" . phpversion();

    // Send email
    if (mail($to, $subject, $body, $headers)) {
        echo "success";
    } else {
        echo "error";
    }

    exit;
}

// If not POST request, show error
echo "Invalid request.";
?>
