<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Collect the form data
    $sender = strip_tags(trim($_POST["sender"]));
    $email_body = strip_tags(trim($_POST["email_body"]));
    $subject = strip_tags(trim($_POST["subject"]));

    // Set the recipient email address
    $to = 'columbialivinglab@gmail.com';

    // Build the email content
    $email_content = "Sender: $sender\n";
    $email_content .= "Email Body:\n$email_body\n";

    // Build the email headers
    $headers = "From: $sender";

    // Send the email
    if (mail($to, $subject, $email_content, $headers)) {
        echo 'Thank you for your message. It has been sent.';
    } else {
        echo 'Sorry, there was an error sending your message.';
    }
} else {
    // Not a POST request, handle accordingly
    echo 'Invalid request';
}
?>
