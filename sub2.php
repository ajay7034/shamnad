<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = htmlspecialchars($_POST['name']);
    $email = htmlspecialchars($_POST['email']);
    $subject = htmlspecialchars($_POST['subject']);
    $message = htmlspecialchars($_POST['message']);
    
    // Email configuration
    $to = "ajayvalayamnandu@gmail.com";
    $headers = "From: $name <$email>\r\n"; // Include the name with the email address
    $headers .= "Reply-To: $email\r\n";   // Add a Reply-To header for convenience

    // Email body
    $body = "\n$message";  // Only the message will appear in the email body

    // Send email
    if (mail($to, $subject, $body, $headers)) {
        echo "Message sent successfully!";
    } else {
        echo "Failed to send the message.";
    }
}
?>
