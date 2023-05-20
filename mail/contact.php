<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Get the form fields
    $name = $_POST['name'];
    $email = $_POST['email'];
    $subject = $_POST['subject'];
    $message = $_POST['message'];

    // Create the email content
    $email_content = "Name: $name\n";
    $email_content .= "Email: $email\n";
    $email_content .= "Subject: $subject\n";
    $email_content .= "Message: $message\n";

    // Set the recipient email address
    $to = "mohdaqib79656@gmail.com";

    // Set the email headers
    $headers = "From: $email \r\n";
    $headers .= "Reply-To: $email \r\n";

    // Send the email
    $mail_sent = mail($to, $subject, $email_content, $headers);

    // Check if the email was sent successfully
    if ($mail_sent) {
        // Email sent successfully
        echo "Thank you for your message. We will get back to you soon.";
    } else {
        // Failed to send email
        echo "Oops! An error occurred while sending your message.";
    }
}
?>
