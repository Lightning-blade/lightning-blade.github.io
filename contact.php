<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Get form field data
    $name = $_POST['name'];
    $email = $_POST['email'];
    $subject = $_POST['subject'];
    $message = $_POST['message'];
    
    // Recipient email address (replace with your own email)
    $to = 'allfsocial@pm.me';
    
    // Create email headers
    $headers = "From: $email\r\nReply-To: $email\r\n";
    
    // Compose the email content
    $email_content = "You have received a new message from your website contact form.\n\n";
    $email_content .= "Name: $name\n";
    $email_content .= "Email: $email\n";
    $email_content .= "Subject: $subject\n\n";
    $email_content .= "Message:\n$message\n";
    
    // Send email
    if (mail($to, $subject, $email_content, $headers)) {
        echo "OK"; // This message will be shown on successful submission
    } else {
        echo "Error"; // This message will be shown if there is an error in sending the email
    }
}
?>
